   <style type="text/css">

 
tbody {
    display: block; 
    height: 410px; 
       /* Just for the demo          */
    /*.overflow-y: auto;    /* Trigger vertical scroll    */
   overflow-x: hidden;  /* Hide the horizontal scroll */
}
   </style>



    <table >
  
     
   
 <tr>
              <td   class="col1"> #</td>
              <td align="left" class="col2" width="20%" >  <strong> Name</strong></td>
              <td align="left"  width="15%"  >  <strong>Phone</strong></td>
              <td align="right"  width="15%" > <strong>Pledge</strong></td>
              <td align="right"  width="15%" ><strong>Paid</strong></td>
              <td align="right"  width="15%" > <strong>Exceeded</strong></td>
              <td align="right"  width="15%" ><strong> %</strong></td>
              
             </tr>
         
    <?php
    $i = 0;
    foreach ($partners['partners'] as $partner):
        ?>

    <tr style=" <?php if ($i % 2 == 0): ?> background-color: lightskyblue; <?php endif; ?>">
        <td> <?php echo ++$i; ?> &nbsp;&nbsp;</td>
        <td align="left"><?php echo $partner->name; ?> </td>
        <td  align="right">   <?php echo $partner->phone; ?></td>
        <td  align="right"> <?php echo number_format($partner->amountpledged); ?> </td>
        <td  align="right">  <?php   $paid = PartnersContribution::amountPaid($partner->code);
                echo number_format($paid);
                ?>
        </td>
        <td align="right"> <?php
                if ($paid != $partner->amountpledged)
                    echo number_format($paid - $partner->amountpledged);
                ?>
        </td>
        <td align="right"> 
                     <?php
                if ($paid != $partner->amountpledged)
                    echo number_format( round(($paid - $partner->amountpledged) / $partner->amountpledged * 100, 0));
                ?>
        </td>
    </tr>


         <?php endforeach; ?>
    

 
<tr  ><td> </td>
                 <td align="right"> Totals</td>
              <td align="right"><?php echo $partners['count']; ?> </td>
              <td align="right"><?php echo number_format($partners['pledges']); ?> </td>
              <td align="right"><?php
        echo number_format($partners['paid']);
        ?> </td>
              <td align="right"><?php
        if ($partners['extra'] > 0)
            echo number_format($partners['extra']);
        ?> </td>
              <td align="right"><?php
        if ($partners['extra'] > 0)
            echo round($partners['extra'] / $partners['pledges'] * 100, 2);
        ?> </td>
              
              
             </tr>


</table>
