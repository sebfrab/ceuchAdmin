<?php
/* @var $this ApostoladoController */
/* @var $model Apostolado */

$this->breadcrumbs=array(
	'Apostolados'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Nuevo Apostolado', 'url'=>array('create')),
);

?>

<h1>Mantenedor Apostolados</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'apostolado-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ano',
		array(
                'name'=>'mes',
                'header'=>'mes',
                'value'=>'Apostolado::getMeses($data->mes)'
                ),
		'titulo',
		array(
                'name'=>'tipo',
                'header'=>'tipo',
                'value'=>'Apostolado::getTipos($data->tipo)'
                ),
		array(
                        'class'=>'CButtonColumn',
                        'htmlOptions'=>array('width'=>'90px'),
                        'template'=>'{view}{update}{delete}',
                        'afterDelete'=>'function(link,success,data){ if(success) $("#statusMsg").html(data); }',
                        'buttons'=>array(
                            'view' => array
                            (
                                'label'=>'ver',
                                'imageUrl'=>Yii::app()->request->baseUrl.'/images/iconos/ver.png',
                            ),
                            'update' => array
                            (
                                'label'=>'actualizar',
                                'imageUrl'=>Yii::app()->request->baseUrl.'/images/iconos/actualizar.png',
                            ),
                            'delete' => array
                            (
                                'label'=>'eliminar',
                                'imageUrl'=>Yii::app()->request->baseUrl.'/images/iconos/eliminar.png',
                            ),
                        ),
                ),
	),
)); ?>
