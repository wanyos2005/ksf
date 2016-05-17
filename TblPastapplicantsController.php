<?php

class TblPastapplicantsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','SaveStud','PrintSubform','GeneratePdf'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	public function actionSaveStud()
	{
		$funzoUniversitydetails = new FunzoUniversitydetails;
		$model=new FunzoPersonalDetails;
		$tblPastapplicants = new TblPastapplicants;
		 if (isset($_REQUEST['idno']) && !empty($_REQUEST['idno'])) {
		 	$idno = $_REQUEST['idno'];

					$rec = TblPastapplicants::model()->find('IDNO=:IDNO',array(':IDNO'=>$idno));
 					if (!empty($rec)) 
						$tblPastapplicants=$this->loadModel($rec->ID);


					$rec2 = FunzoPersonalDetails::model()->find('IDNUMBER=:IDNUMBER',array(':IDNUMBER'=>$idno));
 					if (!empty($rec2)) 
						$model=$this->loadModel2($rec2->APP_ID);
		  }
			
		
		//$funzoUniversitydetails = new FunzoUniversitydetails;
		//$funzoMti = new FunzoMti;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);


		if(isset($_POST['FunzoUniversitydetails']))
		{
			$funzoUniversitydetails->attributes=$_POST['FunzoUniversitydetails'];

			
		}
		if(isset($_POST['TblPastapplicants']))
		{
			$tblPastapplicants->attributes=$_POST['TblPastapplicants'];
			//print_r('jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj');die();

			
		}

		if(isset($_POST['FunzoPersonalDetails']))
		{
			$model->attributes=$_POST['FunzoPersonalDetails'];
			//echo $model->IDNUMBER;
			$tblPastapplicants->NAME=$model->FAST_NAME." ".$model->MIDDLE_NAME." ".$model->LAST_NAME;
			$tblPastapplicants->IDNO=$model->IDNUMBER;
			$tblPastapplicants->PINNO=$model->PINNO;
			$tblPastapplicants->EMAIL_ADD=$model->EMAIL;
			$tblPastapplicants->TELNO=$model->PINNO;
			$tblPastapplicants->AMOUNT=$tblPastapplicants->AMOUNT;
			
			$tblPastapplicants->PRINTED=$funzoUniversitydetails->UNIVERSITY_CODE;
			$tblPastapplicants->POSTDATE=$funzoUniversitydetails->REG_NO;
			/*$tblPastapplicants->CONST_C=$tblPastapplicants->AMOUNT;
			$tblPastapplicants->YEAR_OF_STUDY=$model->PINNO;
			$tblPastapplicants->STUD_CATEGORY=$model->PINNO;
			$tblPastapplicants->STUD_COUNTY=$model->PINNO;
			$tblPastapplicants->BURSARY=$model->PINNO;
			$tblPastapplicants->ACADEMIC_YEAR=$model->PINNO;*/
			

			$model->save();

		if($tblPastapplicants->save())
 			$this-> RenderPartial ('//msgs/printSubform', array ('data' =>'Record saved','idno' =>$model->IDNUMBER), false, true);
		else
			$this-> RenderPartial ('//msgs/FailureMessage', array ('data' =>'Record not saved....please try again'), false, true);
		
		}

		//$this-> RenderPartial ('//msgs/successAjaxMessage', array ('data' =>'Record saved'), false, true);
		

		/*$this->RenderPartial('_form2',array(
			'model'=>$model,
		));*/
	}


	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new TblPastapplicants;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TblPastapplicants']))
		{
			$model->attributes=$_POST['TblPastapplicants'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}


	public function actionPrintSubform()
	{

		$funzoUniversitydetails = new FunzoUniversitydetails;
		$model=new FunzoPersonalDetails;
		$tblPastapplicants = new TblPastapplicants;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		 if (isset($_REQUEST['idno']) && !empty($_REQUEST['idno'])) {
		 	$idno = $_REQUEST['idno'];

					$rec = TblPastapplicants::model()->find('IDNO=:IDNO',array(':IDNO'=>$idno));
 					if (!empty($rec)) 
						$tblPastapplicants=$this->loadModel($rec->ID);


					$rec2 = FunzoPersonalDetails::model()->find('IDNUMBER=:IDNUMBER',array(':IDNUMBER'=>$idno));
 					if (!empty($rec2)) 
						$model=$this->loadModel2($rec2->APP_ID);
					//print_r('fgfgfgfgfgfgfgfgf');die();
		  }

//Prepare the pdf exporter
//$html2pdfPath = Yii::getPathOfAlias('extensions.tcpdf.tcpdf','P', 'cm', 'A4', true, 'UTF-8');
//$html2pdfPath = Yii::createComponent('extensions.tcpdf.tcpdf','P', 'cm', 'A4', true, 'UTF-8');
$html2pdfPath = Yii::createComponent('booster.tcpdf','P', 'cm', 'A4', true, 'UTF-8');


spl_autoload_unregister(array('YiiBase','autoload'));
//require_once("$html2pdfPath/config/lang/fra.php");
//require_once("$html2pdfPath/tcpdf.php");
$pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
spl_autoload_register(array('YiiBase','autoload'));
                
// set document information
$pdf->SetCreator(PDF_CREATOR);  
                
$pdf->SetTitle("title");                
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, "title", "subtitle");
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->SetFont('helvetica', '', 9);
$pdf->SetTextColor(80,80,80);
//$pdf->AddPage();
// protrait
//$pdf->addPage( 'P', 'LETTER' );

// landscape
$pdf->addPage( 'L', 'LETTER' );
                 
//Write the html from a Yii view

$html = Yii::app()->controller->renderPartial(('printsubform'), true,true);

//Convert the Html to a pdf document
$pdf->writeHTML($html, true, false, true, false, '');
                
// reset pointer to the last page
$pdf->lastPage();

//Close and output PDF document
$pdf->Output('filename.pdf', 'I');

		//  $this->render('printSubform',array('model'=>$model,'funzoUniversitydetails'=>$funzoUniversitydetails,'tblPastapplicants'=>$tblPastapplicants));

		  //0727910370
	}



	public function actionGeneratePdf() {

		

//Prepare the pdf exporter
//$html2pdfPath = Yii::getPathOfAlias('ext.tcpdf.tcpdf');
$html2pdfPath = Yii::createComponent('ext.tcpdf.TcPdf',
                            'P', 'cm', 'A4', true, 'UTF-8');
spl_autoload_unregister(array('YiiBase','autoload'));
//require_once("$html2pdfPath/config/lang/fra.php");
//require_once("$html2pdfPath/tcpdf.php");
$pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
spl_autoload_register(array('YiiBase','autoload'));
                
// set document information
$pdf->SetCreator(PDF_CREATOR);  
                
$pdf->SetTitle("title");                
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, "title", "subtitle");
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->SetFont('helvetica', '', 9);
$pdf->SetTextColor(80,80,80);
//$pdf->AddPage();
// protrait
//$pdf->addPage( 'P', 'LETTER' );

// landscape
$pdf->addPage( 'L', 'LETTER' );
                 
//Write the html from a Yii view

$html = Yii::app()->controller->renderPartial(('printSubform'), true,true);

//Convert the Html to a pdf document
$pdf->writeHTML($html, true, false, true, false, '');
                
// reset pointer to the last page
$pdf->lastPage();

//Close and output PDF document
$pdf->Output('filename.pdf', 'I');

}
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TblPastapplicants']))
		{
			$model->attributes=$_POST['TblPastapplicants'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('TblPastapplicants');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new TblPastapplicants('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TblPastapplicants']))
			$model->attributes=$_GET['TblPastapplicants'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return TblPastapplicants the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=TblPastapplicants::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function loadModel2($id)
	{
		$model=FunzoPersonalDetails::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param TblPastapplicants $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='tbl-pastapplicants-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
