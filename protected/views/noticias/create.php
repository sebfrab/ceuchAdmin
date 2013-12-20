<?php
/* @var $this NoticiasController */
/* @var $model Noticias */

$this->menu=array(
	array('label'=>'List Noticias', 'url'=>array('index')),
	array('label'=>'Manage Noticias', 'url'=>array('admin')),
);
?>
<br/>
<h1>Nueva noticia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>