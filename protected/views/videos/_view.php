<?php
/* @var $this VideosController */
/* @var $data Videos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idvideos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idvideos), array('view', 'id'=>$data->idvideos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('link')); ?>:</b>
	<?php echo CHtml::encode($data->link); ?>
	<br />


</div>