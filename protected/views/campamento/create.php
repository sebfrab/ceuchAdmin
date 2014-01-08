<?php
/* @var $this CampamentoController */
/* @var $model Campamento */

$this->menu=array(
	array('label'=>'Mantenedor Eventos', 'url'=>array('admin')),
);
?>

<h1>Nuevo Evento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>