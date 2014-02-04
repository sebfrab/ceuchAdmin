<?php

class VideosController extends Controller
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
				'actions'=>array('create','update','admin','delete','index','view'),
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
		$model=new Videos;

		$this->performAjaxValidationSubmit($model);

		if(isset($_POST['Videos']))
		{
                    
			$model->attributes=$_POST['Videos'];
                        if(isset($_POST['ajax']) && $_POST['ajax']==='videos-form')
                        {
                            if($model->save()){
                                echo CJSON::encode(array(
                                    'insert' => true,
                                    'redirectUrl' => Yii::app()->user->returnUrl=array($model->idvideos)
                                ));
                                Yii::app()->end();
                            } 
                        }else{
                            if($model->save())
                                $this->redirect(array('view','id'=>$model->idvideos));
                        }  
                        
		}

		$this->render('create',array(
			'model'=>$model,
                        'url'=>'videos/create'
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

		if(isset($_POST['Videos']))
		{
			$model->attributes=$_POST['Videos'];
			if(isset($_POST['ajax']) && $_POST['ajax']==='videos-form')
                        {  
                            if($model->save()){ 
                                echo CJSON::encode(array(
                                    'insert' => true,
                                    'redirectUrl' => Yii::app()->createUrl('videos/'.$model->idvideos)
                                ));
                                Yii::app()->end();
                            } 
                        }else{
                            if($model->save()){
                                $this->redirect(array('view','id'=>$model->idvideos));
                            }
                        }  
		}

		$this->render('update',array(
			'model'=>$model,
                        'url'=>'videos/update/'.$id
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
		$dataProvider=new CActiveDataProvider('Videos');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Videos('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Videos']))
			$model->attributes=$_GET['Videos'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Videos the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Videos::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Videos $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='videos-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        protected function performAjaxValidationSubmit($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='videos-form')
		{
			$errors = CActiveForm::validate($model);
                        if ($errors != '[]')
                        {
                            echo $errors;
                            Yii::app()->end();
                        }
		}
	}
}
