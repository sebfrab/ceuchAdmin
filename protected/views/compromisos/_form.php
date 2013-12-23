<?php
/* @var $this CompromisosController */
/* @var $model Compromisos */
/* @var $form CActiveForm */
?>

<div class="col-lg-10 col-md-10 col-md-12 col-xs-12">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'compromisos-form',
	'enableAjaxValidation'=>false,
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
            'afterValidate' => 'js:function(form, data, hasError) {
                if (!hasError){
                    str = $("#compromisos-form").serialize() + "&ajax=compromisos-form";
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
                            $("#compromisos-form").attr("disabled",true);
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
                                $("#compromisos-form").attr("disabled",false);
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
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>120, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'cuerpo'); ?>
		<?php echo $form->textArea($model,'cuerpo',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'cuerpo'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php 
                    $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                        'name'=>'fecha',
                        'attribute'=>'fecha',
                        'model'=>$model,
                        'language' => 'es',
                        'htmlOptions'=>array(
                            'class'=>'form-control',
                            
                        ),
                        'options'=>array(
                            'dateFormat'=>"yy-mm-dd",
                        ),
                    ));
                ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Ingresar' : 'Guardar',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->