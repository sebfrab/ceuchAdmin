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
    $this->widget('ext.SFListGallery',array(
        'model' => $model
    ));        
?>