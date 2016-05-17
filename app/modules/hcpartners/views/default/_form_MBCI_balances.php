<div class="wide form" style="height: 45%; width: 100%; background-color: darkseagreen">

    <div>
        <fieldset>
            <legend><p class="note">Contributions</p></legend>
            <div style="width: 100%; margin: 0; padding: 0">
                <div style=" width: 20%; float: left">
                    Contribution
                </div>

                <div style=" width: 20%; float: left; text-align: center">
                    At 100%
                </div>

                <div style=" width: 20%; float: left; text-align: center">
                    Above 100%
                </div>

                <div style=" width: 20%; float: left; text-align: center">
                    Below 100%
                </div>

                <div style=" width: 20%; float: left; text-align: center">
                    Total Paid
                </div>
            </div>

            <div style="width: 100%; margin: 0; padding: 0">
                <div style=" width: 20%; float: left">
                    Amount, KShs.
                </div>

                <div style=" width: 20%; float: left; text-align: center">
                    <?php echo $totals['stld'] - $totals['extra']; ?>
                </div>

                <div style=" width: 20%; float: left; text-align: center">
                    <?php echo $totals['extra']; ?>
                </div>

                <div style=" width: 20%; float: left; text-align: center">
                    <?php echo $totals['paid'] - $totals['stld']; ?>
                </div>

                <div style=" width: 20%; float: left; text-align: center">
                    <?php echo $totals['paid']; ?>
                </div>
            </div>

            <div style="width: 100%; margin: 0; padding: 0">
                <div style=" width: 20%; float: left">
                    Percent
                </div>

                <div style=" width: 20%; float: left; text-align: center">
                    <?php echo round(($totals['stld'] - $totals['extra']) / $totals['paid'] * 100, 0); ?>%
                </div>

                <div style=" width: 20%; float: left; text-align: center">
                    <?php echo round($totals['extra'] / $totals['paid'] * 100, 0); ?>%
                </div>

                <div style=" width: 20%; float: left; text-align: center">
                    <?php echo round(($totals['paid'] - $totals['stld']) / $totals['paid'] * 100, 0); ?>%
                </div>

                <div style=" width: 20%; float: left; text-align: center">
                    <?php echo round($totals['paid'] / $totals['paid'] * 100, 0); ?>%
                </div>
            </div>

            <div style="width: 100%; margin: 0; padding: 0; color: chocolate; font-size: 80%">
                &nbsp;<br/>
                <i>NB: At 100%: Contributions equal to pledges; Above 100%: Contributions above pledges; Below 100%: Unsettled pledges</i> 
            </div>
        </fieldset>			
    </div>

</div><!-- form -->

<div class="wide form" style="height: 45%; width: 100%; background-color: darkseagreen">

    <div>
        <fieldset>
            <legend><p class="note">Overall Progress</p></legend>
            <div style="width: 100%; margin: 0; padding: 0">
                <div style=" width: 20%; float: left">
                    Category
                </div>

                <div style=" width: 20%; float: left; text-align: center">
                    Total Pledges
                </div>

                <div style=" width: 20%; float: left; text-align: center">
                    Total Contributions
                </div>

                <div style=" width: 20%; float: left; text-align: center">
                    Total Balance
                </div>

                <div style=" width: 20%; float: left; text-align: center">
                    Moving Target
                </div>
            </div>

            <div style="width: 100%; margin: 0; padding: 0">
                <div style=" width: 20%; float: left">
                    Amount, KShs.
                </div>

                <div style=" width: 20%; float: left; text-align: center">
                    <?php echo $totals['pledges']; ?>
                </div>

                <div style=" width: 20%; float: left; text-align: center">
                    <?php echo $totals['paid']; ?>
                </div>

                <div style=" width: 20%; float: left; text-align: center">
                    <?php echo $totals['pledges'] - $totals['paid']; ?>
                </div>

                <div style=" width: 20%; float: left; text-align: center">
                    <?php echo $totals['pledges'] + $totals['extra']; ?>
                </div>
            </div>

            <div style="width: 100%; margin: 0; padding: 0">
                <div style=" width: 20%; float: left">
                    Percent
                </div>

                <div style=" width: 20%; float: left; text-align: center">
                    <?php echo round($totals['pledges'] / $totals['pledges'] * 100, 0); ?>%
                </div>

                <div style=" width: 20%; float: left; text-align: center">
                    <?php echo round($totals['paid'] / $totals['pledges'] * 100, 0); ?>%
                </div>

                <div style=" width: 20%; float: left; text-align: center">
                    <?php echo round(($totals['pledges'] - $totals['paid']) / $totals['pledges'] * 100, 0); ?>%
                </div>

                <div style=" width: 20%; float: left; text-align: center">
                    <?php echo round(($totals['pledges'] + $totals['extra']) / $totals['pledges'] * 100, 0); ?>%
                </div>
            </div>

            <div style="width: 100%; margin: 0; padding: 0; color: chocolate; font-size: 80%">
                &nbsp;<br/>
                <i>NB: Moving target can be attained when all the unsettled pledges are paid. Total balance assumes that the target is the total pledges</i> 
            </div>
        </fieldset>
    </div>

</div><!-- form -->