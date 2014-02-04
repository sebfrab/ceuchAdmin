<?php
/* @var $this VideosController */
/* @var $model Videos */

$this->menu=array(
	array('label'=>'Nuevo Video', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#videos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Mantenedor de Videos</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'videos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idvideos',
		'nombre',
		'link',
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
