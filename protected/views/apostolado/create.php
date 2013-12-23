<?php
/* @var $this ApostoladoController */
/* @var $model Apostolado */

$this->breadcrumbs=array(
	'Apostolados'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Mantenedor Apostolado', 'url'=>array('admin')),
);
?>

<h1>Nuevo Apostolado</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'url'=>$url)); ?>