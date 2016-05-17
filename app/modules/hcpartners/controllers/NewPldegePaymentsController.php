<?php

class NewPldegePaymentsController extends UsersModuleController
{
	
	 public function init() {
        $this->resourceLabel = 'New Payments';
        $this->resource = UserResources::RES_USER_ROLES;
        $this->activeMenu = self::MENU_USER_ROLES;

        parent::init();
    }

	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	//public $layout='//layouts/column2';

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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','postpayment','postpayment2'),
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
		$model=new NewPldegePayments;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['NewPldegePayments']))
		{
			$model->attributes=$_POST['NewPldegePayments'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionPostpayment()
        {       
                $model=new NewPldegePayments;             
                $this->performAjaxValidation($model);  
                
                if(isset($_POST['NewPldegePayments']))
                {
                        $model->attributes=$_POST['NewPldegePayments'];
                        $valid=$model->validate();            
                        if($valid){
                          
                            
                            Yii::app()->end();
                            }
                            else{
                                $error = CActiveForm::validate($model);
                                if($error!='[]')
                                    echo $error;
                                Yii::app()->end();
                            }
               }
     
        }

        public function actionPostpayment2()
        {       
                $model=new NewPldegePayments;             
                $this->performAjaxValidation($model);  
                
                if(isset($_POST['NewPldegePayments']))
                {
                        $model->attributes=$_POST['NewPldegePayments'];
                        $valid=$model->validate();            
                        if($valid){
                                          
                            $model->newpledgeid=$_REQUEST['val'];
								 $model->year=date("Y");
								 $model->month=date("m"); 
								 $model->week=date("m"); 
								 $model->day=date("d");
								 $model->tarehe=date("Y-m-d");
								 $model->user=Yii::app()->user->id;
								 $model->save();
                             echo CJSON::encode(array(
                                  'status'=>'success'
                             ));
                             
                            Yii::app()->end();
                            }
                            else{
                                $error = CActiveForm::validate($model);
                                if($error!='[]')
                                    echo $error;
                                Yii::app()->end();
                            }
               }
     
        }
	public function actionPostpaymentold()
		{
		$model = new NewPldegePayments;


		
				$this->performAjaxValidation(array($model));						
							
							if(isset($_REQUEST['NewPldegePayments'])) {
								$model->attributes=$_REQUEST['NewPldegePayments'];
								
								//$val=$_REQUEST['NewPledges']['filterProperties'];
								 if ($model->validate()) {
								
								 $model->newpledgeid=$_REQUEST['val'];
								 $model->year=date("Y");
								 $model->month=date("m"); 
								 $model->week=date("m"); 
								 $model->day=date("d");
								 $model->tarehe=date("Y-m-d");
								 $model->user=Yii::app()->user->id;
								 $model->save(false);
								 

								 	#var_dump($model);die();
										//$this->redirect(array('index'));
									
									
								}else
								$this->render('_formme',array('model'=>$model));

							}

							
							
  	
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

		if(isset($_POST['NewPldegePayments']))
		{
			$model->attributes=$_POST['NewPldegePayments'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
	
	public function actionIndex() {
        $this->hasPrivilege(Acl::ACTION_VIEW);
        $this->pageTitle = Lang::t($this->resourceLabel);
        $this->showPageTitle = TRUE;
        $this->render('index', array(
            'model' => NewPldegePayments::model()->searchModel(array(), $this->settings[Constants::KEY_PAGINATION], 'fname'),
        ));
    }

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new NewPldegePayments('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['NewPldegePayments']))
			$model->attributes=$_GET['NewPldegePayments'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return NewPldegePayments the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=NewPldegePayments::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param NewPldegePayments $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='new-pldege-payments-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
