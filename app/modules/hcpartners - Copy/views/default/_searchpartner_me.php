<div class="wide form">
<?php 

		$model=new HcPartners;
 ?>
 <?php echo CHtml::beginForm(); ?>
 <div>
 <fieldset>
 <legend><p class="note">search</p></legend>
		Enter Phone No:	<?php echo CHtml::textField('phone'); ?>
		
		Code:	<?php echo CHtml::textField('code'); ?>
				
			<?php
			//echo CHtml::ajaxSubmitButton('Search Record',array('HcPartners/SearchPartner'),
//						array('update'=>'#data',
//								),
//							array('id'=>uniqid()/*, 'live'=>false*/),
//								array(
//										'type'=>'submit'));

echo CHtml::ajaxSubmitButton('Search Record',array('HcPartners/SearchPartner2'),
					array('update'=>'#datap',
					      'type'=>'submit',
						  'beforeSend'=>'function(){$(\'body\').undelegate(\'#submitSr2\', \'click\');}',
						 
						  ),
						   array('id'=>'submitSr2', 'name'=>'submitSr2')
						  );
			?>
</fieldset>			
</div>	
<?php echo CHtml::endForm(); ?>

<div id="datap">
   <?php //$this->renderPartial('_ajaxContent', array('myValue'=>$myValue)); ?>
</div>
 
</div><!-- search-form -->

