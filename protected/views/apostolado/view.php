<?php
/* @var $this ApostoladoController */
/* @var $model Apostolado */

$this->breadcrumbs=array(
	'Apostolados'=>array('index'),
	$model->idapostolado,
);

$this->menu=array(
	array('label'=>'Nuevo Apostolado', 'url'=>array('create')),
	array('label'=>'Actualizar Apostolado', 'url'=>array('update', 'id'=>$model->idapostolado)),
	array('label'=>'Eliminar Apostolado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idapostolado),'confirm'=>'¿Está seguro que desea borrar este elemento?')),
	array('label'=>'Mantenedor Apostolado', 'url'=>array('admin')),
);
?>

<h1>View Apostolado #<?php echo $model->idapostolado; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ano',
		'mes',
		'titulo',
		'texto',
	),
)); ?>
