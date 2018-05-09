<?php

/*
 * file Class to read from input file 
 * <Intialize> ($filename , $handle , $mode)
 */

class fileUtil {

    private $filename;
    private $handle;
    private $mode;

    public function fileUtil($filename, $mode) {
        $this->filename = $filename;
        $this->mode = $mode;
        $this->handle = fopen($filename, $mode);
    }

    function get_new_open($filename, $mode) {
//        return new fileUtil($filename, $mode);
    }

    function read() {
        echo fread($this->handle, filesize($this->filename));
    }
    public function __destruct() {
        fclose($this->handle);
        echo 'file has closed';
    }
}

$file = new fileUtil("./user_class.php", 'r');
$file->read();
