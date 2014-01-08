<?php
/* @var $this CampamentoController */
/* @var $model Campamento */

$this->menu=array(
	array('label'=>'Nuevo Evento', 'url'=>array('create')),
	array('label'=>'Ver Evento', 'url'=>array('view', 'id'=>$model->idcampamento)),
	array('label'=>'Mantenedor Eventos', 'url'=>array('admin')),
);
?>

<h1>Update Campamento <?php echo $model->idcampamento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>