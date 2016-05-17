<section class="clearfix">
        <div class="portlet grid_12">
            <div class="message info">
                    <h3>Enter details for your application.</h3>    
                    <span> 
                        Use the forms below to enter the required details.
                    </span> 
             </div>
            <header>
                <h2>Application Review Details </h2>
            </header>
            <section>
            <div id="app_appeals_message" class="message info" style="display: none">
                      <h3></h3> 
                      <p></p> 
                      </div>   

                 <?php 
   $app_appeals_details = array('challenged'=>'','challenge_type'=>'','p_school'=>'','p_amount'=>'','s_school'=>'','s_amount'=>'','sponsored'=>'','reason_sponsor'=>'','parents_status'=>'','family_type'=>'','one_par_dece'=>'','two_par_dece'=>'');
                 if(!empty($app_appeals)){
      foreach($app_appeals as $p){
          $app_appeals_details = $p;                   
      }
      echo '
      <style>#app_appeals{display:none}</style>
      <script type="text/javascript">
      $(function(){
          $("#app_appeals_message").show().removeClass("info").addClass("success");
          $("#app_appeals_message h3").html("Congratulations!");
          $("#app_appeals_message p").html(" <button class=\'button fr btn_expandable\' frm_attr=\'app_appeals\' id= \'show_app_appeals\'>Show Details</button> Your already entered your second subsequent details!")
      });
      </script>
      ';
    }
    ?>         
                
                    <form class="form" id="app_appeals" name="app_appeals" method="post">
             

                       
                      <div class="clearfix left grid-50" >
                   

                        <label for="form-challenged" class="form-label">Are you challenged<em>*</em><small>(Challenged)</small></label>

                        <div class="form-input">

                            <select name='challenged' id="challenged">
                              <?= ($app_appeals_details['challenged'])?'<option value="'.$app_appeals_details['challenged'].'">'.$app_appeals_details['challenged'].'</option>':'';?>
                               <option value='-select one-'>-Select one-</option>
                               <option value='YES'>YES</option>
                              <option value='NO'>NO</option>
                            </select>
                                                         

                        </div>

                    </div>

                   <div class="clearfix left grid-50" >
                   

                        <label for="form-challenge_type" class="form-label">Nature of challenge<em>*</em><small>(Select one)</small></label>

                        <div class="form-input">

                            <select name='challenge_type' id="challenge_type">
                               <?= ($app_appeals_details['challenge_type'])?'<option value="'.$app_appeals_details['challenge_type'].'">'.$app_appeals_details['challenge_type'].'</option>':'';?>
                             
                               <option value='-select one-'>-Select one-</option>
                              <option value='Physical'>Physical</option>
                              <option value='Visual'>Visual</option>
                              <option value='Not Applicable'>Not Applicable</option>
                            </select>
                                                         

                        </div>

                    </div>


                     <div class="clearfix left grid-50" >
                   

                        <label for="form-p_school" class="form-label">Primary School<em>*</em><small>(Select school type)</small></label>

                        <div class="form-input">

                            <select name='p_school' id="p_school">
                               <?= ($app_appeals_details['p_school'])?'<option value="'.$app_appeals_details['p_school'].'">'.$app_appeals_details['p_school'].'</option>':'';?>
                             
                               <option value='-select one-'>-Select one-</option>
                              <option value='Physical'>Private</option>
                              <option value='Visual'>Public</option>
                            </select>
                                                         

                        </div>

                    </div>


                    <div class="clearfix left grid-50">
                   

                        <label for="form-p_amount" class="form-label">Primary School Fee Paid<em>*</em><small>(Enter Fee Amount)</small></label>

                        <div class="form-input">

                            <?php
                                $pin_no = array('name' => 'p_amount' , 'id' => 'form-p_amount', 'value'=>$app_appeals_details['p_amount']);
                                echo form_input($pin_no);

                                ?>

                        </div>

                    </div>



                    <div class="clearfix left grid-50" >
                   

                        <label for="form-s_school" class="form-label">Secondary School<em>*</em><small>(Select school type)</small></label>

                        <div class="form-input">

                            <select name='s_school' id="s_school">
                               <?= ($app_appeals_details['s_school'])?'<option value="'.$app_appeals_details['s_school'].'">'.$app_appeals_details['s_school'].'</option>':'';?>
                             
                               <option value='-select one-'>-Select one-</option>
                              <option value='Physical'>Public</option>
                              <option value='Visual'>Private</option>
                             
                            </select>
                                                         

                        </div>

                    </div>


                    <div class="clearfix left grid-50">
                   

                        <label for="form-s_amount" class="form-label">Secondary School Fee Paid<em>*</em><small>(Enter Fee Amount)</small></label>

                        <div class="form-input">

                            <?php
                                $pin_no = array('name' => 's_amount' , 'id' => 'form-s_amount', 'value'=>$app_appeals_details['s_amount']);
                                echo form_input($pin_no);

                                ?>

                        </div>

                    </div>


               <div class="clearfix left grid-50" >
                   

                        <label for="form-sponsored" class="form-label">Sponsored in high school<em>*</em><small>(Were you sponsored when in High School)</small></label>

                        <div class="form-input">

                            <select name='sponsored' id="sponsored">
                               <?= ($app_appeals_details['sponsored'])?'<option value="'.$app_appeals_details['sponsored'].'">'.$app_appeals_details['sponsored'].'</option>':'';?>
                             
                               <option value='-select one-'>-Select one-</option>
                              <option value='YES'>Yes</option>
                              <option value='NO'>No</option>
                          </select>
                                                         

                        </div>

                    </div>


                    <div class="clearfix left grid-50" >
                   

                        <label for="form-reason_sponsor" class="form-label">Reason for sponsorship<em>*</em><small>(Reason for sponsorship)</small></label>

                        <div class="form-input">

                            <select name='reason_sponsor' id="reason_sponsor">
                               <?= ($app_appeals_details['reason_sponsor'])?'<option value="'.$app_appeals_details['reason_sponsor'].'">'.$app_appeals_details['reason_sponsor'].'</option>':'';?>
                             
                               <option value='-select one-'>-Select one-</option>
                              <option value='Poor or orphan background'>Poor or Orphan Background</option>
                              <option value='Academic Scholarship'>Academic Scholarship</option>
                              <option value='Not Applicable'>Not Applicable</option>
                              
                          </select>
                                                         

                        </div>

                    </div>


                    <div class="clearfix left grid-50" >
                   

                        <label for="form-parents_status" class="form-label">Parents Marital Status<em>*</em><small>(select parents marital status)</small></label>

                        <div class="form-input">

                            <select name='parents_status' id="parent_status">
                               <?= ($app_appeals_details['parents_status'])?'<option value="'.$app_appeals_details['parents_status'].'">'.$app_appeals_details['parents_status'].'</option>':'';?>
                             
                               <option value='-select one-'>-Select one-</option>
                              <option value='Married'>Married</option>
                              <option value='Separated'>Separated</option>
                              <option value='Divorced'>Divorced</option>
                              
                          </select>
                                                         

                        </div>

                    </div>
                    
                   

                    <div class="clearfix left grid-50" >
                   

                        <label for="form-family_type" class="form-label">Family Type<em>*</em><small>(specify family type)</small></label>

                        <div class="form-input">

                            <select name='family_type' id="family_type">
                               <?= ($app_appeals_details['family_type'])?'<option value="'.$app_appeals_details['family_type'].'">'.$app_appeals_details['family_type'].'</option>':'';?>
                             
                               <option value='-select one-'>-Select one-</option>
                              <option value='Single'>Single</option>
                              <option value='Unmarried'>Unmarried</option>
                              <option value='Not Applicable'>Not Applicable</option>
                              
                          </select>
                                                         

                        </div>

                    </div>


                    <div class="clearfix left grid-50" >
                   

                        <label for="form-one_par_dece" class="form-label">Is one parent deceased<em>*</em><small>(specify one)</small></label>

                        <div class="form-input">

                            <select name='one_par_dece' id="one_par_dece">
                               <?= ($app_appeals_details['one_par_dece'])?'<option value="'.$app_appeals_details['one_par_dece'].'">'.$app_appeals_details['one_par_dece'].'</option>':'';?>
                             
                               <option value='-select one-'>-Select one-</option>
                               <option value='NO'>NO</option>
                              <option value='YES'>YES</option>
                                
                          </select>
                                                         

                        </div>

                    </div>

                    <div class="clearfix left grid-50" >
                   

                        <label for="form-two_par_dece" class="form-label">Are both parents deceased<em>*</em><small>(specify one)</small></label>

                        <div class="form-input">

                            <select name='two_par_dece' id="two_par_dece">
                              <?= ($app_appeals_details['two_par_dece'])?'<option value="'.$app_appeals_details['two_par_dece'].'">'.$app_appeals_details['two_par_dece'].'</option>':'';?>
                             
                               <option value='-select one-'>-Select one-</option>
                               <option value='NO'>NO</option>
                              <option value='YES'>YES</option>
                                
                          </select>
                                                         

                        </div>

                    </div>
                    
                   
                     
                      

                    

                     

                      

                    <div class="clearfix"></div>
                      
                    <div class="form-action clearfix">

                        <button class="button" type="submit" data-icon-primary="ui-icon-circle-check">Save</button>

                        

                    </div>
                        </form>
                </section>
            </div>
    </section>

    <script type="text/javascript">
    $('.btn_expandable').click(function(){
                          //This is to reset the expandable for button
                         if(jQuery.trim($(this).html())==jQuery.trim('Show Details'))
                         {
                         $(this).html('Hide Details');
                         }
                         else
                         {
                          $(this).html('Show Details');
                         }
                         var form=$(this).attr('frm_attr'); 
                         $('#'+form).slideToggle();
                         }); 
$('#app_appeals').unbind('submit').submit(function(e){


var select_fields={key1: 'challenged',key2:'challenge_type',key3:'p_school',key4:'s_school',key5:'sponsored',key6:'reason_sponsor',key7:'parents_status',key8:'family_type',key9:'one_par_dece',key10:'two_par_dece'};
for (x in select_fields)
  {
    
    var select_val=$('#'+select_fields[x]).val();
    if(select_val=='-select one-')
    {
        $("small").html('');
         $('#app_appeals_message').removeClass('info').addClass('error');
          $('#app_appeals_message h3').html('Failed!');
                       $('#app_appeals_message p').html(' Correct the errors highlighted below..')
                       $('#form-educ_det').css('border-color','red');
                       $("label[for='form-"+select_fields[x]+"'] small").css('color','red').html('You must select an option')

//alert(select_fields[x]);
    return false;

    }

    //alert(select_fields[x]);
  
  }

    $('#app_appeals_message').show();
    $('#app_appeals_message h3').html('')
    $('#app_appeals_message p').html('<?= img(array("src"=>"assets/images/waiting.gif","style"=>"vertical-align:text-bottom;"));?><span style="font-weight: bold; padding-left: 1em;font-size: 12px;">Please wait!</span>');
    $(':input').css('border-color',''); 
    $('label small').css('color','').html('');  
    $.post("<?= base_url() . 'account/savedata/app_appeals' ?>",  
    $(this).serialize(),
     function(result) {
        var data = result;
        var s =" ["+data+"]";
         var myObject = eval('(' + s + ')');
         for (i in myObject)
         {
             for (f in myObject[i] ){
                 if (f === 'info'){
                     if ((myObject[i][f])=== 'finished'){
                           $('#app_appeals_message').removeClass('info').addClass('success');
                           $('#app_appeals_message h3').html('Information saved');
                           $('#app_appeals_message p').html(' Your information has been saved in your profile. <button class=\'button fr btn_expandable\' frm_attr=\'app_appeals\' id= \'show_app_appeals\'>Show Details</button>' )
                           $('#app_appeals').hide(1000);
                           $('.btn_expandable').click(function(){
                          //This is to reset the expandable for button
                         if(jQuery.trim($(this).html())==jQuery.trim('Show Details'))
                         {
                         $(this).html('Hide Details');
                         }
                         else
                         {
                          $(this).html('Show Details');
                         }
                         var form=$(this).attr('frm_attr'); 
                         $('#'+form).slideToggle();
                         }); 
                         //Finish the expandable
                          // $('#app_appeals').hide(1000);
                     }
                     else if ((myObject[i][f])=== 'success'){
                           $('#app_appeals_message').removeClass('info').addClass(myObject[i][f]);
                           $('#app_appeals_message h3').html('Information saved');
                           $('#app_appeals_message p').html(' Your information has been saved in your profile.' )
                          // $('#app_appeals').hide(1000);
                     }
                     else if ((myObject[i][f])=== 'warning'){
                           $('#app_appeals_message').removeClass('info').addClass(myObject[i][f]);
                           $('#app_appeals_message h3').html('Oops!');
                           $('#app_appeals_message p').html(' An error occurred during form submission. Contact the administrator.')
                     }
                     else if ((myObject[i][f])=== 'error'){  
                           $('#app_appeals_message').removeClass('info').addClass(myObject[i][f]);
                           $('#app_appeals_message h3').html('Oops!');
                           $('#app_appeals_message p').html(' A problem occurred when creating your account. Please try again later.')
                     }
                 }
                 else{
                      // alert(f+' - '+myObject[i][f]);
                       $('#app_appeals_message').removeClass('info').addClass('error');
                       $('#app_appeals_message h3').html('Oops!');
                       $('#app_appeals_message p').html(' Correct the errors highlighted below..')
                       $('#form-'+f).css('border-color','red');
                       $("label[for='form-"+f+"'] small").css('color','red').html(myObject[i][f])

                 }
             }
         } 
    },"html");      
    e.preventDefault();
    return false;
});

$('select[name="STUD_COUNTY"]').change(function(e){
        $('select[name="CONST_C"]').html('');
        $(':input').css('border-color',''); 
        $('label small').css('color','');
        county_code = $('select[name="STUD_COUNTY"]').val();
        $.post("<?= base_url() . 'account/ajaxfetch/const/county_code/' ?>"+county_code,{},function(result) {
          var data = result;
          var s =" ["+data+"]";
          var myObject = eval('(' + s + ')');
         // $('select[name="CONST_C"]').html('<option value=" "></option>');
          for (i in myObject){
             for (f in myObject[i] ){
                   $('select[name="CONST_C"]').append('<option value="'+myObject[i][f].const_code+'">'+myObject[i][f].const_name+'</option>')            
             }
           }
        });
        //$('#div-others').hide();
        //$('#div-others').show();  
        $('#select[name="STUD_COUNTY"]').val(county_code);  
  });
</script>