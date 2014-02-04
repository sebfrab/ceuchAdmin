<?php
/* @var $this VideosController */
/* @var $model Videos */
/* @var $form CActiveForm */
?>

<div class="col-lg-10 col-md-10 col-md-12 col-xs-12">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'videos-form',
	'enableAjaxValidation'=>false,
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
            'afterValidate' => 'js:function(form, data, hasError) {
                if (!hasError){
                    str = $("#videos-form").serialize() + "&ajax=videos-form";
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
                            $("#videos-form").attr("disabled",true);
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
                                $("#videos-form").attr("disabled",false);
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
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>150, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'link'); ?>
		<?php echo $form->textField($model,'link',array('size'=>60,'maxlength'=>350, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'link'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Ingresar' : 'Guardar',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->