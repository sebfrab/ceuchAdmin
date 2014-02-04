<?php
/* @var $this VideosController */
/* @var $model Videos */

$this->breadcrumbs=array(
	'Videoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Mantenedor de Videos', 'url'=>array('admin')),
);
?>

<h1>Nuevo Video</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'url'=>$url)); ?>