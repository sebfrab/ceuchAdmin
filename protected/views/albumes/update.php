<?php
/* @var $this AlbumesController */
/* @var $model Albumes */

$this->breadcrumbs=array(
	'Albumes'=>array('index'),
	$model->idalbumes=>array('view','id'=>$model->idalbumes),
	'Update',
);

$this->menu=array(
	array('label'=>'Nuevo Album', 'url'=>array('create')),
	array('label'=>'Ver Album', 'url'=>array('view', 'id'=>$model->idalbumes)),
	array('label'=>'Mantenedor Albumes', 'url'=>array('admin')),
);
?>

<h1>Update Albumes <?php echo $model->idalbumes; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>