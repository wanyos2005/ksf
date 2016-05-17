<div class="wide form">

<?php 
Yii::app()->clientScript->scriptMap['*.js'] = false;
$form=$this->beginWidget('CActiveForm', array(
	'id'=>'mbcicontribution-form',
	'enableAjaxValidation'=>false,
)); 
$model=new PartnersContribution;
$hcPartners = new HcPartners;


//echo $phone;
$data = $hcPartners->findPartnersByPhone_Code($phone,$code);
if($data){
?>
hapa ninfanya
<fieldset>
 <legend><p class="note">Payment</p></legend>
	<p class="note">Fields with <span class="required">*</span> are required.</p>
	<?php echo $form->errorSummary($model); ?>
	<div  style="float:left; width:50%">
		<?php echo $form->labelEx($model,'code :'); ?>
		<?php echo $form->textField($model,'code',array('value'=>$data->code,'size'=>20,'maxlength'=>20,'readonly'=>true)); ?>
		<?php echo $form->error($model,'code'); ?>
	</div>
	<div>
		<?php echo $form->labelEx($model,'Pledge :'); ?>(kshs)
		<?php echo number_format($hcPartners->findHcamountpledgebyCode($data->code)) ?>
	</div>
	<div  style="clear:left">
	</div>
	
	<div  style="float:left; width:50%">
		<?php echo $form->labelEx($model,'name :'); ?>
		<?php echo $form->textField($model,'name',array('value'=>$data->name,'size'=>20,'maxlength'=>20,'readonly'=>true)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	
	<div>
		<?php echo $form->labelEx($model,'Paid :'); ?>(kshs)
		<?php echo number_format($model->findHcamountpaidbyCode($data->code)) ?>
	</div>
	<div  style="clear:left">
	</div>	

	<div  style="float:left; width:50%">
		<?php echo $form->labelEx($model,'phone :'); ?>
		<?php echo $form->textField($model,'phone',array('value'=>$data->phone,'size'=>20,'maxlength'=>20,'readonly'=>true)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>
	
	<div>
		<?php echo $form->labelEx($model,'Balance :'); ?>(kshs)
		<?php echo number_format($hcPartners->findHcamountpledgebyCode($data->code) - $model->findHcamountpaidbyCode($data->code)) ?>
	</div>
	<div  style="clear:left">
	</div>

	<div >
		<?php echo $form->labelEx($model,'amount'); ?>(kshs)
		<?php echo $form->textField($model,'amount',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	


	

	<!--<div class="row">
		<?php echo $form->labelEx($model,'day'); ?>
		<?php echo $form->textField($model,'day'); ?>
		<?php echo $form->error($model,'day'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
		<?php echo $form->error($model,'created'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user'); ?>
		<?php echo $form->textField($model,'user'); ?>
		<?php echo $form->error($model,'user'); ?>
	</div>
-->
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'MAKE PAYMENT' : ' '); ?>
        //hhhhhhhhhhhhh
		<?php
		//echo CHtml::SubmitButton('Make Payment',array('PartnersContribution/Create'));
			//echo CHtml::ajaxSubmitButton('Make Payment',array('PartnersContribution/CreateByAjax'),array('update'=>'#data'),array('type'=>'submit'),
//			//array('id' => 'send-link-'.uniqid()));
//			array('id'=>uniqid(), 'live'=>false));

			echo CHtml::ajaxSubmitButton('Make Payment',array('PartnersContribution/CreateByAjax'),
					array('update'=>'#datap',
					      'type'=>'submit',
						  'beforeSend'=>'function(){$(\'body\').undelegate(\'#submitSk999\', \'click\');}',
						 
						  ),
						   array('id'=>'submitSk999', 'name'=>'submitSk999')
						  );
			?>
	</div>
	</fieldset>
	<? }else{?>
	<fieldset>
 <legend><p class="note"><span class="required">Not found</span></p></legend>

		<p class="note"><span class="required">No record.</span></p>
</fieldset>
	
	<? }?>

<?php $this->endWidget(); ?>

</div><!-- form -->