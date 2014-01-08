<?php
/* @var $this CampamentoController */
/* @var $data Campamento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcampamento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcampamento), array('view', 'id'=>$data->idcampamento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cuerpo')); ?>:</b>
	<?php echo CHtml::encode($data->cuerpo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('img')); ?>:</b>
	<?php echo CHtml::encode($data->img); ?>
	<br />


</div>