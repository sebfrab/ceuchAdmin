<?php
/* @var $this CompromisosController */
/* @var $model Compromisos */


$this->menu=array(
	array('label'=>'Nuevo Compromiso', 'url'=>array('create')),
	array('label'=>'Ver Compromiso', 'url'=>array('view', 'id'=>$model->idcompromisos)),
	array('label'=>'Mantenedor Compromisos', 'url'=>array('admin')),
);
?>

<h1>Actualizar Compromiso <?php echo $model->idcompromisos; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'url'=>$url)); ?>