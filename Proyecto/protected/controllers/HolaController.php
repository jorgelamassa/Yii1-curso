<?php
// http://localhost/yii/Proyecto/hola/index
class HolaController extends Controller{
    //atributos

    //metodos
    public function actionindex(){
        // con esta sentecia estoy acccediendoa  todos registro q esten en la table user
        $model = CActiveRecord::model("Users")->findAll();
        //$model = Users::model()->findAll();
        //con este metodo voy a renderizar el archivo index
        $twitter = "@curso yii1";
        $this -> render("index",array("model"=>$model,"twitter" => $twitter));
    }
}

?>