<?php
/* @var $this TblPastapplicantsController */
/* @var $model TblPastapplicants */

$this->breadcrumbs=array(
	'Tbl Pastapplicants'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TblPastapplicants', 'url'=>array('index')),
	array('label'=>'Create TblPastapplicants', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tbl-pastapplicants-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tbl Pastapplicants</h1>

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
	'id'=>'tbl-pastapplicants-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		'NAME',
		'IDNO',
		'PINNO',
		'EMAIL_ADD',
		'TELNO',
		/*
		'AMOUNT',
		'PRINTED',
		'POSTDATE',
		'CONST_C',
		'YEAR_OF_STUDY',
		'STUD_CATEGORY',
		'STUD_COUNTY',
		'BURSARY',
		'ACADEMIC_YEAR',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
