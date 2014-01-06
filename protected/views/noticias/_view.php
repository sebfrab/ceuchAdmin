<?php
/* @var $this NoticiasController */
/* @var $data Noticias */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idnoticias')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idnoticias), array('view', 'id'=>$data->idnoticias)); ?>
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


</div>