<?php
/* @var $this NoticiasController */
/* @var $model Noticias */

$this->menu=array(
	array('label'=>'Nueva Noticia', 'url'=>array('create')),
	array('label'=>'Actualizar Noticia', 'url'=>array('update', 'id'=>$model->idnoticias)),
	array('label'=>'Eliminar Noticia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idnoticias),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Mantenedor Noticias', 'url'=>array('admin')),
);
?>

<h1>View Noticias #<?php echo $model->idnoticias; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'titulo',
		'cuerpo',
		array(
                    'name'=>'fecha',
                    'value'=>Yii::app()->dateFormatter->format("dd-MM-y",strtotime($model->fecha)),
                ),
                array(
                    'label'=>'Imagen',
                    'type'=>'raw',
                    'value'=> CHtml::image('../../images/news/'.$model->img,"News ceuch",array("width"=>150, 'title'=>$model->img)),
                   ),
	),
)); ?>
