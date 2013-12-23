<?php
/* @var $this CompromisosController */
/* @var $model Compromisos */

$this->menu=array(
	array('label'=>'Nuevo Compromiso', 'url'=>array('create')),
	array('label'=>'Actualizar Compromiso', 'url'=>array('update', 'id'=>$model->idcompromisos)),
	array('label'=>'Eliminar Compromiso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idcompromisos),'confirm'=>'¿Está seguro que desea borrar este elemento?')),
	array('label'=>'Mantenedor Compromisos', 'url'=>array('admin')),
);
?>

<h1>Ver Compromis #<?php echo $model->idcompromisos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'titulo',
		'cuerpo',
		array(
                    'name'=>'fecha',
                    'value'=>Yii::app()->dateFormatter->format("dd-MM-y",strtotime($model->fecha)),
                ),
	),
)); ?>
