
<?php
/* @var $this FunzoPersonalDetailsController */
/* @var $model FunzoPersonalDetails */
/* @var $form CActiveForm 13490500*/

	$model=new FunzoPersonalDetails;
 if (isset($_REQUEST['idno']) && !empty($_REQUEST['idno'])) {
		 	$idno = $_REQUEST['idno'];
		 	$model->IDNUMBER=$idno;
		 	}else{
		 		$idno='';
		 	}
	

if (!empty($model->IDNUMBER)) {
		$funzoUniversitydetails = FunzoUniversitydetails::model()->find('APP_IDNOFK=:APP_IDNOFK',array(':APP_IDNOFK'=>$model->IDNUMBER));
	 	$funzoMti = FunzoMti::model()->find('IDNO=:IDNO',array(':IDNO'=>$model->IDNUMBER));
	 	$tblPastapplicants = TblPastapplicants::model()->find('IDNO=:IDNO',array(':IDNO'=>$model->IDNUMBER));
	 	$idno=$model->IDNUMBER;
} 

if (empty($funzoUniversitydetails)) {
		$funzoUniversitydetails = new FunzoUniversitydetails;
}
if (empty($funzoMti)) {
 	$funzoMti = new FunzoMti;
 	} 
if (empty($tblPastapplicants)) {
 	$tblPastapplicants = new TblPastapplicants;
 	} 
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'funzo-personal-details-form2',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>
<div><? $this-> RenderPartial ('print_header', array ('data' =>'No Header file'), false, true);?></div>

<table border="1"  style="font-size: 10px">
	
	<tr>
		<td>
			Name
			</td>
		<td colspan="2">
			<?php echo $model->FAST_NAME ." ".$model->MIDDLE_NAME." ".$model->LAST_NAME; ?>
		
		</td>
		
	</tr>

	<tr>
		<td>
			IDNO & Reg No
			</td>
		<td colspan="2">
			<?php echo $model->IDNUMBER."  - ".$funzoUniversitydetails->REG_NO ;?>
		
		</td>
		
	</tr>


	<tr>
		<td>
			College
			</td>
		<td colspan="2">
			<?php echo $funzoUniversitydetails->UNIVERSITY_CODE ;?>
		
		</td>
		
	</tr>
<tr>
		<td>
			EMAIL 
			</td>
		<td colspan="2">
			<?php echo $model->EMAIL;?>
		
		</td>
		
	</tr>
	<tr>
		<td>
			TELEPHONE 
			</td>
		<td colspan="2">
			<?php echo $model->TEL_NUMBER;?>
		
		</td>
		
	</tr>
		<tr>
		<td>
			Amount you are applying For (Ksh)  
			</td>
		<td colspan="2">
			<?php echo $tblPastapplicants->AMOUNT?>
		
		</td>
		
	</tr>
	
		
</table>

 <fieldset class="fieldset" style="font-size: 10px"><legend class="legend">Part A. Dean of Students Certification (Name , Signature & Stamp)</legend>           
        I certify this is a bonafide student of this University. <br /><br />

        Name .......................................................................................... Signature ..........................................  Date <strong><?= date('d-M-Y') ?></strong><br /></fieldset>

</fieldset>

 <br />
    <fieldset class='fieldset' style="font-size: 8.5px;">
        <legend class='legend'>Part B: Agreement</legend>
        <br /><strong> Certify as follows: </strong> <br /> 
        I understand that this is a loan which MUST be repaid and do hereby bind myself to repay to the order of the Board all sums disbursed 
        to me (hereinafter called;the loan) together with the interest thereon and any other charges that may become due and payable 
        under terms and conditions set hereinafter. I understand that acceptance of any disbursement issued to me at anytime will signify 
        obligation to repay the loan and I shall abide by all the obligations as bestowed upon me by the Higher Education Loans board 
        Act CAP 213A. The Higher Education Loans Board, hereinafter called the Board shall refer to the current Board and it's successors 
        and assigns. <br />
        <strong>Terms and conditions </strong><br />
        <ol >
            <li> The rate of interest applicable shall be 4% per annum. The Board shall have the sole discretion of varying the
                interest rate as circumstances shall demand.
            <li>  The Board shall charge administrative fees of Kshs.500 per annum on all un-matured accounts. All  mature loan accounts shall 
                be subject to administrative fee as shall be determined by the Board from time to time. 
            <li>  In the event that the loanee discontinues 
                studies for whatever reason before full disbursement is made, the Board shall not disburse the  remaining allocation and shall 
                recall the loan so far as advanced in full together with the interest thereon. 
            <li>  The Board shall electronically, through the website, send to each loanee annual statement indicating the amount disbursed 
                per each academic year or the outstanding balance as the case may be. The sums of the amount indicated in the statements shall 
                form the principal loan to be recovered from the loanee. The contents of the statements shall be deemed to be correct unless 
                a written complaint to the contrary is received by the Board within three (3) months from the date of the statement whereupon 
                the Board shall either confirm the complaint or advise as the case may be. A statement may be furnished at any time on request 
                but at the loanee’s expense.
            <li> . Where it is discovered that a loan was granted due to false information furnished by the loanee, 
                the Board shall withhold release of the amount yet to be disbursed if any, besides subjecting the loanee to prosecution. 
            <li>  
                The Board shall engage agents  (Banks) who shall be responsible for the disbursement of the loans as shall be advised by the 
                Board from time to time. 
            <li>   The loan shall be due for repayment one year after completion of the course studied or within such a period as the
                Board may decide to recall the loan whichever is earlier.
            <li>   The loanee shall keep the guarantor appraised of the principal loan awarded and in the event that there is a
                conflict, the amount as held by the Board will prevail.
            <li>  If the loanee defaults in the repayment of the loan when the loan is due, the whole amount shall be due and payable and 
                the loanee shall be bound to pay other charges that may arise as result of the default including but not limited to the Advocates 
                fee, penalties and other incidental costs. 
            <li>  If the loanee defaults and as deemed necessary by the Board, the guarantor shall be bound and required to repay 
                the loan, interest thereon, penalties, costs and any other charges accruing due to the default. 
            <li>  The loan shall be 
                repaid by monthly installments or by any other convenient mode of repayment as shall be directed 
                by the Board subject to the provisions of the Higher Education Loans Board Act. 
            <li>   The Board shall charge a penalty of Kshs.5,000 per month on any account that is in default.
            <li>   Non demand for loan repayment and the accruing charges shall not in any way signify waiver of any amount
                rightfully due under the terms and conditions of theloan. Accordingly, non demand shall not be cited as reason for
                non-repayment
            <li>   The applicant hereby consents that the Board shall share information pertaining to the loan account with credit
                reference bureaus or any other parties as deemed necessary.
            <li>  The Board shall effect credit protection arrangement of the loan at the expense of the loanee. 
            <li>  In the event that 
                the applicant receives additional financial assistance from any other source and the need for 
                refund by the university arises, such refund shall be made to the Board and the same shall be utilized towards reducing 
                or offsetting the loan. 
            <li>   No loan shall be disbursed unless this agreement is signed.
            <li>   The signature of the loanee shall certify the reading, understanding and being in agreement with the terms and
                conditions herein including certification.
        </ol>
        <table style="width: 98%;margin-top: 0px; font-size: 10px;"><tr><td>                 
                    Loanee's Signature </td><td style="width: 20%;">Authorized Signature(HELB) 
                </td><td style="text-align: left;border-bottom: 1px solid black;"><img src="../images/masinde.png" align='left' height="40px" /></td><td>Date: <?= date('d-M-Y') ?></td></tr>
            <tr><td>.................................................</td><td colspan="2">(FOR: BOARD SECRETARY/CEO )  </td></tr></table>
    </fieldset>
	
<?php $this->endWidget(); ?>