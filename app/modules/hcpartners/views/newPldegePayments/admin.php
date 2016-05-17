<?php
/* @var $this NewPldegePaymentsController */
/* @var $model NewPldegePayments */

$this->breadcrumbs=array(
	'New Pldege Payments'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List NewPldegePayments', 'url'=>array('index')),
	array('label'=>'Create NewPldegePayments', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#new-pldege-payments-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage New Pldege Payments</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'new-pldege-payments-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'newpledgeid',
		'amount',
		'year',
		'month',
		'week',
		/*
		'day',
		'tarehe',
		'created',
		'user',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
