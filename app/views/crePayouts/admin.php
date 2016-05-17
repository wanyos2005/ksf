<?php
/* @var $this CrePayoutsController */
/* @var $model CrePayouts */

$this->breadcrumbs=array(
	'Cre Payouts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CrePayouts', 'url'=>array('index')),
	array('label'=>'Create CrePayouts', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cre-payouts-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Cre Payouts</h1>

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
	'id'=>'cre-payouts-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'FSERIAL',
		'IDFNAME',
		'IDLNAME',
		'IDMNAME',
		'IDNO',
		'ADMI_NO',
		/*
		'UNCODE',
		'CAMPUS_CODE',
		'AWARD',
		'PRINTDATE',
		'PAYMENT_SUBSET',
		'ACADEMIC_YEAR',
		'REF',
		'DATE',
		'id_pri',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
