<?php
/* @var $this NoticiasController */
/* @var $model Noticias */

$this->breadcrumbs=array(
	'Noticiases'=>array('index'),
	$model->idnoticias,
);

$this->menu=array(
	array('label'=>'List Noticias', 'url'=>array('index')),
	array('label'=>'Create Noticias', 'url'=>array('create')),
	array('label'=>'Update Noticias', 'url'=>array('update', 'id'=>$model->idnoticias)),
	array('label'=>'Delete Noticias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idnoticias),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Noticias', 'url'=>array('admin')),
);
?>

<h1>View Noticias #<?php echo $model->idnoticias; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idnoticias',
		'titulo',
		'cuerpo',
		'fecha',
	),
)); ?>
