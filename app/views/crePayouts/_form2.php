<?php
/* @var $this CrePayoutsController */
/* @var $model CrePayouts */
/* @var $form CActiveForm */

if (isset($_REQUEST['uni']) && !empty($_REQUEST['uni'])) {
		 	$uni = $_REQUEST['uni'];

		 	$model->UNCODE=$uni ;
		 }

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cre-payouts-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->
<table>
<tr>
		<td>
			<?php echo $form->labelEx($model,'UNCODE'); ?>
		</td>
		<td>
		<?php echo $form->textField($model,'UNCODE',array('size'=>10,'maxlength'=>10,'readonly'=>true)); ?>
		
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $form->labelEx($model,'ACADEMIC_YEAR'); ?>
		</td>
		<td>
		<?    echo $form->dropDownList($model,'ACADEMIC_YEAR',array('2009/2010'=>'2009/2010','2010/2011'=>'2010/2011','2011/2012'=>'2011/2012','2012/2013'=>'2012/2013','2013/2014'=>'2013/2014'), array('empty' => 'Select','onchange'=>'return muFunpaymentive(this.value)'));?>
	
		</td>
	</tr>
	<!---
	<tr>
		<td>
			<?php echo $form->labelEx($model,'PAYMENT_SUBSET'); ?>
		</td>
		<td>
		<?    echo $form->dropDownList($model,'REF',array('2012/2013'=>'YES','NO'=>'NO'), array('empty' => 'Select','onchange'=>'return muFunpaymentive(this.value)'));?>
		
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $form->labelEx($model,'REF'); ?>
		</td>
		<td>
		<?    echo $form->dropDownList($model,'REF',array('2012/2013'=>'YES','NO'=>'NO'), array('empty' => 'Select','onchange'=>'return muFunpaymentive(this.value)'));?>
	
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $form->labelEx($model,'PAYMENT_SUBSET'); ?>
		</td>
		<td>
			<?php //echo $form->textField($model,'PAYMENT_SUBSET',array('size'=>20,'maxlength'=>20)); ?>
		
		</td>
	</tr>-->
</table>
	


	
	<div class="" id="paymentDet_div">
	
		  <?php
		  
		 
			echo CHtml::ajaxSubmitButton('Search',array('crePayouts/paymentSchedule'),
					array (
						'update'=>'#paymentDet_update',
						'type'=>'submit',
						'beforeSend'=>'function(){

						  $("#paymentDet_div").hide();
						  $("#paymentDet_loading").addClass("loading");
						  }',
						 'complete' => 'function(){
						  $("#paymentDet_loading").removeClass("loading");
						  $("#paymentDet_div").show();
						  }',
						  
						),
						 array('class'=>'btnblue','id'=>'btnpaymentDet', 'name'=>'btnpaymentDet')
						);					
			?>
	</div>
	<div  id="paymentDet_update" >&nbsp;</div> 
	<div  id="paymentDet_loading"> &nbsp;</div>   
	


<?php $this->endWidget(); ?>

</div><!-- form -->