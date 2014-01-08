<?php
/* @var $this CampamentoController */
/* @var $model Campamento */

$this->breadcrumbs=array(
	'Campamentos'=>array('index'),
	$model->idcampamento,
);

$this->menu=array(
	array('label'=>'Nuevo evento', 'url'=>array('create')),
	array('label'=>'Actualizar Evento', 'url'=>array('update', 'id'=>$model->idcampamento)),
	array('label'=>'Eliminar Evento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idcampamento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Mantenedor Eventos', 'url'=>array('admin')),
);
?>

<h1>View Campamento #<?php echo $model->idcampamento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idcampamento',
		'titulo',
		'cuerpo',
		array(
                    'name'=>'fecha',
                    'value'=>Yii::app()->dateFormatter->format("dd-MM-y HH:mm:ss",strtotime($model->fecha)),
                ),
		array(
                    'label'=>'Imagen',
                    'type'=>'raw',
                    'value'=> CHtml::image('../../images/campamento/'.$model->img,"Campamento ceuch",array("width"=>150, 'title'=>$model->img)),
                ),
	),
)); ?>
