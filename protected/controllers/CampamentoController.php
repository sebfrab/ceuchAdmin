<?php

class CampamentoController extends Controller
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
		$model=new Campamento;
                
		if(isset($_POST['Campamento']))
		{
                    $model->attributes=$_POST['Campamento'];
                    $fecha = new DateTime(null, new DateTimeZone('Chile/Continental'));
                    $model->fecha = $fecha->format('Y-m-d H:i:s');
                    
                    ////////////////////////////////////////////////////////////////////
                    $path_picture = "../images/campamento/";//ruta final de la imagen
                    $rnd = rand(0,9999);  // generate random number between 0-9999
                    $rnd = "ceuchCampamento".$rnd;
                    $uploadedFile=CUploadedFile::getInstance($model,'img');
                    $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name or puedes usar: $fileName=$uploadedFile->getName();

                    if(!empty($uploadedFile))  // check if uploaded file is set or not
                    {
                        //$uploadedFile->saveAs(Yii::app()->basePath.'/../banner/'.$fileName);  // image will uplode to rootDirectory/banner/
                        $uploadedFile->saveAs($path_picture.$fileName);
                        $model->img= $fileName;
                        
                        
                        $path=$path_picture.$fileName;
                        $imagen = getimagesize($path);
                        $ancho = $imagen[0];
                        $alto = $imagen[1]; 
                        if($ancho > 1290){
                            $img2 = Yii::app()->simpleImage->load($path);
                            $img2->resizeToWidth(1290);
                            $img2->save($path);
                        }
                    }
                    ////////////////////////////////////////////////////////////////////
                    
			
			if($model->save())
				$this->redirect(array('view','id'=>$model->idcampamento));
		}

		$this->render('create',array(
			'model'=>$model,
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

		if(isset($_POST['Campamento']))
		{
			$model->attributes=$_POST['Campamento'];
                        
                        ////////////////////////////////////////////////////////////////////
                        $path_picture = "../images/campamento/";//ruta final de la imagen
                        $rnd = rand(0,9999);  // generate random number between 0-9999
                        $rnd = "ceuchCampamento".$rnd;
                        $uploadedFile=CUploadedFile::getInstance($model,'img');
                        $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name or puedes usar: $fileName=$uploadedFile->getName();


                        if(!empty($uploadedFile))  // check if uploaded file is set or not
                        {
                            $uploadedFile->saveAs($path_picture.$fileName);// image will uplode to rootDirectory/banner/
                            $model->img = $fileName;
                            
                            $path=$path_picture.$fileName;
                            $imagen = getimagesize($path);
                            $ancho = $imagen[0];
                            $alto = $imagen[1]; 
                            if($ancho > 1290){
                                $img2 = Yii::app()->simpleImage->load($path);
                                $img2->resizeToWidth(1290);
                                $img2->save($path);
                            }
                        }
                        ////////////////////////////////////////////////////////////////////
                        
			if($model->save())
				$this->redirect(array('view','id'=>$model->idcampamento));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
                $model = $this->loadModel($id);
                if(file_exists("../images/campamento/$model->img") && $model->img != ''){
                   unlink("../images/campamento/$model->img"); 
                }
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
		$dataProvider=new CActiveDataProvider('Campamento');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Campamento('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Campamento']))
			$model->attributes=$_GET['Campamento'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Campamento the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Campamento::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Campamento $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='campamento-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
