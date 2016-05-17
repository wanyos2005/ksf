
<table>
    <tr>
        <td   > #</td>
              <td align="left" width="20%" >  <strong> Name</strong></td>
              <td align="left"  width="15%"  >  <strong>Phone</strong></td>
              <td align="right"  width="15%" > <strong>Pledge</strong></td>
              <td align="right"  width="15%" ><strong>Paid</strong></td>
              <td align="right"  width="15%" > <strong>%</strong></td>
              <td align="right"  width="15%" ><strong> Balance</strong></td>
        
    </tr>

    <?php
    $i = 0;
    foreach ($partners['partners'] as $partner):
        ?>
   <tr style=" <?php if ($i % 2 == 0): ?> background-color: lightskyblue; <?php endif; ?>">
              <td> <?php echo ++$i; ?></td>
              <td align="left" width="20%" >    <?php echo $partner->name; ?></td>
              <td align="left"  width="15%"  >   <?php echo $partner->phone; ?></td>
              <td align="right"  width="15%" > <?php echo number_format($partner->amountpledged); ?></td>
              <td align="right"  width="15%" > <?php
                $paid = PartnersContribution::amountPaid($partner->code);
                if (!empty($paid))
                    echo number_format($paid);
                ?>
              </td>
              <td align="right"  width="15%" >  <?php
                if (!empty($paid))
                    echo round($paid / $partner->amountpledged * 100, 0);
                ?></td>
              <td align="right"  width="15%" > <?php
                echo number_format($partner->amountpledged - $paid);
                ?></td>
    </tr>
        
    <?php endforeach; ?>

<tr>
        <td   > </td>
              <td align="left" width="20%" >    <?php echo $partners['count']; ?></td>
              <td align="left"  width="15%"  >  </td>
              <td align="right"  width="15%" >  <?php echo number_format($partners['pledges']); ?></td>
              <td align="right"  width="15%" ><?php
        if ($partners['paid'] > 0)
            echo number_format($partners['paid']);
        ?></td>
              <td align="right"  width="15%" >  <?php
        if ($partners['paid'] > 0)
            echo round($partners['paid'] / $partners['pledges'] * 100, 2);
        ?></td>
              <td align="right"  width="15%" >   <?php
        if ($partners['unpaid'] > 0)
            echo number_format($partners['unpaid']);
        ?></td>
        
    </tr>

</table>

