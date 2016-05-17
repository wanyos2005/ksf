<div style="width: 100%; height: 96%; overflow-x: hidden; overflow-y: scroll">
    <?php
    $i = 0;
    foreach ($partners['partners'] as $partner):
        ?>
        <div style="width: 100%; height: 4%; margin: 0; padding: 0; line-height: 1.3; color: lightyellow;
             <?php if ($i % 2 == 0): ?> background-color: lightskyblue; <?php endif; ?>overflow: hidden;">
            <div style="width: 5%; height: 100%; float: left; overflow: hidden">
                <?php echo ++$i; ?>
            </div>
            <div style="width: 25%; height: 100%; float: left; overflow: hidden; text-align: left">
                <?php echo $partner->name; ?>
            </div>
            <div style="width: 15%; height: 100%; float: left; overflow: hidden">
                <?php echo $partner->phone; ?>
            </div>
            <div style="width: 15%; height: 100%; float: left; overflow: hidden">
                <?php echo $partner->amountpledged; ?>
            </div>
            <div style="width: 15%; height: 100%; float: left; overflow: hidden">
                <?php
                $paid = PartnersContribution::amountPaid($partner->code);
                echo $paid;
                ?>
            </div>
            <div style="width: 15%; height: 100%; float: left; overflow: hidden">
                <?php
                if ($paid != $partner->amountpledged)
                    echo $paid - $partner->amountpledged;
                ?>
            </div>
            <div style="width: 6%; height: 100%; float: left; overflow: hidden">
                <?php
                if ($paid != $partner->amountpledged)
                    echo round(($paid - $partner->amountpledged) / $partner->amountpledged * 100, 0);
                ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div style="width: 100%; height: 4%; margin: 0; padding: 0; font-size: 110%; line-height: 1.1;
     border-top: solid orange 2px; border-bottom: solid orange 1px; overflow: hidden;">
    <div style="width: 29.5%; height: 100%; float: left; overflow: hidden">
        Totals
    </div>
    <div style="width: 15%; height: 100%; float: left; overflow: hidden">
        <?php echo $partners['count']; ?>
    </div>
    <div style="width: 14.5%; height: 100%; float: left; overflow: hidden">
        <?php echo $partners['pledges']; ?>
    </div>
    <div style="width: 15%; height: 100%; float: left; overflow: hidden">
        <?php
        echo $partners['paid'];
        ?>
    </div>
    <div style="width: 15%; height: 100%; float: left; overflow: hidden">
        <?php
        if ($partners['extra'] > 0)
            echo $partners['extra'];
        ?>
    </div>
    <div style="width: 6%; height: 100%; float: left; overflow: hidden">
        <?php
        if ($partners['extra'] > 0)
            echo round($partners['extra'] / $partners['pledges'] * 100, 2);
        ?>
    </div>
</div>