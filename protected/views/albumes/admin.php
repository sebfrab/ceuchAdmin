<?php
/* @var $this AlbumesController */
/* @var $model Albumes */

$this->breadcrumbs=array(
	'Albumes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Nuevo Album', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#albumes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Mantenedor Albumes</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'albumes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
        'itemsCssClass' => 'table table-hover',
        'pager' => array(
            'header' => '',
            'hiddenPageCssClass' => 'disabled',
            'maxButtonCount' => 10,
            'cssFile' => false,
            'prevPageLabel' => '<i class="icon-chevron-left"><</i>',
            'nextPageLabel' => '<i class="icon-chevron-right">></i>',
            'firstPageLabel' => 'Primero',
            'lastPageLabel' => 'Último',
        ),
	'columns'=>array(
		'idalbumes',
		'titulo',
		'ano',
                'fecha',
                array(
                    'name'=>'portada',
                    'type'=>'html',
                    'filter'=>'',
                    'value'=>'CHtml::image("../../images/albumes/".$data->idalbumes."/thumbs/".$data->portada, "alt", array("width" => 40, "height" => 30))',
                    ),
		array(
                        'class'=>'CButtonColumn',
                        'htmlOptions'=>array('width'=>'90px'),
                        'template'=>'{view}{update}{delete}',
                        'afterDelete'=>'function(link,success,data){ if(success) $("#statusMsg").html(data); }',
                        'buttons'=>array(
                            'view' => array
                            (
                                'label'=>'ver / imágenes',
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
