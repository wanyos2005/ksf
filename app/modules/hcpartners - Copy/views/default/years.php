<?php $total = PartnersContribution::bestYear(); ?>
<div class="wide form" style="height: 45%; width: 100%; background-color: darkseagreen">
    <div>
        <fieldset>
            <legend><p class="note">Best Performed Year</p></legend>
            <div style="width: 100%; margin: 0; padding: 0">
                <div style=" width: 25%; float: left">
                    Year
                </div>

                <div style=" width: 30%; float: left; text-align: center">
                    Partners
                </div>

                <div style=" width: 45%; float: left; text-align: center">
                    Amount Contributed
                </div>
            </div>

            <div style="width: 100%; margin: 0; padding: 0">
                <div style=" width: 25%; float: left">
                    <?php echo $total['yr']; ?>
                </div>

                <div style=" width: 30%; float: left; text-align: center">
                    <?php echo $total['cnt']; ?>
                </div>

                <div style=" width: 45%; float: left; text-align: center">
                    KShs. <?php echo $total['ttl']; ?>
                </div>
            </div>
        </fieldset>			
    </div>
</div>

<?php $total = PartnersContribution::worstYear(); ?>
<div class="wide form" style="height: 45%; width: 100%; background-color: darkseagreen">
    <div>
        <fieldset>
            <legend><p class="note">Worst Performed Year</p></legend>
            <div style="width: 100%; margin: 0; padding: 0">
                <div style=" width: 25%; float: left">
                    Year
                </div>

                <div style=" width: 30%; float: left; text-align: center">
                    Partners
                </div>

                <div style=" width: 45%; float: left; text-align: center">
                    Amount Contributed
                </div>
            </div>

            <div style="width: 100%; margin: 0; padding: 0">
                <div style=" width: 25%; float: left">
                    <?php echo $total['yr']; ?>
                </div>

                <div style=" width: 30%; float: left; text-align: center">
                    <?php echo $total['cnt']; ?>
                </div>

                <div style=" width: 45%; float: left; text-align: center">
                    KShs. <?php echo $total['ttl']; ?>
                </div>
            </div>
        </fieldset>			
    </div>
</div>
