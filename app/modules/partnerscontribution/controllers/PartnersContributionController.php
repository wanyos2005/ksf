<?php

class PartnersContributionController extends Controller
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
				'actions'=>array('index','view','sms'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','CreateByAjax','Hccontributionreport','ClientSearch','GeneratePdfHCreport'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','CreateByAjax','Hccontributionreport'),
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
		$model=new PartnersContribution;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['PartnersContribution']))
		{
			$model->attributes=$_POST['PartnersContribution'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

/*public function actionCreateByAjax()
	{
		$model=new PartnersContribution;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['PartnersContribution']))
		{
			$model->attributes=$_POST['PartnersContribution'];
			if($model->save())
				$this-> RenderPartial ('createdByAjaxMessage', array ('id' => $model->id), false, true);
Yii :: app()->end();
		}

		
	}	
*/
public function actionCreateByAjax()
	{
		$model=new PartnersContribution;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['PartnersContribution']))
		{
		Yii::app()->clientScript->scriptMap['*.js'] = false;
			$model->attributes=$_POST['PartnersContribution'];
				$model->year=date('Y');
				$model->month=date('m');
				$model->week=date('Y');
				$model->day=date('d');
				$model->tarehe=date('Y-m-d');
				//$this->created=$this->update_time=time();
				$model->user=Yii::app()->user->id;
			if($model->save()){
				$this-> RenderPartial ('createdByAjaxMessage', array ('id' => $model->id));
Yii :: app()->end();
		  }	
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

		if(isset($_POST['PartnersContribution']))
		{
			$model->attributes=$_POST['PartnersContribution'];
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
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('PartnersContribution');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new PartnersContribution('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['PartnersContribution']))
			$model->attributes=$_GET['PartnersContribution'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	/*public function actionHccontributionreport()
	{
		$model=new PartnersContribution('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['PartnersContribution']))
			$model->attributes=$_GET['PartnersContribution'];

		$this->render('hccontributionreport',array(
			'model'=>$model,
		));
	}*/
	
 	
	public function actionHccontributionreport()
		{
							$model=new PartnersContribution;

							$criteria = new CDbCriteria;
							$q='';
							 $summery='';
							if(isset($_REQUEST['PartnersContribution']))
							{
							$model->attributes=$_REQUEST['PartnersContribution'];
								 $criteria->distinct = true;
									   // $criteria->with = array('user', 'user.site');
								$criteria->select = array(
												't.code',
												//'t.name',
												//'t.phone',
											 );
						
								$criteria->compare('id',$model->id);
								$criteria->compare('name',$model->name,true);
								$criteria->compare('code',$model->code,true);
								$criteria->compare('phone',$model->phone,true);
								$criteria->compare('amount',$model->amount);
								$criteria->compare('year',$model->year);
								$criteria->compare('month',$model->month);
								$criteria->compare('week',$model->week);
								$criteria->compare('day',$model->day);
								//$criteria->compare('day',$this->tarehe);
								$criteria->compare('created',$model->created);
								$criteria->compare('user',$model->user,true);
							
								
									$dataProvider=new CActiveDataProvider('PartnersContribution', array('criteria'=>$criteria,'pagination'=>array(
								'pageSize'=>1000,
							),
							));
								
								if(isset($_POST['pdf']))
											{
						  					return $model->hcreportpdf($dataProvider);
										}else{
											 if(isset($_POST['summery']))
												{
						  						 $summery=1;
												}else{
													 if(isset($_POST['general']))
														{
															$q=1;
														}
													
													 }
										}
								
							}else{
								$dataProvider='';
								$q='';
								
								}
						
							/*$dataProvider=new CActiveDataProvider('PartnersContribution', array('criteria'=>$criteria,'pagination'=>array(
								'pageSize'=>1000,
							),
							));*/
						
							/*$this->render('subjectmarkentry',array('model'=>$model2,
							  'dataProvider'=>$dataProvider,'q'=>$q,'subject'=>$subject,'year'=>$year,'term'=>$term,'exam'=>$exam
							));*/
							
							

							
							$this->render('searchclient',array('model'=>$model,
							  'dataProvider'=>$dataProvider,'q'=>$q,'s'=>$summery,'c'=>$model->count()
							  /*,'name'=>$model->name,'code'=>$model->code,'phone'=>$model->phone,'amount'=>$model->amount,'year'=>$model->year,'month'=>$model->month,'day'=>$model->day,'created'=>$model->created*/
							));
  	
	}

	
	public function actionSms()
	{
		$model=new PartnersContribution;
		$general= new General;
		$bulletin= new Bulletin;

		
		
	if(isset($_REQUEST['content']) )
	{
		
		$content=$_REQUEST['content'];
		//PARTNERS SMS
		if($content=="harvest"){
				if($general->checkphoneexist($_REQUEST['phone'],$model))
				{
				echo $model->partnerssmscontents($_REQUEST['phone']);
				}else{
					echo "Number not found";
					}
			
			}else{
			//BULLETIN
				if($content=="mbci"){
				echo $bulletin->bulletinsms();
				}else{
				//	
					//if($content=="mbci"){
					//echo $bulletin->bulletinsms();
					 //echo "Shalom,Due to last minute unavoidable security related matters, Garissa Mission has been postponed. Let's pray for peace restoration. Blessings. Apst.Kimani.";
					//}else{
						if($content=="deposit"){
					//echo $bulletin->bulletinsms();
					 echo "Acc Name:Harvest Cathedral; Acc No: Family Bank-Njoro Hse 019000028608; Equity Bank - Gate Hse-0130299485275; Pay Bill-Business No.807100, Acc no. Harvest C.";
					}else{
					echo "undefined keyword ". strtoupper($content);
					}
					}
				
				//}
			
			}
			
		}
		$querrylog= new Querrylog;
		$querrylog->phone=$_REQUEST['phone'];
		$querrylog->content=$content;
		$querrylog->year=date('Y');
		$querrylog->month=date('m');
		$querrylog->day=date('d');
		$querrylog->save();
		
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=PartnersContribution::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='partners-contribution-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
