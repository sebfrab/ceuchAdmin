<?php
/* @var $this NoticiasController */
/* @var $model Noticias */

$this->breadcrumbs=array(
	'Noticiases'=>array('index'),
	$model->idnoticias=>array('view','id'=>$model->idnoticias),
	'Update',
);

$this->menu=array(
	array('label'=>'List Noticias', 'url'=>array('index')),
	array('label'=>'Create Noticias', 'url'=>array('create')),
	array('label'=>'View Noticias', 'url'=>array('view', 'id'=>$model->idnoticias)),
	array('label'=>'Manage Noticias', 'url'=>array('admin')),
);
?>

<h1>Update Noticias <?php echo $model->idnoticias; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>