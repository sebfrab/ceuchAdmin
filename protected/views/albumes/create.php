<?php
/* @var $this AlbumesController */
/* @var $model Albumes */

$this->breadcrumbs=array(
	'Albumes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Mantenedor Albumes', 'url'=>array('admin')),
);
?>

<h1>Create Albumes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>