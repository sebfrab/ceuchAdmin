<?php
/* @var $this CompromisosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Compromisoses',
);

$this->menu=array(
	array('label'=>'Create Compromisos', 'url'=>array('create')),
	array('label'=>'Manage Compromisos', 'url'=>array('admin')),
);
?>

<h1>Compromisoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
