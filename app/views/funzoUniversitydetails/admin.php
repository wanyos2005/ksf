<?php
/* @var $this FunzoUniversitydetailsController */
/* @var $model FunzoUniversitydetails */

$this->breadcrumbs=array(
	'Funzo Universitydetails'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List FunzoUniversitydetails', 'url'=>array('index')),
	array('label'=>'Create FunzoUniversitydetails', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#funzo-universitydetails-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Funzo Universitydetails</h1>

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
	'id'=>'funzo-universitydetails-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'UNIID',
		'UNIVERSITY_CODE',
		'DEPARTMENT',
		'FACULTY',
		'AREA_OF_STUDY',
		'REG_NO',
		/*
		'CURR_YEAR_OF_STUDY',
		'DEGREE_QUALIFICATION',
		'LEVEL_OF_STUDY',
		'COURSE_AREA',
		'APP_IDNOFK',
		'YEAR_OF_ADM',
		'DATE_POSTED',
		'CAMPUS_NAME',
		'LENGTH_OF_STUDY',
		'CATEGORY',
		'CADRE',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
