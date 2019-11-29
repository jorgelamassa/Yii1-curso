<?php
// el nombre de la clase debe tener el mismo nombre del archivo
class CountriesController extends Controller
    {
        //metodos
        public function Actionindex()
        {
            /* inicializamo el modelo para poder comenzar en la bd */
            //$model=new countries();
            // al crear esta intancia del no,bre pais esta vacio podemos pasarle valores
            //$model->nombre="Colombia"; 
            // al crear esta intancia del no,bre pais esta vacio podemos pasarle valores
            //$model->status=1;
            // despues de haber setado los atributos del modelo con save() creamos un nuevo registro
            //$model->save();
            /* Para consultar la tabla creamos la variable  acediendo a la clase y modelo  
            =countries::model() con el metod estaico creado en el modelo y colocamos ->findAll();
            */
            /*
            para manejos dede errores
            yii::app()->user->setFlash('danger','error danger');
            yii::app()->user->setFlash('success','error success');
            yii::app()->user->setFlash('info','error info');
            yii::app()->user->setFlash('warning','error warning');*/

            /* =====================================================================
             de esta manera podemos llamar clase externa para eso 
             definimos una bariable globlab en main la cual nos dara la ruta
             de nuestro fichero  cofig mane la url de el fichero  lo podemos llamar 
             de esta manera o definir en el array import de main
            ========================================================================
            yii::import("me.test.*");
            $me =new Test;
            $me2 =new Test2;
            ========================================================================
            ?> 
            ========================================================================

            <div align="center"> <?php
            echo $me->hi()."<br>";
            echo $me2->hi2()."<br>";
            echo Yii::getPathOfAlias("application")."<br>";
            echo Yii::getPathOfAlias("webroot")."<br>";
            echo Yii::getPathOfAlias("ext")."<br>";
            echo Yii::getPathOfAlias("zii")."<br>";
            ========================================================================
            ?> </div> <?php
            ========================================================================
            usu de componente
            echo "<div align=center>".Yii::app()->happy->hi2()."</div><br>";
            echo "<div align=center>".Yii::app()->happy->hi()."</div><br>";*/
         
            /* tarerme todo de tabla de baese de datos*/
            $countries =countries::model()->findAll();
            /* 
            se envia a la vista de la Siguiente manera 
            */
            $this->render("index",array("countries"=>$countries));
            
        }

        public function actionCreate()
        {
           /* inicializamo el modelo para poder comenzar en la bd */
            $model=new countries();
            /* si estae añ en post de vista countries*/
            if(isset($_POST['countries']))
            {
                /* asoiganmos las variables post a los qtributos del modelo
                $model->nombre=$_POST['countries']['nombre'];
                $model->nombre=$_POST['countries']['status']; */

                /* de esta manera atributes del active record y este 
                atributo recibe una rray clave valor de los atributos del modelo 
                el cual esta propieda atribbtos ahce de manera automatico los atributos del modelo con los datos _post*/
                $model->attributes=$_POST['countries']; 
                if($model->save())
                {
                    yii::app()->user->setFlash('success','Saved record');
                    $this->redirect(array('countries/index'));
                }else
                {
                    yii::app()->user->setFlash('danger','unsaved record');  
                }
            }
            /* 
            se envia a la vista de la Siguiente manera 
            */
            $this->render("create",array("model"=>$model));    
        }           

        public function actionUpdate($id)
        {
            $model=Countries::model()->findByPk($id);
            if(isset($_POST['countries']))
                {
                    $model->attributes=$_POST['countries'];
                    if($model->save())
                    {
                        yii::app()->user->setFlash('success','Update record');
                        $this->redirect(array('countries/index'));
                    }else
                    {
                        yii::app()->user->setFlash('danger','update not saved');      
                    }
                }
            $this->render("update",array("model"=>$model));    
        }

        public function actionDelete($id)
        {
            $model=Countries::model()->deleteByPk($id);
            $this->redirect(array("index")); 
        }

        public function actionEnabled($id)
        {
            $model=Countries::model()->findByPk($id);
            if ($model->status == 1) {
                # code...
                $model->status=0;
                $model->save();
            } else {
                # code...
                $model->status=1;
                $model->save();
            }
            $this->redirect(array('countries/index'));
        }

        public function actionView($id)
        {
            $model=Countries::model()->findByPk($id);
            $this->render("view",array("model"=>$model));
        }
        

    }

