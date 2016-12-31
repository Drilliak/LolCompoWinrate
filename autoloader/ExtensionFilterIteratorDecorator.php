<?php

class ExtensionFilterIteratorDecorator extends FilterIterator {
    private $_ext;
    public function accept (){
        if (substr ($this->current (), -1 * strlen ($this->_ext)) === $this->_ext){
            return is_readable ($this->current ());
        }
        return false;
    }
    public function setExtension ($pExt){
        $this->_ext = $pExt;
    }
}