<?php
/* @var $this AlbumesController */
/* @var $model Albumes */

$this->breadcrumbs=array(
	'Albumes'=>array('index'),
	$model->idalbumes,
);

$this->menu=array(
	array('label'=>'List Albumes', 'url'=>array('index')),
	array('label'=>'Create Albumes', 'url'=>array('create')),
	array('label'=>'Update Albumes', 'url'=>array('update', 'id'=>$model->idalbumes)),
	array('label'=>'Delete Albumes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idalbumes),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Albumes', 'url'=>array('admin')),
);
?>

<h1>View Albumes #<?php echo $model->idalbumes; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idalbumes',
		'titulo',
		'ano',
		'portada',
		'fecha',
	),
)); ?>

<?php
    $this->widget('ext.coco.CocoWidget'
        ,array(
            'id'=>'cocowidget1',
            'onCompleted'=>'function(id,filename,jsoninfo){
                        var img = "<div class=\"col-lg-3 col-md-3 col-sm-4 col-xs-6 context-menu-one box\">";
                        img += "<img id=\"'.$model->idalbumes.'\" alt="+filename+" class=\"thumbnail\" src=\"../../images/albumes/'.$model->idalbumes.'/thumbs/"+filename+"\" >";
                        img += "</div>";
                        $("#galeryNew").append(img);
             }',
            'onCancelled'=>'function(id,filename){ alert("cancelled"); }',
            'onMessage'=>'function(m){ alert(m); }',
            'allowedExtensions'=>array('jpeg','jpg','png'),
            'sizeLimit'=>2000000,
            'uploadDir' => '../images/albumes/'.$model->idalbumes.'/',
            // para recibir el archivo subido:
            'receptorClassName'=>'application.models.MyModel',
            'methodName'=>'onFileUploaded',
            'userdata'=>$model->primaryKey,
        ));
   ?>


<div id="galeryNew">

</div>
<?php 
    $this->widget('ext.SFListGallery',array(
        'model' => $model
    ));        
?>
