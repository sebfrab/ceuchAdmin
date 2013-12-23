<?php
/* @var $this NoticiasController */
/* @var $model Noticias */

$this->menu=array(
	array('label'=>'Nueva Noticias', 'url'=>array('create')),
	array('label'=>'Ver Noticia', 'url'=>array('view', 'id'=>$model->idnoticias)),
	array('label'=>'Mantenedor Noticias', 'url'=>array('admin')),
);
?>
<br/>
<h1>Actualizar Noticia <?php echo $model->idnoticias; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>