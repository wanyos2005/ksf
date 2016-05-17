<?php
$hcPartners=new HcPartners;
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

<?php echo $this->renderPartial('header'); ?>


<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?
 $this->widget('application.extensions.print.printWidget', array(                   
                   'cssFile' => 'print.css',
                   'printedElement'=>'#yang_mau_diprint',
                   )
                 
               ); 
			   ?>
<div class="form">
<div id="yang_mau_diprint">

<fieldset>
<legend><p class="note">Harvest cathedral Payment Report</p></legend>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'partners-contribution-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'summaryText' => '{count} records(s) found.',
	'columns'=>array(
		//'id',
	array(
	  'header'=>'Code',
	  'name'=>'code',
	  'value'=>'$data->code',
      'type'=>'raw',
	  'htmlOptions'=>array("width"=>"100px"),
     ),
	array(
	  'header'=>'Name',
	  'name'=>'name',
	  'value'=>'$data->name',
      'type'=>'raw',
	  'htmlOptions'=>array("width"=>"200px"),
     ),
	 array(
	  'header'=>'Phone',
	  'name'=>'phone',
	  'value'=>'$data->phone',
      'type'=>'raw',
	  'htmlOptions'=>array("width"=>"100px"),
     ),
		
		//'phone',
		//'amount',
		//'year',
//		array(            // display 'author.username' using an expression
//            'name'=>'month',
//			'value'=>'Months::get_months($data->month)',
//			'filter'=>Months::show_months(),
//        ),
		//'week',
		//'day',
		/*'created',
		'user',
		*/
		
	array(
	  'header'=>'Date',
	  'name'=>'tarehe',
	  'value'=>'$data->tarehe',
      'type'=>'raw',
	  'htmlOptions'=>array("width"=>"80px"),
     ),
	 
	 array(
	  'header'=>'Pledge',
	  'name'=>'amount',
	  'value'=>'HcPartners::findHcamountpledgebyCode($data->code)',
      'type'=>'raw',
	  'htmlOptions'=>array("width"=>"50px"),
	 // 'class'=>'ext.grid1.TotalColumn',
	 // 'footer'=>true
     ),
		
	array(
	  'header'=>'Paid',
     // 'class'=>'ext.grid1.TotalColumn',
     'name'=>'amount',
    // 'output'=>'Yii::app()->getNumberFormatter->formatCurrency($value,"GBP")',
	  'value'=>'$data->amount',
      'type'=>'raw',
	  'htmlOptions'=>array("width"=>"50px"),
     // 'footer'=>true
     ),
	 
	array(
	  'header'=>' Sum Paid',
      'class'=>'ext.grid1.RunningTotalColumn',
     'name'=>'amount',
    // 'output'=>'Yii::app()->getNumberFormatter->formatCurrency($value,"GBP")',
	  'value'=>'$data->amount',
      'type'=>'raw',
	  'htmlOptions'=>array("width"=>"50px"),
     // 'footer'=>true
     ),
	 
	 array(
	  'header'=>'Balance',
      'class'=>'ext.grid1.CalcColumn',
     'name'=>'amount',
    // 'output'=>'Yii::app()->getNumberFormatter->formatCurrency($value,"GBP")',
	  'value'=>'$c4-$c6',
      'type'=>'raw',
	  'htmlOptions'=>array("width"=>"50px"),
      'footer'=>true
     ),
	 
		 
	 
	),
)); ?>

</fieldset>
</div>
</div>
