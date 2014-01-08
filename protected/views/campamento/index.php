<?php
/* @var $this CampamentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Campamentos',
);

$this->menu=array(
	array('label'=>'Create Campamento', 'url'=>array('create')),
	array('label'=>'Manage Campamento', 'url'=>array('admin')),
);
?>

<h1>Campamentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
