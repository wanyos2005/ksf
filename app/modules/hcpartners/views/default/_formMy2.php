<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hc-partners-form',
	'enableAjaxValidation'=>false,
)); 
		$model=new HcPartners;

?>


	<?php echo $form->errorSummary($model); ?>
<fieldset>
<legend><p class="note"></p></legend>
		
<div id="save">
  
</div>
<table>
	<tr class="tr_my">
		<td><?php echo $form->labelEx($model,'code'); ?> </td>
		<td>
 		:<?php echo $form->textField($model,'code',array('value'=>$model->findHCnextcode(),'size'=>6,'maxlength'=>20,'readonly'=>true)); ?>
		<?php echo $form->error($model,'code'); ?>
		</td>
		<td> <?php echo $form->labelEx($model,'name'); ?></td>
		<td>
			
		:<?php echo $form->textField($model,'name',array('size'=>15,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'name'); ?>
		</td>
		
	</tr>
	<tr>
		<td><?php echo $form->labelEx($model,'phone'); ?> </td>
		<td>
			:<?php echo $form->textField($model,'phone',array('size'=>15,'maxlength'=>30)); ?>
			<?php echo $form->error($model,'phone'); ?>
		</td>
		<td>	<?php echo $form->labelEx($model,'church'); ?> </td>
		<td>
		:<?php echo $form->textField($model,'church',array('size'=>15,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'church'); ?>
		</td>
	</tr>
	<tr class="tr_my">
		<td><?php echo $form->labelEx($model,'county'); ?> </td>
		<td>
			:<?php echo $form->textField($model,'county',array('size'=>15,'maxlength'=>20)); ?>
			<?php echo $form->error($model,'county'); ?>
		</td>
		<td><?php echo $form->labelEx($model,'email'); ?> </td>
		<td>
			:<?php echo $form->textField($model,'email',array('size'=>15,'maxlength'=>20)); ?>
			<?php echo $form->error($model,'email'); ?>
		
		</td>
	</tr>
	<tr >
		<td> <?php echo $form->labelEx($model,'amountpledged'); ?></td>
		<td>
			:<?php echo $form->textField($model,'amountpledged',array('size'=>15,'maxlength'=>30)); ?>
			<?php echo $form->error($model,'amountpledged'); ?>
		</td>
		<td colspan="2"> 
				<div class="" id="makepayment_div">
			 <?php
		  		echo CHtml::ajaxSubmitButton('Submit',array('default/CreateByAjax'),
					array (
						'update'=>'#save',
						'type'=>'submit',
						'beforeSend'=>'function(){
						  $("#makepayment_div").hide();
						  $("#loading_div").addClass("loading2");
						  }',
						 'complete' => 'function(){
						  $("#loading_div").removeClass("loading2");
						  $("#makepayment_div").show();
						 // $("#funzopersonaldetails_table").hide();
						  
						 $("#hc-partners-form")[0].reset();
						  }',
						  
						),
						 array('class'=>'btn-success','id'=>'newpartner', 'name'=>'newpartner')
						);					
			?>
				</div>

		</td>
	</tr>
	
</table>
	


	<div >
		

</fieldset>
<?php $this->endWidget(); ?>

</div><!-- form -->