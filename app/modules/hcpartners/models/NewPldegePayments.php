<?php

/**
 * This is the model class for table "tbl_new_pldege_payments".
 *
 * The followings are the available columns in table 'tbl_new_pldege_payments':
 * @property integer $id
 * @property integer $newpledgeid
 * @property integer $amount
 * @property integer $year
 * @property integer $month
 * @property integer $week
 * @property integer $day
 * @property string $tarehe
 * @property string $created
 * @property integer $user
 */
	class NewPldegePayments extends ActiveRecord implements IMyActiveSearch {

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_new_pldege_payments';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		#	array('newpledgeid, amount, year, month, week, day, tarehe, created, user', 'required'),
			array('amount', 'required'),
			array('newpledgeid, amount, year, month, week, day, user', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, newpledgeid, amount, year, month, week, day, tarehe, created, user', 'safe', 'on'=>'search'),
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
			'newpledgeid' => 'Newpledgeid',
			'amount' => 'Amount',
			'year' => 'Year',
			'month' => 'Month',
			'week' => 'Week',
			'day' => 'Day',
			'tarehe' => 'Tarehe',
			'created' => 'Created',
			'user' => 'User',
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
	/*public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('newpledgeid',$this->newpledgeid);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('year',$this->year);
		$criteria->compare('month',$this->month);
		$criteria->compare('week',$this->week);
		$criteria->compare('day',$this->day);
		$criteria->compare('tarehe',$this->tarehe,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('user',$this->user);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}*/
	 public function searchParams()
        {
                return array(
                    array('fname', self::newpledgeid, true, 'OR'),
                    array('id', self::SEARCH_FIELD, true, 'OR'),
                  //  'id',
                );
        }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return NewPldegePayments the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
