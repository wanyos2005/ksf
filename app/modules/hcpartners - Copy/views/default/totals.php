<?php

$model = new HcPartners;
$this->breadcrumbs = array(
    'Mbcipartners' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List Mbcipartners', 'url' => array('index')),
    array('label' => 'Manage Mbcipartners', 'url' => array('admin')),
);
?>
<?php echo $this->renderPartial('header'); ?>

<?php

$tabs = array();
//if (Yii::app()->user->isAdmin()) {
    $tabs['Pledges'] = $this->renderPartial('_form_MBCI_balance', array('totals' => $totals), true);
    $tabs['Contributions'] = $this->renderPartial('_form_MBCI_balances', array('totals' => $totals), true);
    $tabs['Settled'] = $this->renderPartial('_form_MBCI_settled', array('totals' => $totals), true);
    $tabs['Unsettled'] = $this->renderPartial('_form_MBCI_unsettled', array('totals' => $totals), true);
    //$tabs['Months'] = $this->renderPartial('months', array(), true);
    //$tabs['Years'] = $this->renderPartial('years', array(), true);
    $tabs['Other'] = $this->renderPartial('months_years', array(), true);
//}


$this->widget('zii.widgets.jui.CJuiTabs', array(
    'tabs' => $tabs,
    'options' => array(
        'collapsible' => true,
        'selected' => 0,
    ),
    'htmlOptions' => array(
        'style' => 'width:98%'
    ),
));
