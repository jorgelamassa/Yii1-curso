<?php

class fhappy extends CApplicationComponent
{
    //ATRIBUTOS
    public $trato;

    // metodos
    public function init()
    {
        echo "<div align=center> inicializado fhappy </div>";
    }
    public function hi()
    {
        if(date("a")== "am")
        {
            return "Good Morning  ".date("H:i:s a");
        }
        else 
        {
        return "Good afternoon  ".date("H:i:s a");
        } 
    }

    public function hi2()
    {
        if($this->trato === null)
        {
            return "Good Morning,how are you Mrs.Jorge";
        }
        if ($this->trato === 1)
        {
            return "Good afternoon,how are you Massa ";
        } 
    }
}
?>