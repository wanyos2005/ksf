<div class="wide form" style="height: 45%; width: 100%; background-color: darkseagreen">

    <div>
        <fieldset>
            <legend><p class="note">Pledge Counts</p></legend>
            <div style="width: 100%; margin: 0; padding: 0">
                <div style=" width: 25%; float: left">
                    Category
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    All Pledges
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    Settled Pledges
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    Unsettled Pledges
                </div>
            </div>

            <div style="width: 100%; margin: 0; padding: 0">
                <div style=" width: 25%; float: left">
                    Count
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    <?php echo $totals['pats']; ?>
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    <?php echo $totals['comp']; ?>
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    <?php echo $totals['pats'] - $totals['comp']; ?>
                </div>
            </div>

            <div style="width: 100%; margin: 0; padding: 0">
                <div style=" width: 25%; float: left">
                    Percent
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    <?php echo round($totals['pats'] / $totals['pats'] * 100, 0); ?>%
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    <?php echo round($totals['comp'] / $totals['pats'] * 100, 0); ?>%
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    <?php echo round(($totals['pats'] - $totals['comp']) / $totals['pats'] * 100, 0); ?>%
                </div>
            </div>

            <div style="width: 100%; margin: 0; padding: 0; color: chocolate; font-size: 80%">
                &nbsp;<br/>
                <i>NB: These are the numbers of partners with pledges</i> 
            </div>
        </fieldset>			
    </div>

</div><!-- form -->

<div class="wide form" style="height: 45%; width: 100%; background-color: darkseagreen">

    <div>
        <fieldset>
            <legend><p class="note">Pledge Amounts</p></legend>
            <div style="width: 100%; margin: 0; padding: 0">
                <div style=" width: 25%; float: left">
                    Category
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    Total Pledges
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    Settled Pledges
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    Unsettled Pledges
                </div>
            </div>

            <div style="width: 100%; margin: 0; padding: 0">
                <div style=" width: 25%; float: left">
                    Amount, KShs.
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    <?php echo $totals['pledges']; ?>
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    <?php echo $totals['stld'] - $totals['extra']; ?>
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    <?php echo $totals['pledges'] - ($totals['stld'] - $totals['extra']); ?>
                </div>
            </div>

            <div style="width: 100%; margin: 0; padding: 0">
                <div style=" width: 25%; float: left">
                    Percent
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    <?php echo round($totals['pledges'] / $totals['pledges'] * 100, 0); ?>%
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    <?php echo round(($totals['stld'] - $totals['extra']) / $totals['pledges'] * 100, 0); ?>%
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    <?php echo round(($totals['pledges'] - ($totals['stld'] - $totals['extra'])) / $totals['pledges'] * 100, 0); ?>%
                </div>
            </div>

            <div style="width: 100%; margin: 0; padding: 0; color: chocolate; font-size: 80%">
                &nbsp;<br/>
                <i>NB: The amounts have been stated according to the pledges</i> 
            </div>
        </fieldset>
    </div>

</div><!-- form -->