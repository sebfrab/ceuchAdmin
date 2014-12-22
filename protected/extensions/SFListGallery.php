<?php

class SFListGallery extends CWidget{
    
    public $model;
    
    public function init(){
        parent::init();
        //$this->formulario($this->model);
        $this->gallery($this->model);
    }
    
    public function formulario($model){
        $form = $this->beginWidget(
            'CActiveForm',
            array(
                'id' => 'upload-form',
                'enableAjaxValidation' => false,
                'htmlOptions' => array('enctype' => 'multipart/form-data'),
            )
        );
        echo $form->fileField($model, 'image');
        echo $form->error($model, 'image');
        
        echo CHtml::submitButton('Submit');
        $this->endWidget();
    }
    
    public function gallery($model){
        $dir="../images/albumes/".$model->idalbumes."/thumbs";
        $directorio=opendir($dir); 
            while ($archivo = readdir($directorio)){
                if (!is_dir($archivo) && $archivo!="Thumbs.db"){
                    echo "<div class=\"col-lg-3 col-md-3 col-sm-4 col-xs-6 context-menu-one box\">";
                        echo "<img id=\"$model->idalbumes\" alt=\"$archivo\" class=\"lazy thumbnail\" data-original=\"../$dir/$archivo\" >";
                    echo "</div>";
                }
            }
    }
}
?>
