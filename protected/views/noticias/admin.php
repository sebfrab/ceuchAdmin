<?php
/* @var $this NoticiasController */
/* @var $model Noticias */


$this->menu=array(
	array('label'=>'Nueva noticia', 'url'=>array('create')),
);

?>

<h1>Mantenedor de noticias</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'noticias-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'titulo',
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
