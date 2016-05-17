<?php
/* @var $this FunzoPersonalDetailsController */
/* @var $model FunzoPersonalDetails */
/* @var $form CActiveForm */


?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'funzo-personal-details-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	
	<?php //echo $form->errorSummary($model); 

	if (isset($_REQUEST['idno']) && !empty($_REQUEST['idno'])) {
		 	$idno = $_REQUEST['idno'];
		 	$model->IDNUMBER=$idno;
		 	}else{
		 		$idno='';
		 	}
?>


	<table>
		<tr>
			<td>
		<?php echo $form->labelEx($model,'IDNUMBER'); ?>
		<?php  echo $form->textField($model,'IDNUMBER');
		//echo $form->textField($model,'IDNUMBER',array('size'=>50,'maxlength'=>50,'readonly'=>false)); ?>
		<?php echo $form->error($model,'IDNUMBER'); ?>
	
	 </td>
	 <td>
	 
	<div class="" id="SearchStud_div">
	
		  <?php
		  
		 
			echo CHtml::ajaxSubmitButton('Search Record',array('funzoPersonalDetails/SearchStud'),
					array (
						'update'=>'#SearchStud_update',
						'type'=>'submit',
						'beforeSend'=>'function(){
						  
						  $("#SearchStud_div").hide();
						  $("#SearchStud_loading").addClass("loading");
						  }',
						 'complete' => 'function(){
						  $("#SearchStud_loading").removeClass("loading");
						  $("#SearchStud_div").show();
							  }',
						  
						),
						 array('class'=>'btnblue')
						);					
			?>
	</div>
		
	 </td>
	
		</tr>
	

	</table>
<div  id="SearchStud_update" >&nbsp;</div> 
	<div  id="SearchStud_loading" class="row loadin"> &nbsp;</div>   
	
	<fieldset>
	<legend>  </legend>

	
</fieldset>
<?php $this->endWidget(); ?>

</div><!-- form -->