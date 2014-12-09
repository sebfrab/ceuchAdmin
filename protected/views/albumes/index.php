<?php
/* @var $this AlbumesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Albumes',
);

$this->menu=array(
	array('label'=>'Create Albumes', 'url'=>array('create')),
	array('label'=>'Manage Albumes', 'url'=>array('admin')),
);
?>

<h1>Albumes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
