
<head>

        <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>

<?php
$model= new HcPartners;
$this->breadcrumbs=array(
	'Mbcipartners'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mbcipartners', 'url'=>array('index')),
	array('label'=>'Manage Mbcipartners', 'url'=>array('admin')),
);
?>
<?php echo $this->renderPartial('header'); ?>
<div  id="loading_div" class="row"> &nbsp;</div>    


<?php 
$tabs = array();
//$tabs['Manage'] = $this->renderPartial('admin',array('model'=>$model), true);
//$tabs['Send Inquiry'] = array('ajax' => array('/mbox/gdbmessage/inquiry_form2', 'pid' => $item['id']));

if (!Yii::app()->user->isGuest)
{
   $tabs['Make Payment'] = $this->renderPartial('_searchpartner',null,true);


//if (Yii::app()->user->isAdmin())
//$tabs['New Payment'] = $this->renderPartial('_searchpartner_me',null,true);
}

$tabs['New Partner'] = $this->renderPartial('_formMy',array('model' => $model),true);


$this->widget('zii.widgets.jui.CJuiTabs', array(
    'tabs'=>$tabs,
	/*array(
		    'New Partner'=>$this->renderPartial('_form_my',null,true),
		    'Make Payment'=>$this->renderPartial('_searchpartner',null,true),
       // 'Ajax tab'=>array('ajax'=>array('ajaxContent','view'=>'_content2')),
    ),*/
    'options'=>array(
        'collapsible'=>true,
        'selected'=>0,
		
    ),
    'htmlOptions'=>array(
        'style'=>'width:98%;'
    ),
	
));

?>