<?php

require_once "./autoloader/DirectoriesAutoloaderException.php";
require_once "./autoloader/ExtensionFilterIteratorDecorator.php";

class DirectoriesAutoloader {
    //--- Singleton
    private function __construct (){}
    private static $_instance = false;
    public static function instance ($pTmpPath){
        if(self::$_instance === false){
            self::$_instance = new DirectoriesAutoloader();
            self::$_instance->setCachePath ($pTmpPath);
        }
        return self::$_instance;
    }
    //--- /Singleton

    //--- Cache
    private $_cachePath;
    public function setCachePath ($pTmp){
        if (!is_writable ($pTmp)){
            throw new DirectoriesAutoloaderException('Cannot write in given CachePath ['.$pTmp.']');
        }
        $this->_cachePath = $pTmp;
    }
    //--- /Cache

    //--- Autoload
    public function autoload ($pClassName){
        //On regarde si on connais la classe
        if ($this->_loadClass ($pClassName)){
            return true;
        }

        //Si on a le droit de tenter la regénération du fichier d'autoload, on retente l'histoire
        if ($this->_canRegenerate){
            $this->_canRegenerate = false;//pour éviter que l'on
            $this->_includesAll ();
            $this->_saveInCache ();
            return $this->autoload ($pClassName);
        }
        //on a vraiment rien trouvé.
        return false;
    }
    private $_canRegenerate = true;
    //--- /Autoload

    /**
     * Recherche de toutes les classes dans les répertoires donnés
     */
    private function _includesAll (){
        //Inclusion de toute les classes connues
        foreach ($this->_directories as $directory=>$recursive){
            $directories = new AppendIterator ();

            //On ajoute tous les chemins à parcourir
            if ($recursive){
                $directories->append (new RecursiveIteratorIterator (new RecursiveDirectoryIterator ($directory)));
            }else{
                $directories->append (new DirectoryIterator ($directory));
            }

            //On va filtrer les fichiers php depuis les répertoires trouvés.
            $files = new ExtensionFilterIteratorDecorator ($directories);
            $files->setExtension ('.php');

            foreach ($files as $fileName){
                $classes = $this->_extractClasses ((string) $fileName);
                foreach ($classes as $className=>$fileName){
                    $this->_classes[strtolower ($className)] = $fileName;
                }
            }
        }
    }

    /**
     * Extraction des classes & interfaces d'un fichier
     */
    private function _extractClasses ($pFileName){
        $toReturn = array ();
        $tokens = token_get_all (file_get_contents ($pFileName, false));
        $tokens = array_filter ($tokens, 'is_array');

        $classHunt = false;
        foreach ($tokens as $token){
            if ($token[0] === T_INTERFACE || $token[0] === T_CLASS){
                $classHunt = true;
                continue;
            }

            if ($classHunt && $token[0] === T_STRING){
                $toReturn[$token[1]] = $pFileName;
                $classHunt = false;
            }
        }

        return $toReturn;
    }
    private $_classes = array ();
    private function _saveIncache (){
        $toSave = '<?php $classes = '.var_export ($this->_classes, true).'; ?>';
        file_put_contents ($this->_cachePath.'directoriesautoloader.cache.php', $toSave);
    }

    /**
     * Tente de charger une classe
     */
    private function _loadClass ($pClassName){
        $className = strtolower ($pClassName);
        if (count ($this->_classes) === 0){
            if (is_readable ($this->_cachePath.'directoriesautoloader.cache.php')){
                require ($this->_cachePath.'directoriesautoloader.cache.php');
                $this->_classes = $classes;
            }
        }
        if (isset ($this->_classes[$className])){
            require_once ($this->_classes[$className]);
            return true;
        }
        return false;
    }

    /**
     * Ajoute un répertoire a la liste de ceux à autoloader
     */
    public function addDirectory ($pDirectory, $pRecursive = true){
        if (! is_readable ($pDirectory)){
            throw new DirectoriesAutoloaderException('Cannot read from ['.$pDirectory.']');
        }
        $this->_directories[$pDirectory] = $pRecursive ? true : false;
        return $this;
    }
    private $_directories = array ();
}