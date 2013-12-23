<?php
/* @var $this CompromisosController */
/* @var $model Compromisos */

$this->menu=array(
	array('label'=>'Mantenedor Compromisos', 'url'=>array('admin')),
);
?>

<h1>Nuevo Compromiso</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'url'=>$url)); ?>