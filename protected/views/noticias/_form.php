<?php
/* @var $this NoticiasController */
/* @var $model Noticias */
/* @var $form CActiveForm */
?>

<div class="col-lg-10 col-md-10 col-md-12 col-xs-12">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'noticias-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<div class="form-group">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'titulo', array('class'=>'help-block')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'cuerpo'); ?>
		<?php echo $form->textArea($model,'cuerpo',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'cuerpo', array('class'=>'help-block')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'fecha'); ?>
            
                <?php
                    $this->widget("zii.widgets.jui.CJuiDatePicker",array(
                        "attribute"=>"fecha",
                        "model"=>$model,
                        "language"=>"es",
                        "options"=>array(
                            "dateFormat"=>"dd-mm-yy",
                        ),
                        'htmlOptions' => array(
                            'class' => 'form-control',
                        ),
                    ));
                ?>
		<?php echo $form->error($model,'fecha', array('class'=>'help-block')); ?>
	</div>
    
        <div class="form-group">
		<?php echo $form->labelEx($model,'picture'); ?>
		<?php echo $form->fileField($model,'picture',array()); ?>
		<?php echo $form->error($model,'picture', array('class'=>'help-block')); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Ingresar' : 'Guardar',array('class'=>'btn btn-primary')); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->