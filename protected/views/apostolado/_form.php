<?php
/* @var $this ApostoladoController */
/* @var $model Apostolado */
/* @var $form CActiveForm */
?>

<div class="col-lg-10 col-md-10 col-md-12 col-xs-12">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'apostolado-form',
	'enableAjaxValidation'=>false,
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
            'afterValidate' => 'js:function(form, data, hasError) {
                if (!hasError){
                    str = $("#apostolado-form").serialize() + "&ajax=apostolado-form";
                    $.blockUI({ css: { 
                        border: "none", 
                        padding: "15px", 
                        backgroundColor: "#000", 
                            "-webkit-border-radius": "10px", 
                            "-moz-border-radius": "10px", 
                        opacity: .5, 
                        color: "#fff", 
                    }}); 
                    $.ajax({
                        type: "POST",
                        url: "' . Yii::app()->createUrl($url) . '",
                        data: str,
                        dataType: "json",
                        beforeSend : function() {
                            $("#apostolado-form").attr("disabled",true);
                        },
                        success: function(data, status) {
                            if(data.insert)
                            {
                                $.unblockUI();
                                window.location = data.redirectUrl;
                            }
                            else
                            {
                                $.each(data, function(key, value) {
                                    var div = "#"+key+"_em_";
                                    $(div).text(value);
                                    $(div).show();
                                });
                                $("#apostolado-form").attr("disabled",false);
                                $.unblockUI();
                            }
                        },
                    });
                    return false;
                }
            }',
        ),
)); ?>


	<div class="form-group">
		<?php echo $form->labelEx($model,'ano'); ?>
		<?php echo $form->textField($model,'ano',array('size'=>10,'maxlength'=>10, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'ano'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'mes'); ?>
                <?php echo $form->dropDownList($model, 'mes', Apostolado::getMeses(), array('empty'=>'Seleccione mes', 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'mes'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>50,'maxlength'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'texto'); ?>
		<?php echo $form->textArea($model,'texto',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'texto'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'tipo'); ?>
                <?php echo $form->dropDownList($model, 'tipo', Apostolado::getTipos(), array('empty'=>'Seleccione tipo', 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Ingresar' : 'Guardar',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->