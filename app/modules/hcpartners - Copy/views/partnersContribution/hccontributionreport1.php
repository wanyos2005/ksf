<?php
$hcPartners=new HcPartners;
$partnersContribution=new PartnersContribution;
$this->breadcrumbs=array(
	'Partners Contributions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PartnersContribution', 'url'=>array('index')),
	array('label'=>'Create PartnersContribution', 'url'=>array('create')),
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('partners-contribution-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="form">
<!--<div id="yang_mau_diprint">
-->
<fieldset>
<legend><p class="note">Harvest cathedral Payment Report</p></legend>


<p align="right"><?php echo CHtml::link('ADVANCED SEARCH','#',array('class'=>'search-button')); ?></p>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<br />

<?
 $this->widget('application.extensions.print.printWidget', array(                   
                   'cssFile' => 'print.css',
                   'printedElement'=>'#yang_mau_diprint',
                   )
                 
               ); 
//$dataProvider = $model->search();	
$dataProvider = $model->searchDistinct();
$partners=$dataProvider->getData();	   
			   ?>

<table id="yang_mau_diprint">

<thead>
<tr><th colspan="8"><?php echo $this->renderPartial('header'); ?></th></tr>
<tr>
	
		<th class="rightborder bottomborder">Code</th>	
		<th class="rightborder bottomborder">Name</th>
		<th class="rightborder bottomborder">Phone</th> 
		<th class="rightborder bottomborder">Date</th>  
		<th class="rightborder bottomborder">Pledge</th> 
		<th class="rightborder bottomborder">Paid</th> 
		<th class="rightborder bottomborder">Sum Paid</th>
		<th class="rightborder bottomborder">Balance</th> 
		
</tr>
</thead>
<? 
$i=0;
$pledged=0;
$total_paid=0;
$total_balance=0;
		foreach($partners as $partner):
		
		$pledged=$pledged+$hcPartners->findHcamountpledgebyCode($partner->code);
		
		$model=new PartnersContribution;
		$sum_paid=0;
	    $records=$model->model()->findAll('code=:code' , array(':code'=>$partner->code),array('pagination'=>array('pageSize'=>50)));
		foreach ($records as $record):
				
		

		$sum_paid=$sum_paid+$record->amount;
		$total_paid=$total_paid+$record->amount;
		//if($hcPartners->findHcamountpledgebyCode($partner->code)>0){
		$balance=$hcPartners->findHcamountpledgebyCode($partner->code)-$sum_paid;
		//}
		$total_balance=$balance+$total_balance;

?>
<tr>	
		<td class="rightborder bottomborder"><? echo $record->code?></td>	
		<td class="rightborder bottomborder"><? echo $record->name?></td>
		<td class="rightborder bottomborder"><? echo $record->phone?></td> 
		<td class="rightborder bottomborder"><? echo $record->tarehe?></td>  
		<td class="rightborder bottomborder" style="text-align:right"><? echo number_format($hcPartners->findHcamountpledgebyCode($partner->code))?></td> 
		<td class="rightborder bottomborder" style="text-align:right"><? echo number_format($record->amount) ?></td> 
		<td class="rightborder bottomborder" style="text-align:right"><? echo number_format($sum_paid) ?></td>
		<td class="rightborder bottomborder" style="text-align:right"><? 
				if($balance<0){		
		echo number_format($balance*-1) ?><p class="note">Excess</p><?
		}else{
		echo number_format($balance);
		
		}?></td> 
		
</tr>
<? 
	
	endforeach;
	endforeach ;?>
	<tfoot>
		
		<td class="rightborder bottomborder"><? ?></td>	
		<td class="rightborder bottomborder"><? ?></td>
		<td class="rightborder bottomborder"><? ?></td> 
		<td class="rightborder bottomborder"><? ?></td>  
		<td class="rightborder bottomborder" style="text-align:right"><? echo number_format($pledged)?></td> 
		<td class="rightborder bottomborder" style="text-align:right"><? echo number_format($total_paid) ?></td> 
		<td class="rightborder bottomborder" style="text-align:right"><? echo number_format($total_paid) ?></td>
		<td class="rightborder bottomborder" style="text-align:right"><? echo number_format($pledged-$total_paid) ?></td> 
		

	</tfoot>
	</t
></table>


</fieldset>
<!--</div>
--></div>
