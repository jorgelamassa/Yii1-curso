<?php 
/* creamos la clase modelo de countries tal cual como en la bd

================================================================
CActiveRecord provee algunos métodos que pueden ser sobreescritos
en las clases que la heredan para personalizar su flujo de trabajo. 
beforeValidate y afterValidate: estos métodos son invocados antes y 
después de que la validación sea ejecutada.*/
class countries extends CActiveRecord{


    //metodos
    public static function model($classname=__CLASS__)
    {   
        // nos ayudara acceder al modelo desde el controlador
        return parent::model($classname);
    }

    public function tableName()
    {
        // nos ayudara a definir el nombre de la tBLA en la bd
        return "countries";
    }
    
    public function rules()
    {
        // aqui indicaremos las reglas de validacion de los atributos del modelo de la bd
        return array(array("nombre,status","required"));
    }

}

?>