<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="container" style="margin-top: 90px;">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">  
            
            <?php 
            $this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'nav nav-pills nav-stacked',
                                                'id'=>'menuSecundario'),
		));
            
            
            ?>
  
        </div>
        
        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12" style="box-shadow: 1px 2px 5px 2px #888888; padding-bottom: 10px;">
            <?php echo $content; ?>
        </div>

    </div>
</div>

<?php $this->endContent(); ?>