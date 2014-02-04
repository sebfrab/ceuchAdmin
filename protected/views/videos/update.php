<?php
/* @var $this VideosController */
/* @var $model Videos */

$this->breadcrumbs=array(
	'Videoses'=>array('index'),
	$model->idvideos=>array('view','id'=>$model->idvideos),
	'Update',
);

$this->menu=array(
	array('label'=>'Nuevo Video', 'url'=>array('create')),
	array('label'=>'Ver Video', 'url'=>array('view', 'id'=>$model->idvideos)),
	array('label'=>'Mantenedor de  Videos', 'url'=>array('admin')),
);
?>

<h1>Actualizar Video <?php echo $model->idvideos; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'url'=>$url)); ?>