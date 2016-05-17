<?php

class PartnersController extends UsersModuleController {

        public function init()
        {
                $this->resourceLabel = 'Patients';
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
				'actions'=>array('create','update','gotopartner'),
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
                $this->hasPrivilege(Acl::ACTION_CREATE);

                $model = new Patients;
                $this->pageTitle = Lang::t('Add ' . $this->resourceLabel);
                $model_class_name = $model->getClassName();

                if (isset($_POST[$model_class_name])) {
                        $model->attributes = $_POST[$model_class_name];
                        if ($model->save()) {
                                Yii::app()->user->setFlash('success', Lang::t('SUCCESS_MESSAGE'));
                                    $this->redirect(array('index'));
                        }
                }

                $this->render('create', array(
                    'model' => $model,
                ));
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

		if(isset($_POST['Patients']))
		{
			$model->attributes=$_POST['Patients'];
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
	// public function actionIndex()
	// {
	// 	$dataProvider=new CActiveDataProvider('Patients');
	// 	$this->render('index',array(
	// 		'dataProvider'=>$dataProvider,
	// 	));
	// }

	 public function actionIndex()
        {
                $this->hasPrivilege(Acl::ACTION_VIEW);
                $this->pageTitle = Lang::t($this->resourceLabel);
                $this->showPageTitle = TRUE;
                  $this->render('index', array(
                    'model' => Hcpartners::model()->searchModel(array(), $this->settings[Constants::KEY_PAGINATION], 'name'),
                ));
        }
         public function actionGotopartner($partnerid)
       {
                Acl::hasPrivilege($this->privileges, $this->resource, Acl::ACTION_VIEW);
                $model = Hcpartners::model()->loadModel($partnerid);
                $partnersContribution = new PartnersContribution;
                $this->pageTitle = $model->name;
                $this->showPageTitle = TRUE;
                $this->pageDescription = $model->name;

                $forbidden_resources = Acl::getForbiddenResources(UserLevels::LEVEL_ADMIN);
                $resources = UserResources::model()->getResources($forbidden_resources);
				//var_dump($resources);die();
			
				    //echo $symptomid;die();

                $this->render('view', array(
                    'model' => $model,
                    'resources' => $resources,
                    'partnersContribution' => $partnersContribution,
                ));
        }


	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Patients('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Patients']))
			$model->attributes=$_GET['Patients'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Patients the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Hcpartners::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Patients $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='patients-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
