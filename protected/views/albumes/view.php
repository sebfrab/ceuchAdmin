<?php
/* @var $this AlbumesController */
/* @var $model Albumes */

$this->menu=array(
	array('label'=>'Nuevo Album', 'url'=>array('create')),
	array('label'=>'Actualizar Album', 'url'=>array('update', 'id'=>$model->idalbumes)),
	array('label'=>'Eliminar Album', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idalbumes),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Mantenedor Albumes', 'url'=>array('admin')),
);
?>

<h1>Viendo Album '<?php echo $model->titulo; ?>'</h1>


<?php
    $this->widget('ext.coco.CocoWidget'
        ,array(
            'id'=>'cocowidget1',
            'onCompleted'=>'function(id,filename,jsoninfo){
                        var img = "<div class=\"col-lg-3 col-md-3 col-sm-4 col-xs-6 context-menu-one box\">";
                        img += "<img id=\"'.$model->idalbumes.'\" alt="+filename+" class=\"thumbnail\" src=\"../../images/albumes/'.$model->idalbumes.'/thumbs/"+filename+"\" >";
                        img += "</div>";
                        $("#galeryNew").append(img);
             }',
            'onCancelled'=>'function(id,filename){ alert("cancelled"); }',
            'onMessage'=>'function(m){ alert(m); }',
            'allowedExtensions'=>array('jpeg','jpg','png'),
            'sizeLimit'=>9000000,
            'uploadDir' => '../images/albumes/'.$model->idalbumes.'/',
            // para recibir el archivo subido:
            'receptorClassName'=>'application.models.MyModel',
            'methodName'=>'onFileUploaded',
            'buttonText'=>'Busca y sube !!!',
            'dropFilesText'=>'Arrastra y suelta !',
            'userdata'=>$model->primaryKey,
        ));
   ?>


<div id="galeryNew" style="margin-top: 50px;">
</div>
<?php 
    $this->widget('ext.SFListGallery',array(
        'model' => $model
    ));        
?>
