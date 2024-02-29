<?php

interface IMethods {
    public function show();
    public function addStyles($arr);
}

class InputEmail implements IMethods 
{
    public $_html = "<input type='email' />";
    public $styles = '';
    
    public function show() {
        echo $this->_html;
    }

    public function addStyles($arr) {

        foreach ($arr as $key => $value) {
            $this->styles .= "$key: $value;";
        }

        $this->_html =  "<input type='email' style='$this->styles' />";
    }
}

class InputFile implements IMethods 
{
    public $_html = "<input type='file' />";
    public $styles = '';
    
    public function show() {
        echo $this->_html;
    }

    public function addStyles($arr) {

        foreach ($arr as $key => $value) {
            $this->styles .= "$key: $value;";
        }

        $this->_html =  "<input type='file' style='$this->styles' />";
    }
}

class InputText implements IMethods 
{
    public $_html = "<input type='text' />";
    public $styles = '';
    
    public function show() {
        echo $this->_html;
    }

    public function addStyles($arr) {

        foreach ($arr as $key => $value) {
            $this->styles .= "$key: $value;";
        }

        $this->_html =  "<input type='text' style='$this->styles' />";
    }
}