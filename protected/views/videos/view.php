<?php
/* @var $this VideosController */
/* @var $model Videos */

$this->breadcrumbs=array(
	'Videoses'=>array('index'),
	$model->idvideos,
);

$this->menu=array(
	array('label'=>'Nuevo Video', 'url'=>array('create')),
	array('label'=>'Actualizar Video', 'url'=>array('update', 'id'=>$model->idvideos)),
	array('label'=>'Eliminar Video', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idvideos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Mantenendor de  Videos', 'url'=>array('admin')),
);
?>

<h1>View Videos #<?php echo $model->idvideos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idvideos',
		'nombre',
		'link',
	),
)); ?>
