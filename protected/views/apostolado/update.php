<?php
/* @var $this ApostoladoController */
/* @var $model Apostolado */

$this->breadcrumbs=array(
	'Apostolados'=>array('index'),
	$model->idapostolado=>array('view','id'=>$model->idapostolado),
	'Update',
);

$this->menu=array(
	array('label'=>'Nuevo Apostolado', 'url'=>array('create')),
	array('label'=>'Ver Apostolado', 'url'=>array('view', 'id'=>$model->idapostolado)),
	array('label'=>'Mantenedor Apostolado', 'url'=>array('admin')),
);
?>

<h1>Actualizar Apostolado <?php echo $model->idapostolado; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'url'=>$url)); ?>