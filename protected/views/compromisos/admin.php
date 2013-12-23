<?php
/* @var $this CompromisosController */
/* @var $model Compromisos */

$this->breadcrumbs=array(
	'Compromisoses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Nuevo Compromiso', 'url'=>array('create')),
);

?>

<h1>Mantenedor de Compromisos</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'compromisos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'titulo',
		'cuerpo',
		array(
                    'name'=>'fecha',
                    'value'=>'Yii::app()->dateFormatter->format("dd-MM-y",strtotime($data->fecha))',
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
