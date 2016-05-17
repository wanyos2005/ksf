<? $months = new Months; ?>
<? $days= array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10', '11' => '11','12'=>'12', '13' => '13','14' => '14', '15' => '15', '16' => '16', '17' => '17', '18' => '18', '19' => '19', '20' => '20', '21' => '21', '22' => '22', '23' => '23', '24' => '24', '25' => '25', '26' => '26', '27' => '27', '28' => '28', '29' => '29', '30' => '30', '31' => '31');?>
<? $years=array("2012" => "2012", "2013" => "2013", "2014" => "2014","2015" => "2015");?>		
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'post',
));

//echo CHtml::dropDownList('city_id',$model->city_id, CHtml::listData(City::model()->findAll(),'id','name'));
 ?>


<fieldset>
	<legend> Report</legend>
	<table>
		<tr>
			<td>
				<?php echo $form->label($model,'code'); ?></td><td>
				<?php echo $form->textField($model,'code',array('size'=>20,'maxlength'=>12)); ?>
	
			</td>
			<td>
				<?php echo $form->label($model,'phone'); ?></td><td>
				<?php echo $form->textField($model,'phone',array('size'=>20,'maxlength'=>15)); ?>

			</td>
			<td>
				<?php echo $form->label($model,'amount'); ?></td><td>
				<?php echo $form->textField($model,'amount'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->label($model,'year'); ?></td><td>
				<?php echo $form->dropDownList($model,'year',$years,array('empty' => '')); ?><?php echo $form->error($model,'month'); ?>
		</td>
			<td>
				<?php echo $form->label($model,'month'); ?></td><td>
				<?php echo $form->dropDownList($model,'month',$months->show_months(),array('empty' => ' ')); ?><?php echo $form->error($model,'month'); ?>
	
			</td>
			<td>
					<?php echo $form->label($model,'day'); ?></td><td>
					<?php echo $form->dropDownList($model,'day',$days,array('empty' => ' ')); ?><?php echo $form->error($model,'month'); ?>
	
					</td>
		</tr>
	</table>


 
<div  class="">
<center>
<?php echo CHtml::submitButton('SUMMERY REPORT',array('name' => 'summery','class'=>'btn btn-info')); ?>

<?php echo CHtml::submitButton('VIEW REPORT',array('name' => 'general','class'=>'btn btn-success')); ?>

<?php //echo CHtml::submitButton('PRINT REPORT', array('name' => 'pdf','class'=>'btn btn-primary')); ?> 
</center>
</div>
	</fieldset>
</div>
<?php $this->endWidget(); ?>

<!-- search-form -->
<?
//0718762063

 //$dataProvider=$model->searchgrades();
 //echo $subject;
 if(!empty($q)){
 $records = $dataProvider->getData();
 
 $this->renderPartial('hcreport',array(
 'records'=>$records,'model'=>$model
 /*,'name'=>$name,'code'=>$code,'phone'=>$phone,'amount'=>$amount,'year'=>$year,'month'=>$month,'day'=>$day,'created'=>$created*/
));
 }else{
 		if(!empty($s)){
		 $records = $dataProvider->getData();
		 $this->renderPartial('hcreport_summery',array(
 'records'=>$records,'model'=>$model,'no'=>$c
 /*,'name'=>$name,'code'=>$code,'phone'=>$phone,'amount'=>$amount,'year'=>$year,'month'=>$month,'day'=>$day,'created'=>$created*/
));
 }
 
 }
?>

