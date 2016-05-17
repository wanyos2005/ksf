<?php

/**
 * This is the model class for table "{{hc_partners}}".
 *
 * The followings are the available columns in table '{{hc_partners}}':
 * @property integer $id
 * @property string $code
 * @property integer $phone
 * @property string $church
 * @property string $county
 * @property integer $amountpledged
 * @property string $date
 * @property string $email
 */
 
class Hcpartners extends ActiveRecord implements IMyActiveSearch {

public $myid;

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return HcPartners the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_hc_partners';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('amountpledged', 'required'),
			array('phone, amountpledged', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>12),
			array('name', 'length','min'=>3, 'max'=>30),
			array('church, email', 'length', 'max'=>50),
			array('county', 'length', 'max'=>40),
			array('email', 'email'),
			array('id,' . self::SEARCH_FIELD, 'safe', 'on' => self::SCENARIO_SEARCH),
			//array('date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			//array('id, name, code, phone, church, county, amountpledged, date, email', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'code' => 'Code',
			'phone' => 'Phone',
			'church' => 'Church',
			'county' => 'County',
			'amountpledged' => 'Pledge',
			'date' => 'Date',
			'email' => 'Email',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	// public function search()
	// {
	// 	// Warning: Please modify the following code to remove attributes that
	// 	// should not be searched.

	// 	$criteria=new CDbCriteria;

	// 	$criteria->compare('id',$this->id);
	// 	$criteria->compare('code',$this->code,true);
	// 	$criteria->compare('phone',$this->phone, true);
	// 	$criteria->compare('name',$this->name, true);
	// 	$criteria->compare('church',$this->church,true);
	// 	$criteria->compare('county',$this->county,true);
	// 	$criteria->compare('amountpledged',$this->amountpledged);
	// 	$criteria->compare('date',$this->date,true);
	// 	$criteria->compare('email',$this->email,true);

	// 	return new CActiveDataProvider($this, array(
	// 		'criteria'=>$criteria,'pagination'=>array('pageSize'=>15),
	// 	));
	// }
	 public function searchParams()
        {
                return array(
                    array('name', self::SEARCH_FIELD, true, 'OR'),
                    array('phone', self::SEARCH_FIELD, true, 'OR'),  
                     array('code', self::SEARCH_FIELD, true, 'OR'),
                
                   array('id', self::SEARCH_FIELD, true, 'OR'),
                  //  'id',
                );
        }

	
	public static function findPartnersByPhone_Code($phone,$code)
    {
		$model=new HcPartners;
		$record=0;
		if($phone && $code){
        $record=$model->model()->find('phone=:phone AND code=:code' , array(':phone'=>$phone,':code'=>$code));
		}else{
			if($phone){
			 $record=$model->model()->find('phone=:phone' , array(':phone'=>$phone));
			}else{
					if($code){
			       $record=$model->model()->find('code=:code' , array(':code'=>$code));
					}
			}
		
		}
			
		
		if($record)
		return $record;
		
    }
	
	public function findHCnextcode()
    {
	$model = new HcPartners;
	$criteria=new CDbCriteria;
	$criteria->select='max(id) AS myid';
	$row = $model->model()->find($criteria);
	$k = $row['myid'];
	$k=$k+1;
	if($k<10){
		return "HC000".$k;
	}else{
		if($k>9 && $k<100){
			return "HC00".$k;
			}else{
				if($k>99 && $k<1000){
				return "HC0".$k;
			}else{
				return "HC".$k;
			}
		}
	}
}
	
public function week_number($date)

{

    return ceil( date( 'j', strtotime( $date ) ) / 7 );

}


public function findHcamountpledgebyCode($code)
    {
		$model=new HcPartners;
		
	    $record=$model->model()->find('code=:code' , array(':code'=>$code));
		if($record)
		return $record->amountpledged;
		else
		return 0;
		
    }
public function updateHcPartnercodes()
    {
		$criteria = new CDbCriteria;
		
		$records = self::model()->findAll($criteria);
		foreach ($records as $record):
		$k=$record->code;
		
//UPDATE THE PARTNERS CODES
				$criteria->condition = 'id=:id';
				$criteria->params = array(':id' => $record->id);	
				
				if($k<10){
						$val= "HC000".$k;
						self::model()->updateAll(array('code'=>$val), $criteria );
					}else{
						if($k>9 && $k<100){
							$val=  "HC00".$k;
						self::model()->updateAll(array('code'=>$val), $criteria );

							}else{
								if($k>99 && $k<1000){
								$val=  "HC0".$k;
								self::model()->updateAll(array('code'=>$val), $criteria );
							}else{
								$val=  "HC".$k;
								self::model()->updateAll(array('code'=>$val), $criteria );
							}
						}
					}
							
				//self::model()->updateAll(array('code'=>($record->month_total - $record->monthly_fee - Withdrawal::getclientwithdrawal($record->memberid,$record->year,$record->month)), 'new_' => 2 ), $criteria );
		endforeach;

	
	}

}