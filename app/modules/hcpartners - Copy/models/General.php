<?php

/**
 * This is the model class for table "{{PERSONAL_INFORMATION}}".
 *
 * The followings are the available columns in table '{{PERSONAL_INFORMATION}}':
 * @property double $ID
 * @property string $FNAME
 * @property string $MNAME
 * @property string $LNAME
 * @property string $DOB
 * @property double $IDNO
 * @property string $PINNO
 * @property double $GENDER
 * @property double $CELLPHONE
 * @property double $OFFICETEL
 * @property double $DISABLED
 * @property double $EMPLOYED
 * @property string $EMAILADDRESS
 * @property double $MARITALSTATUS
 * @property string $POSTALADD
 * @property double $POSTALCODE
 * @property string $TOWN
 */
class GENERAL
{

public $myID;

public function nextID($model)
    {
	$model = new PERSONALINFORMATION;
	 
 		$criteria = new CDbCriteria;
		$records = $model->model()->findAll($criteria);
		foreach ($records as $record):
		$record->ID;
		
		endforeach;
		return $record->ID+1;
	
	}
	
	public function checkphoneexist($phone,$model)
    {
	$phone=substr($phone, 3);
		 $result = $model->model()->exists('(phone = :phone)',
                                array( ':phone'=>$phone)
                        );
		return $result;				
		/*$result=$model->model()->find('USER=:myUser', array(':myUser'=>Yii::app()->user->id));
		return $result;*/
	}
	public function findLoggesPK($model)
    {
		$result=$model->model()->find('LOGGED_USER=:myUser', array(':myUser'=>Yii::app()->user->id));
		
		return $result->ID;
		
		/*$datas=$model->model()->findAll('USER=:val', array(':val'=>Yii::app()->user->id));
				foreach($datas as $data):
					return $data->ID;
				endforeach;*/
	}

}