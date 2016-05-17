<?php
$hcPartners = new HcPartners;
$partnersContribution = new PartnersContribution;
$this->breadcrumbs = array(
    'Partners Contributions' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List PartnersContribution', 'url' => array('index')),
    array('label' => 'Create PartnersContribution', 'url' => array('create')),
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


        <p align="right"><?php echo CHtml::link('ADVANCED SEARCH', '#', array('class' => 'search-button')); ?></p>
        <div class="search-form" style="display:none">
            <?php
            $this->renderPartial('_search', array(
                'model' => $model,
            ));
            ?>
        </div><!-- search-form -->
        <br />

        <?php
        $this->widget('application.extensions.print.printWidget', array(
            'cssFile' => 'print.css',
            'printedElement' => '#yang_mau_diprint',
                )
        );

        $criteria123 = $model->searchDistinct();
        $partners = $model->model()->findAll($criteria);
        ?>

        <table id="yang_mau_diprint">

            <thead>
                <tr><th colspan="6"><?php echo $this->renderPartial('header'); ?></th></tr>
            <th colspan="6" class="lead" style="text-align:right"> Print Date: <? echo date('d-m-Y')?></th>  

            </thead>
            <?php
            $i = 0;
            $pledged = 0;
            $total_paid = 0;
            $total_balance = 0;
            foreach ($partners as $partner):

                $record1 = $model->model()->find('code=:code', array(':code' => $partner->code), array('pagination' => array('pageSize' => 50)));
                ?>
                <tr class="well">


                    <th class="bottomborder" colspan="2">Name :&nbsp;<? echo $record1->name ?></th>
                    <th class="bottomborder" colspan="2">Code:&nbsp;<? echo $partner->code ?></th>
                    <th class="bottomborder" colspan="2">Phone:&nbsp;<? echo $record1->phone?></th>
                </tr>
                <tr class="well">


                    <th class="bottomborder" colspan="4">&nbsp;</th>
                    <th class="bottomborder" style="text-align:right">Pay Date</th>
                    <th class="bottomborder" style="text-align:right">Amount</th>
                </tr>


                <?php
                $pledged = $pledged + $hcPartners->findHcamountpledgebyCode($partner->code);

                $model = new PartnersContribution;
                $sum_paid = 0;
                $records = $model->model()->findAll('code=:code', array(':code' => $partner->code), array('pagination' => array('pageSize' => 50)));
                foreach ($records as $record):
                    $sum_paid = $sum_paid + $record->amount;
                    $total_paid = $total_paid + $record->amount;
                    $balance = $hcPartners->findHcamountpledgebyCode($partner->code) - $sum_paid;
                    $total_balance = $balance + $total_balance;
                    ?>

                    <?php
                endforeach;
                ?>

                <?php
                $dataProvider = $model->search2($partner->code);
                $partners21 = $dataProvider->getData();
                foreach ($partners21 as $partner21):
                    ?>
                    <tr>	

                        <td class="rightborder bottomborder" colspan="4"></td>  
                        <td class="rightborder bottomborder" style="text-align:right"><? echo $partner21->tarehe?></td> 
                        <td class="rightborder bottomborder" style="text-align:right"><? echo number_format($partner21->amount) ?></td>


                    </tr>
                <?php endforeach; ?>

                <tr>		
                    <th class="rightborder bottomborder" colspan="2"></th> <th class="rightborder bottomborder"><em>Pledge:<? echo number_format($hcPartners->findHcamountpledgebyCode($partner->code))?></em></th>
                    <th class="rightborder bottomborder"><em>Balance:<? echo number_format( $hcPartners->findHcamountpledgebyCode($partner->code)- $sum_paid)?></em></th>
                    <th class="rightborder bottomborder" style="text-align:right">Sum Paid</th><th class="rightborder bottomborder"  style="text-align:right"><em><? echo number_format($sum_paid) ?></em></th>


                </tr>
                <th colspan="6" >&nbsp;</th>  
                <?php
            endforeach;
            $plge = 0;

            $records3 = $hcPartners->model()->findAll();
            foreach ($records3 as $record3):
                $plge = $plge + $record3->amountpledged;
            endforeach;

            $paidin = 0;
            $records4 = $partnersContribution->model()->findAll();
            foreach ($records4 as $record4):
                $paidin = $paidin + $record4->amount;
            endforeach;
            ?>
            <tfoot>
            <td class="bottomborder" style="text-align:right"></td>

            <td class="rightborder bottomborder" ></td> 
            <td class="rightborder bottomborder">Total Pledge: <? echo number_format($plge)?></td> 
            <td class="rightborder bottomborder">Balance: <? echo number_format($plge-$paidin) ?></td> 
            <td class="rightborder bottomborder">Paid: <? echo number_format($paidin) ?></td>
            <td class="bottomborder" style="text-align:right"></td>

            </tfoot>


        </table>


    </fieldset>
</div>
