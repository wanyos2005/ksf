<?php
$this->breadcrumbs=array(
	'Hc Partners'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List HcPartners', 'url'=>array('index')),
	array('label'=>'Create HcPartners', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('hc-partners-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<?php //echo $this->renderPartial('header'); ?>


<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<div class="form">
<fieldset>
<legend>Harvest Cathedral Partners</legend>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'hc-partners-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'summaryText' => '{count} records(s) found.',
	'columns'=>array(
		//'id',
		'code',
		'name',
		'phone',
		'amountpledged',
		/*'church',
		'county',
		'date',
		'email',
		*/
		array(
			'class'=>'CButtonColumn',
			  'htmlOptions' => array('width' => 70),
		),
	),
)); ?>

</fieldset>
</div>
