<?php
/* @var $this FunzoMtiController */
/* @var $model FunzoMti */

$this->breadcrumbs=array(
	'Funzo Mtis'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List FunzoMti', 'url'=>array('index')),
	array('label'=>'Create FunzoMti', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#funzo-mti-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Funzo Mtis</h1>

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
	'id'=>'funzo-mti-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		'IDNO',
		'CATEGORY',
		'LEVEL_OF_STUDY',
		'YEAR_OF_STUDY',
		'COST_OF_PROGRAM',
		/*
		'CADRE',
		'APPLICANT_DETAILS',
		'GENDER',
		'COUNTY',
		'FATHER',
		'MOTHER',
		'GUARDIAN',
		'ACADEMIC_PROGRESS',
		'ORGANIZATION_SKILLS',
		'INTERPERSONAL_SKILLS',
		'TOTAL',
		'DATE_POSTED',
		'AMOUNT_AWARDED',
		'AMOUNT_AWARDED_CUM',
		'PAID',
		'DATE_PAID',
		'USER_PAID',
		'CONFIRMED',
		'DATE_CONFIRMED',
		'USER_CONFIRMED',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
