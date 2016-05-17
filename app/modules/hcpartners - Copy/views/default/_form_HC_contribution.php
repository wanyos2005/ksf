<div class="wide form">

<?php 
Yii::app()->clientScript->scriptMap['*.js'] = false;
$form=$this->beginWidget('CActiveForm', array(
	'id'=>'mbcicontribution-form',
	'enableAjaxValidation'=>false,
)); 
$model=new PartnersContribution;
$hcPartners = new HcPartners;
	unset($hcPartners);
$hcPartners = new HcPartners;
//echo $phone;
$data = $hcPartners->findPartnersByPhone_Code($phone,$code);
if($data){
?>
<fieldset>
 <legend><p class="note"></p></legend>
	<!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->
	<?php echo $form->errorSummary($model); ?>
	<table>
		
		<tr class="tr_my">
			<td width="">Code:<?php echo $form->textField($model,'code',array('value'=>$data->code,'size'=>6,'maxlength'=>20,'readonly'=>true)); ?>
		</td>
			<td>Name: 
					<?php echo $form->textField($model,'name',array('value'=>$data->name,'size'=>15,'maxlength'=>20,'readonly'=>true)); ?>
		
			</td>
			<td>phone:
			<?php echo $form->textField($model,'phone',array('value'=>$data->phone,'size'=>8,'maxlength'=>20,'readonly'=>true)); ?>
	
			</td>
		</tr>
		<tr>
			
			<td>Pledge: <?php echo number_format($hcPartners->findHcamountpledgebyCode($data->code)) ?></td>
		
			<td>Paid:<?php echo number_format($model->findHcamountpaidbyCode($data->code)) ?></td>
			<td>Balance:<?php echo number_format($hcPartners->findHcamountpledgebyCode($data->code) - $model->findHcamountpaidbyCode($data->code)) ?></td>
		</tr>
		<tr class="tr_my">
			<td><?php echo $form->labelEx($model,'amount'); ?>(kshs)
				<?php echo $form->textField($model,'amount',array('size'=>10,'maxlength'=>20)); ?>
				<?php echo $form->error($model,'amount'); ?>
		</td>
		<td>
			 <div class="col-xs-9">
                        <?php echo CHtml::activeTextField($model, 'transactionno', array('class' => 'form-control', 'maxlength' => 30,'placeholder'=>'Transaction No.')); ?>
                        <?php echo CHtml::error($model, 'transactionno') ?>
                </div>
		</td>
		<td>
			<div class="form-group">
                <div>
                <?php //echo CHtml::activeTextArea($model,'abc',array('value'=>"12"));?>
                        <?php echo CHtml::activeTextArea($model, 'notes', array('rows' => 2,'cols' => 17,'class' => 'form-control','placeholder'=>'Important notes')); ?>
                        <?php echo CHtml::error($model, 'notes') ?>
                </div>
</div>
		</td>
		</tr>
		<tr>
			<td> 
				<div class="" id="makepayment_div">
			

			 <?php
		  
		 
			echo CHtml::ajaxSubmitButton('Submit Payment',array('PartnersContribution/CreateByAjax'),
					array (
						'update'=>'#data2',
						'type'=>'submit',
						'beforeSend'=>'function(){$(\'body\').undelegate(\'#makepayment\', \'click\');
						  $("#makepayment_div").hide();
						  $("#loading_div").addClass("loading2");
						  }',
						 'complete' => 'function(){
						  $("#loading_div").removeClass("loading2");
						  $("#makepayment_div").show();
						  $("#searching").show();
						 // $("#funzopersonaldetails_table").hide();
						  
						 //$("#funzopersonaldetails-form")[0].reset();
						  }',
						  
						),
						 array('class'=>'btn-success','id'=>'makepayment', 'name'=>'makepayment')
						);	

						#cancel button				
			?>
<a class="btn-sm btn-danger" href="<?php echo Controller::getReturnUrl($this->createUrl('mycreate')) ?>"><i class="icon-remove bigger-110"></i><?php echo Lang::t('Cancel') ?></a>
      
			 <?php
		  /*
		 
			echo CHtml::ajaxSubmitButton('Cancel',array('default/CancelSearchPartner'),
					array (
						'update'=>'#data3',
						'type'=>'submit',
						'beforeSend'=>'function(){$(\'body\').undelegate(\'#cancelpayment\', \'click\');
						//  $("#data2").hide();
						//   $("#searching").show();
						  $("#loading_div").addClass("loading2");
						  }',
						 'complete' => 'function(){
						  $("#loading_div").removeClass("loading2");
						  $("#searching").show();
						  $("#data2").hide();
						  
						 //$("#funzopersonaldetails-form")[0].reset();
						  }',
						  
						),
						 array('class'=>'btn-danger','id'=>'cancelpayment', 'name'=>'cancelpayment')
						);	*/				
			?>
				</div>
			</td>
		</tr>
	</table>
	
	
	
	


	
	</div>
	</fieldset>
	<? }else{?>
	<fieldset>
 <legend><p class="note"><span class="required"></span></p></legend>

		<p class="note error"><span class="required">No record.</span></p>
</fieldset>
	
	<? }?>

<?php $this->endWidget(); ?>

</div><!-- form -->