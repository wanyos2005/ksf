<?php

/**
 * This is the model class for table "tbl_new_pledges".
 *
 * The followings are the available columns in table 'tbl_new_pledges':
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property integer $contact
 * @property string $region
 * @property string $occupation
 * @property integer $oldpledge
 * @property integer $amount_paid
 * @property integer $newpledge
 * @property integer $totalpldege
 * @property string $duration
 * @property string $onbehalf
 * @property string $date
 */

	class NewPledges extends ActiveRecord implements IMyActiveSearch {
	public $filterProperties;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_new_pledges';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, name, contact, region, occupation, oldpledge, amount_paid, newpledge, totalpldege, duration, onbehalf, date', 'required'),
			array('filterProperties','required'),
			array('contact, oldpledge, amount_paid, newpledge, totalpldege', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>50),
			array('name', 'length', 'max'=>200),
			array('region, occupation, duration, onbehalf', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			//array('id, code, name, contact, region, occupation, oldpledge, amount_paid, newpledge, totalpldege, duration, onbehalf, date', 'safe', 'on'=>'search'),
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
			'code' => 'Code',
			'name' => 'Name',
			'contact' => 'Contact',
			'region' => 'Region',
			'occupation' => 'Occupation',
			'oldpledge' => 'Oldpledge',
			'amount_paid' => 'Amount Paid',
			'newpledge' => 'Newpledge',
			'totalpldege' => 'Totalpldege',
			'duration' => 'Duration',
			'onbehalf' => 'Onbehalf',
			'date' => 'Date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	 public function searchParams()
        {
                return array(
                    array('name', self::SEARCH_FIELD, true, 'OR'),
                    array('id', self::SEARCH_FIELD, true, 'OR'),
                  //  'id',
                );
        }
	// public function search()
	// {
	// 	// @todo Please modify the following code to remove attributes that should not be searched.

	// 	$criteria=new CDbCriteria;

	// 	$criteria->compare('id',$this->id);
	// 	$criteria->compare('code',$this->code,true);
	// 	$criteria->compare('name',$this->name,true);
	// 	$criteria->compare('contact',$this->contact);
	// 	$criteria->compare('region',$this->region,true);
	// 	$criteria->compare('occupation',$this->occupation,true);
	// 	$criteria->compare('oldpledge',$this->oldpledge);
	// 	$criteria->compare('amount_paid',$this->amount_paid);
	// 	$criteria->compare('newpledge',$this->newpledge);
	// 	$criteria->compare('totalpldege',$this->totalpldege);
	// 	$criteria->compare('duration',$this->duration,true);
	// 	$criteria->compare('onbehalf',$this->onbehalf,true);
	// 	$criteria->compare('date',$this->date,true);

	// 	return new CActiveDataProvider($this, array(
	// 		'criteria'=>$criteria,
	// 	));
	// }

	/**


	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return NewPledges the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	 public function ClientSearch($filterProperties) {
    	
    	if($this->filterProperties){
          return $data = $this->model()->find('code=:filterProperties OR contact=:filterProperties',array(':filterProperties'=>$filterProperties));
		}
		
	}


}
