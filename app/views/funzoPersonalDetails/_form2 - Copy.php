<?php
/* @var $this FunzoPersonalDetailsController */
/* @var $model FunzoPersonalDetails */
/* @var $form CActiveForm 13490500*/

if (!empty($model->IDNUMBER)) {
		$funzoUniversitydetails = FunzoUniversitydetails::model()->find('APP_IDNOFK=:APP_IDNOFK',array(':APP_IDNOFK'=>$model->IDNUMBER));
	 	$funzoMti = FunzoMti::model()->find('IDNO=:IDNO',array(':IDNO'=>$model->IDNUMBER));
} 

if (empty($funzoUniversitydetails)) {
		$funzoUniversitydetails = new FunzoUniversitydetails;
}
if (empty($funzoUniversitydetails)) {
 	$funzoMti = new FunzoMti;
 	} 
?>

<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<div class="form">
<fieldset>
	<legend>  </legend>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'funzo-personal-details-form2',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<table>
	<tr>
		<td>
			<?php echo $form->labelEx($model,'MIDDLE_NAME'); ?>
		
		
		</td>
		<td>
			<?php echo $form->labelEx($model,'LAST_NAME'); ?>
		
		
		</td>
		<td>
			<?php echo $form->labelEx($model,'FAST_NAME'); ?>
		
		</td>
	</tr>
	<tr>
		<td>
		
		<?php echo $form->textField($model,'MIDDLE_NAME',array('size'=>20,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'MIDDLE_NAME'); ?>
		</td>
		<td>
	
		<?php echo $form->textField($model,'LAST_NAME',array('size'=>20,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'LAST_NAME'); ?>
		</td>
		<td>
		
		<?php echo $form->textField($model,'FAST_NAME',array('size'=>20,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'FAST_NAME'); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $form->labelEx($model,'IDNUMBER'); ?>
		</td>
		<td>
			<?php echo $form->labelEx($funzoUniversitydetails,'UNIVERSITY_CODE'); ?>
		</td>
		<td>
			<?php echo $form->labelEx($funzoUniversitydetails,'REG_NO'); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $form->textField($model,'IDNUMBER',array('size'=>20,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'IDNUMBER'); ?>
		</td>
		<td>
			<?php echo $form->dropDownList($funzoUniversitydetails,'UNIVERSITY_CODE',Counties::showcounties()); ?>
		<?php echo $form->error($funzoUniversitydetails,'UNIVERSITY_CODE'); ?>
			
		
		</td>
		<td>
			<?php echo $form->textField($funzoUniversitydetails,'REG_NO',array('size'=>20,'maxlength'=>50)); ?>
			<?php echo $form->error($funzoUniversitydetails,'REG_NO'); ?>
		
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $form->labelEx($model,'EMAIL'); ?>
		</td>
		<td>
			<?php echo $form->labelEx($model,'TEL_NUMBER'); ?>
		<td>
			<?php echo $form->labelEx($model,'PINNO'); ?>
			
		</td>
	</tr>
	<tr>
		<td>
		<?php echo $form->textField($model,'EMAIL',array('size'=>20,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'EMAIL'); ?>
		</td>
		<td>
		<?php echo $form->textField($model,'TEL_NUMBER',array('size'=>20,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'TEL_NUMBER'); ?>
		</td>
		<td>
		<?php echo $form->textField($model,'PINNO',array('size'=>20,'maxlength'=>48)); ?>
		<?php echo $form->error($model,'PINNO'); ?>
		
		</td>
	</tr>
	<tr>
		<td>
		<?php echo $form->labelEx($model,'COUNTY_IDFK'); ?>
		</td>
		<td>
			<?php echo $form->labelEx($model,'CONSTITUENCY_IDFK'); ?>
		</td>
		<td>
			<?php echo $form->labelEx($model,'LOCATION'); ?>
		</td>
	</tr>
	<tr>
		<td>
	
		<?php echo $form->dropDownList($model,'COUNTY_IDFK',Counties::showcounties()); ?>
	
		<?php echo $form->error($model,'COUNTY_IDFK'); ?>
			
		</td>
		<td>
		
		<?php echo $form->dropDownList($model,'CONSTITUENCY_IDFK',Constituency::showconstituencies()); ?>
	
		<?php echo $form->error($model,'CONSTITUENCY_IDFK'); ?>
		</td>
		<td>
		<?php echo $form->textField($model,'LOCATION',array('size'=>20,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'LOCATION'); ?>
		</td>
	</tr>
		
</table>
	
	 <legend></legend>
	<div class="" id="SaveStud_div">
	
		  <?php
		  
		 
			echo CHtml::ajaxSubmitButton('Save Record',array('funzoPersonalDetails/SaveStud'),
					array (
						'update'=>'#SaveStud_update',
						'type'=>'submit',
						'beforeSend'=>'function(){
						  
						  $("#SaveStud_div").hide();
						  $("#SaveStud_loading").addClass("loading");
						  }',
						 'complete' => 'function(){
						  $("#SaveStud_loading").removeClass("loading");
						  $("#SaveStud_div").show();
							  }',
						  
						),
						 array('class'=>'btnblue','id'=>'SaveStud', 'name'=>'SaveStud')
						);					
			?>
	</div>
	<div  id="SaveStud_update" >&nbsp;</div> 
	<div  id="SaveStud_loading" class="row loadin"> &nbsp;</div>   
	
	

	
	

<?php $this->endWidget(); ?>
</fieldset>
</div><!-- form -->