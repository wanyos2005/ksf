<?php

class DefaultController extends Controller
{

		//const LOG_ACTIVITY = 'activity_log';
        //const LOG_LOGIN = 'login_log';
	 const LOG_LINK = 'import_csv';
	
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
				'actions'=>array('index','view','index2'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','index2','update','Updateimportedrecs' ,'MyCreate','totals','SearchPartner','CancelSearchPartner','ImportCSV','CreateByAjax','SearchPartner2','Karibu','admin','delete','Hccontributionreport','findHCnextcode'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to, perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','MyCreate','SearchPartner','Hccontributionreport','CreateByAjax','SearchPartner2'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	 public function actionIndex2()
        {
                //$this->hasPrivilege(Acl::ACTION_VIEW);
                $this->pageTitle = Lang::t($this->resourceLabel);
                $this->showPageTitle = TRUE;
                  $this->render('index2', array(
                    'model' => TblCsvimport::model()->searchModel(array(), $this->settings[Constants::KEY_PAGINATION], 'details'),
                ));
        }
	public function actionIndex()
	{
		$this->render('index');
	}

	 public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }
     public function actionImportCSV()
        {
           $model=new UserImportForm;
           $partnersContribution= new  PartnersContribution;

           
           //$log->insert()
   //echo 'hgggggggggg';die();
           if(isset($_POST['UserImportForm']))
             {
 
               $model->attributes=$_POST['UserImportForm'];

              // var_dump($_POST['UserImportForm']); die();
  
      $k=0;  

     #  $filen='E:\system\tmp\import'.date("Y-m-d").'.csv';   
      $filen='D:\xampp\tmp\import'.date("Y-m-d").'.csv';   
   $handle = fopen($filen, "r");
    if (false !== $handle) {
        fgetcsv($handle, 1000); // Skip header row
        while (false !== ($row = fgetcsv($handle, 1000))) {
            $sql = "insert into tbl_csvimport (receipt, date,details,amount) values (:receipt,:date,:details,:amount)";
        $parameters = array(":receipt"=>$row[0], ":date"=>$row[1],':details' => $row[2],':amount' => $row[3]);
        Yii::app()->db->createCommand($sql)->execute($parameters);

      $k++;
        $imported=true;
        }
        fclose($handle);

       // echo $k .'records inserted';  
        $partnersContribution->Updateimportedrecs();
    }           
/*
                $handle = fopen('E:\system\tmp\test.csv', "r");
    if (false !== $handle) {
        fgetcsv($handle, 1000); // Skip header row
        while (false !== ($row = fgetcsv($handle, 1000))) {
            $model->insert('tbl_csvimport', array(
                'name' => $row[0], 
                'age' => $row[1],
                'location' => $row[2],
            ));
          //  INSERT INTO tbl_csvimport VALUES ($row[0],$row[1],$row[2]);
        }
        fclose($handle);*/
    //}

           }
 
              /* if($model->validate())
                 {

                    */

        //             $csvFile= $model->file=CUploadedFile::getInstance($model,'file');
 
        //          # $csvFile=CUploadedFile::getInstance($model,'file');  
        //          // $tempLoc=$csvFile->getTempName();
        //           $tempLoc='E:\system\tmp\test.csv';
        //           #print_r($csvFile);die();
 
        //            // $sql="LOAD DATA LOCAL INFILE '".$tempLoc."'
                   
        //              $sql=" LOAD DATA INFILE '".$tempLoc."'
        // INTO TABLE `tbl_csvimport`
        // FIELDS
        //     TERMINATED BY ','
        //     ENCLOSED BY '\"'
        // LINES
        //     TERMINATED BY '\n'
        //  IGNORE 1 LINES
        // (`name`, `age`, `location`)
        // ";
 
        //             $connection=Yii::app()->db;
        //             $transaction=$connection->beginTransaction();
        //                 try
        //                     {
 
        //                         $connection->createCommand($sql)->execute();
        //                         $transaction->commit();
        //                     }
        //                     catch(Exception $e) // an exception is raised if a query fails
        //                      {
        //                         print_r($e);
        //                         exit;
        //                         $transaction->rollBack();
 
        //                      }
        //               $this->redirect(array("user/index"));
 
 
        //          }
        //      }  
 
           $this->render("importcsv",array('model'=>$model));
        }

	public function actionUpdateimportedrecs()
	{
		$model=new TblCsvimport;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		 $records=TblCsvimport::model()->findAll();
		 foreach ($records as $key => $record) {
		 	$hcPartners=new HcPartners;
		 	$partnersContribution = new PartnersContribution;
		 	# code...
		 	$phone=substr($record->details, 22,10);
		 	$amount = $record->amount;
			$amount = str_replace( ',', '', $amount );

		 	#find a member with this celphone

		 	if ($phone>0)
		 	 $hcPartners=$hcPartners->model()->find('phone=:phone' , array(':phone'=>$phone));
		 	 //print_r( $hcPartners);
		 	 if (!empty($hcPartners)) {
		 	 	$tarehe=substr($record->date, 5,4).':'.substr($record->date, 0,1).':'.substr($record->date, 2,2).':'.substr($record->date, 10);
		 	 	//echo $tarehe;
		 	 	# code...
		 	 	$partnersContribution->name= $hcPartners->name;
				$partnersContribution->code=$hcPartners->code;
				$partnersContribution->phone=$hcPartners->phone;
				$partnersContribution->amount=$amount;
				 $partnersContribution->year=substr($record->date, 5,4);
				$partnersContribution->month=substr($record->date, 0,1);
				$partnersContribution->week=substr($record->date, 2,2);
				$partnersContribution->day=substr($record->date, 2,2);
				$partnersContribution->user=Yii::app()->user->id;
			    $partnersContribution->created=$tarehe;
			    $partnersContribution->tarehe=substr($record->date, 5,4).':'.substr($record->date, 0,1).':'.substr($record->date, 2,2);
		#check if this person paid at exactly this time

			
			     $payrecexist=PartnersContribution::model()->find('created=:created' , array(':created'=>$tarehe));
		 		if(empty( $payrecexist))
					$partnersContribution->save();
					$key++;
		 	 }
		#empty the table holding imported records. This table should remain empty
		 	 TblCsvimport::model()->deleteAll('id=:id' , array(':id'=>$record->id));
		
		 }

		
	}

	public function actionMyCreate()
	{
		$model=new HcPartners;

		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);

		if(isset($_POST['HcPartners']))
		{
			$model->attributes=$_POST['HcPartners'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create_my',array(
			'model'=>$model,
		));
	}
	 public function actionReports() {
        
            $this->render('reports');
    }

	public function actionCreateByAjax()
	{
		$model=new HcPartners;

		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);

		if(isset($_POST['HcPartners']))
		{
		
			$model->attributes=$_POST['HcPartners'];
			$model->name=$_POST['name'];
			$model->code=$_POST['code1'];
				//print_r($model); die();
			if($model->save())
				$this->RenderPartial('//msgs/createdByAjaxMessage', array('id' => $model->id));
               
            else
            	echo CHtml::errorSummary($model);
            	 //$this->RenderPartial('//msgs/createdByAjaxFailureMessage', array('id' => $model->id));
           
				Yii :: app()->end();
		}
	}
public function actionSearchPartner()
	{

		$model=new HcPartners;
		unset($model);
//post phone		
		if($_POST['phone']){
		$phone= $_POST['phone'] ;
		}else{
		$phone= 0 ;
		}
//post code		
		if($_POST['code'])
		$code= $_POST['code'] ;
		else
		$code = 0;


Yii::app()->clientScript->scriptMap['jquery.js'] = false;		
$this-> RenderPartial ('_form_HC_contribution', array ('phone' => $phone,'code'=>$code), false, true);
Yii :: app()->end();
}

public function actionCancelSearchPartner()
	{

	
//var_dump('gggggggggggggggggggg');die();

Yii::app()->clientScript->scriptMap['jquery.js'] = false;

$this-> RenderPartial ('_searchpartner', null, true);
Yii :: app()->end();
}

public function actionSearchPartner2()
	{
	
		$model=new HcPartners;
//post phone		
		if($_POST['phone']){
		$phone= $_POST['phone'] ;
		}else{
		$phone= 0 ;
		}
//post code		
		if($_POST['code'])
		$code= $_POST['code'] ;
		else
		$code = 0;


		
$this-> RenderPartial ('_form2', array ('phone' => $phone,'code'=>$code), false, true);
Yii :: app()->end();
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

		if(isset($_POST['HcPartners']))
		{
			$model->attributes=$_POST['HcPartners'];
			//print_r($_POST['HcPartners']);die();
			if($model->save())
				//print_r($_POST['HcPartners']);die();
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
	 * Manages all models.
	 */
	 
	public function actionAdmin()
	{
		$model=new HcPartners('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['HcPartners']))
			$model->attributes=$_GET['HcPartners'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
public function actionHccontributionreport()
	{
		$model=new HcPartners('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['HcPartners']))
			$model->attributes=$_GET['HcPartners'];

		$this->render('hccontributionreport',array(
			'model'=>$model,
		));
	}

	public function actionTotals() {
        $totals = PartnersContribution::Jumlas();
        $this->render('totals', array('totals' => $totals));
    }

    public function actionFindHCnextcode()
    {
			$model = new HcPartners;
			$criteria=new CDbCriteria;
			$criteria->select='max(id) AS myid';
			$row = $model->model()->find($criteria);
			$k = $row['myid'];
			$k=$k+1;
			if($k<10){
				$h= "HC000".$k;
			}else{
				if($k>9 && $k<100){
					$h=  "HC00".$k;
					}else{
						if($k>99 && $k<1000){
						$h=  "HC0".$k;
					}else{
						$h=  "HC".$k;
					}
				}
			}
				//return $h;
			 echo CHtml::encode($h);

		}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=HcPartners::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='hc-partners-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
