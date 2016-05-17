<div class="wide form" style="height: 45%; width: 100%; background-color: darkseagreen">

    <div>
        <fieldset>
            <legend><p class="note">Settled Pledges</p></legend>
            <div style="width: 100%; margin: 0; padding: 0">
                <div style=" width: 25%; float: left">
                    Category
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    Pledges
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    Contributions
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    Exceeded
                </div>
            </div>

            <div style="width: 100%; margin: 0; padding: 0">
                <div style=" width: 25%; float: left">
                    Amount, KShs.
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    <?php echo $totals['stld'] - $totals['extra']; ?>
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    <?php echo $totals['stld']; ?>
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    <?php echo $totals['extra']; ?>
                </div>
            </div>

            <div style="width: 100%; margin: 0; padding: 0">
                <div style=" width: 25%; float: left">
                    Percent
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    <?php echo round(($totals['stld'] - $totals['extra']) / ($totals['stld'] - $totals['extra']) * 100, 0); ?>%
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    <?php echo round($totals['stld'] / ($totals['stld'] - $totals['extra']) * 100, 0); ?>%
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    <?php echo round($totals['extra'] / ($totals['stld'] - $totals['extra']) * 100, 0); ?>%
                </div>
            </div>

            <div style="width: 100%; margin: 0; padding: 0">
                <div style=" width: 25%; float: left">
                    Contributions, %
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    <?php echo round(($totals['stld'] - $totals['extra']) / $totals['paid'] * 100, 0); ?>%
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    <?php echo round($totals['stld'] / $totals['paid'] * 100, 0); ?>%
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    <?php echo round($totals['extra'] / $totals['paid'] * 100, 0); ?>%
                </div>
            </div>

            <div style="width: 100%; margin: 0; padding: 0">
                <div style=" width: 25%; float: left">
                    Total Pledges, %
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    <?php echo round(($totals['stld'] - $totals['extra']) / $totals['pledges'] * 100, 0); ?>%
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    <?php echo round($totals['stld'] / $totals['pledges'] * 100, 0); ?>%
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    <?php echo round($totals['extra'] / $totals['pledges'] * 100, 0); ?>%
                </div>
            </div>

            <div style="width: 100%; margin: 0; padding: 0">
                <div style=" width: 25%; float: left">
                    Moving Target, %
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    <?php echo round(($totals['stld'] - $totals['extra']) / ($totals['pledges'] + $totals['extra']) * 100, 0); ?>%
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    <?php echo round($totals['stld'] / ($totals['pledges'] + $totals['extra']) * 100, 0); ?>%
                </div>

                <div style=" width: 25%; float: left; text-align: center">
                    <?php echo round($totals['extra'] / ($totals['pledges'] + $totals['extra']) * 100, 0); ?>%
                </div>
            </div>

            <div style="width: 100%; margin: 0; padding: 0; color: chocolate; font-size: 80%">
                &nbsp;<br/>
                <i>NB: Percent: of their pledges; Contributions: percentage of total contributions; Total Pledges: percentage of total pledges; Moving Target: percentage of the moving target  </i> 
            </div>
        </fieldset>			
    </div>

</div><!-- form -->