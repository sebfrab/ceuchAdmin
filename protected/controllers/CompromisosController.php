<?php

class CompromisosController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','view', 'create','update', 'admin','delete', 'listAndroid', 'deleteAndroid', 'createAndroid', 'updateAndroid'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Compromisos;

		$this->performAjaxValidationSubmit($model);

		if(isset($_POST['Compromisos']))
		{
                    $model->attributes=$_POST['Compromisos'];
                    if(isset($_POST['ajax']) && $_POST['ajax']==='compromisos-form')
                    {
                        if($model->save()){
                            echo CJSON::encode(array(
                                'insert' => true,
                                'redirectUrl' => Yii::app()->user->returnUrl=array($model->idcompromisos)
                            ));
                            Yii::app()->end();
                        } 
                    }else{
                        if($model->save())
                            $this->redirect(array('view','id'=>$model->idcompromisos));
                    }   
                    
		}

		$this->render('create',array(
			'model'=>$model,
                        'url'=>'compromisos/create'
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		$this->performAjaxValidationSubmit($model);

		if(isset($_POST['Compromisos']))
		{
                    
                    $model->attributes=$_POST['Compromisos'];
                    if(isset($_POST['ajax']) && $_POST['ajax']==='compromisos-form')
                    {  
                        if($model->save()){ 
                            echo CJSON::encode(array(
                                'insert' => true,
                                'redirectUrl' => Yii::app()->createUrl('compromisos/'.$model->idcompromisos)
                            ));
                            Yii::app()->end();
                        } 
                    }else{
                        if($model->save()){
                            $this->redirect(array('view','id'=>$model->idcompromisos));
                        }
                    }   
		}

		$this->render('update',array(
			'model'=>$model,
                        'url'=>'compromisos/update/'.$id
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Compromisos');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Compromisos('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Compromisos']))
			$model->attributes=$_GET['Compromisos'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Compromisos the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Compromisos::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Compromisos $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='compromisos-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        protected function performAjaxValidationSubmit($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='compromisos-form')
		{
			$errors = CActiveForm::validate($model);
                        if ($errors != '[]')
                        {
                            echo $errors;
                            Yii::app()->end();
                        }
		}
	}
       
        /****************************************
	 **************** ANDROID ***************
	 ****************************************/
        
        public function actionListAndroid(){
            $model = Compromisos::model()->findall(array('order'=>'idcompromisos DESC'));
            echo CJSON::encode(array(
                'compromisos' => $model,
            ));
        }
        
        public function actionDeleteAndroid($id)
	{
		$this->loadModel($id)->delete();
                echo CJSON::encode(array(
                    'response' => true,
                ));

	}
        
        
        public function actionCreateAndroid()
	{
		$model=new Compromisos;

		if(isset($_POST['Compromiso_titulo']) && isset($_POST['Compromiso_cuerpo']) && isset($_POST['Comrpomiso_fecha']))
		{
                    
                    $fecha1=$_POST['Comrpomiso_fecha'];
                    $fecha2=date("Y-m-d",strtotime($fecha1)); 
                    
                    $model->titulo=$_POST['Compromiso_titulo'];
                    $model->cuerpo=$_POST['Compromiso_cuerpo'];
                    $model->fecha=$fecha2;

                    if($model->save()){
                            echo CJSON::encode(array(
                                'response' => true,
                            ));
                            Yii::app()->end();
                    }else{
                        echo CJSON::encode(array(
                            'response' => false,
                        ));
                    }   
		}else{
                    echo CJSON::encode(array(
                            'response' => false,
                        ));
                }
	}
        
        public function actionUpdateAndroid($id)
	{
		$model=$this->loadModel($id);

		if(isset($_POST['Compromiso_titulo']) && isset($_POST['Compromiso_cuerpo']) && isset($_POST['Comrpomiso_fecha']))
		{
                    $fecha1=$_POST['Comrpomiso_fecha'];
                    $fecha2=date("Y-m-d",strtotime($fecha1)); 
                    
                    $model->titulo=$_POST['Compromiso_titulo'];
                    $model->cuerpo=$_POST['Compromiso_cuerpo'];
                    $model->fecha=$fecha2;
                    
                    if($model->save()){ 
                        echo CJSON::encode(array(
                            'response' => true,
                        ));
                        Yii::app()->end();
                    }else{
                        echo CJSON::encode(array(
                            'response' => false,
                        )); 
                    }
		}else{
                    echo CJSON::encode(array(
                        'response' => false,
                    ));
                }

	}
        
        
        
        
        
        
}
