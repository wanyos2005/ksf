
	<?php
if (!isset($label_size)):
        $label_size = 2;
endif;
if (!isset($input_size)):
        $input_size = 8;
endif;
$label_class = "col-md-{$label_size} control-label";
$input_class = "col-md-{$input_size}";

?>
	 <div class="form-group">
                 <div class="col-lg-2">
                        <?php echo CHtml::activeTextField($model, 'code', array('class' => 'form-control', 'maxlength' => 30,'placeholder'=>'Code')); ?>
                        <?php echo CHtml::error($model, 'code') ?>
                </div>
                <div  class="col-xs-3">
                        <?php echo CHtml::activeTextField($model, 'name', array('class' => 'form-control', 'maxlength' => 30,'placeholder'=>'Name')); ?>
                        <?php echo CHtml::error($model, 'name') ?>
                </div>
              
                <div class="col-lg-2">
                        <?php echo CHtml::activeTextField($model, 'contact', array('class' => 'form-control', 'maxlength' => 30,'placeholder'=>'Cell Phone')); ?>
                        <?php echo CHtml::error($model, 'contact') ?>
                </div>
                <div class="clear:both"></div>
              <div  class="col-xs-2">
                        <?php echo CHtml::activeTextField($model, 'oldpledge', array('class' => 'form-control', 'maxlength' => 30,'placeholder'=>'Old Pledge')); ?>
                        <?php echo CHtml::error($model, 'oldpledge') ?>
                </div>
       <div  class="col-xs-2">
                        <?php echo CHtml::activeTextField($model, 'newpledge', array('class' => 'form-control', 'maxlength' => 30,'placeholder'=>'New Pledge')); ?>
                        <?php echo CHtml::error($model, 'newpledge') ?>
                </div>
       <div  class="col-xs-2">
                        <?php echo CHtml::activeTextField($model, 'totalpldege', array('class' => 'form-control', 'maxlength' => 30,'placeholder'=>'Pledge')); ?>
                        <?php echo CHtml::error($model, 'totalpldege') ?>
                </div>
        </div>






       



	

	

<!--  -->


</div><!-- form -->