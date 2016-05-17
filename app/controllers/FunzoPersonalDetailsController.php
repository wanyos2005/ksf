<?php

class FunzoPersonalDetailsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/main';

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
				'actions'=>array('index','view','SearchStud','create','SaveStud'),
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

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new FunzoPersonalDetails;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['FunzoPersonalDetails']))
		{
			$model->attributes=$_POST['FunzoPersonalDetails'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->APP_ID));
		}
		
		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionSearchStud()
	{
		$model=new FunzoPersonalDetails;
		//$funzoUniversitydetails = new FunzoUniversitydetails;
		//$funzoMti = new FunzoMti;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['FunzoPersonalDetails']))
		{
			$model->attributes=$_POST['FunzoPersonalDetails'];
			//echo $model->IDNUMBER;
			$model = FunzoPersonalDetails::model()->find('IDNUMBER=:IDNUMBER',array(':IDNUMBER'=>$model->IDNUMBER));
 			
 			
	
		}

		//$this-> RenderPartial ('//msgs/FailureMessage', array ('data' =>'Record not saved....please try again'), false, true);
		

		/*$this->RenderPartial('create2',array(
			'model'=>$model,
		));*/
		if (empty($model)){
 				$model=new FunzoPersonalDetails;
 				echo 'ID Number not found in our database.';
 			}else{

 					$this->renderPartial('create2',array('model'=>$model),false,true);

 			}
		}


	public function actionSaveStud()
	{
		 if (isset($_REQUEST['idno']) && !empty($_REQUEST['idno'])) {
					$model = FunzoPersonalDetails::model()->find('IDNUMBER=:IDNUMBER',array(':IDNUMBER'=>$model->IDNUMBER));
 		
					$model=$this->loadModel($id);
		  }else
			$model=new FunzoPersonalDetails;

		$tblPastapplicants = new TblPastapplicants;
		//$funzoUniversitydetails = new FunzoUniversitydetails;
		//$funzoMti = new FunzoMti;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['FunzoPersonalDetails']))
		{
			$model->attributes=$_POST['FunzoPersonalDetails'];
			//echo $model->IDNUMBER;
			$tblPastapplicants->NAME=$model->FAST_NAME." ".$model->MIDDLE_NAME." ".$model->LAST_NAME;
			$tblPastapplicants->IDNO=$model->IDNUMBER;
			$tblPastapplicants->PINNO=$model->PINNO;

			if($tblPastapplicants->save())
 			$this-> RenderPartial ('//msgs/successAjaxMessage', array ('data' =>'Record saved'), false, true);
		else
			$this-> RenderPartial ('//msgs/FailureMessage', array ('data' =>'Record not saved....please try again'), false, true);
		
		}

		//$this-> RenderPartial ('//msgs/successAjaxMessage', array ('data' =>'Record saved'), false, true);
		

		/*$this->RenderPartial('_form2',array(
			'model'=>$model,
		));*/
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

		if(isset($_POST['FunzoPersonalDetails']))
		{
			$model->attributes=$_POST['FunzoPersonalDetails'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->APP_ID));
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
		$dataProvider=new CActiveDataProvider('FunzoPersonalDetails');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new FunzoPersonalDetails('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['FunzoPersonalDetails']))
			$model->attributes=$_GET['FunzoPersonalDetails'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return FunzoPersonalDetails the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=FunzoPersonalDetails::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param FunzoPersonalDetails $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='funzo-personal-details-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
