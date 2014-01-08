<?php
/* @var $this CampamentoController */
/* @var $model Campamento */
/* @var $form CActiveForm */
?>

<div class="col-lg-10 col-md-10 col-md-12 col-xs-12">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'campamento-form',
	'enableAjaxValidation'=>false,
        'enableClientValidation' => true,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
)); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>150, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'titulo', array('class'=>'help-block')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'cuerpo'); ?>
		<?php echo $form->textArea($model,'cuerpo',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'cuerpo', array('class'=>'help-block')); ?>
	</div>
    
        <div class="form-group">
		<?php echo $form->labelEx($model,'img'); ?>
		<?php echo $form->fileField($model,'img'); ?>
		<?php echo $form->error($model,'img', array('class'=>'help-block')); ?>
	</div>
    
        <?php if(!$model->isNewRecord){ //mostramos la imagen?>
        <div class="form-group">
                <?php //echo CHtml::image(Yii::app()->params['file_tours'].$model->fotoprincipal,"fotoprincipal",array("width"=>200, 'title'=>$model->fotoprincipal)); ?>
                <?php echo CHtml::image('../../../images/campamento/'.$model->img,"Campamento ceuch",array("width"=>150, 'title'=>$model->img)); ?>
        </div>
        <?php } ?>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Ingresar' : 'Guardar',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->