<?php
/* @var $this ApostoladoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Apostolados',
);

$this->menu=array(
	array('label'=>'Create Apostolado', 'url'=>array('create')),
	array('label'=>'Manage Apostolado', 'url'=>array('admin')),
);
?>

<h1>Apostolados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
