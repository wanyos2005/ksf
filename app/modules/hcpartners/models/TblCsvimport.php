<?php

/**
 * This is the model class for table "tbl_csvimport".
 *
 * The followings are the available columns in table 'tbl_csvimport':
 * @property integer $id
 * @property string $receipt
 * @property string $date
 * @property string $details
 * @property string $amount
 */
class TblCsvimport extends ActiveRecord implements IMyActiveSearch {


	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_csvimport';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('receipt, date, details, amount', 'required'),
			array('receipt', 'length', 'max'=>30),
			array('date', 'length', 'max'=>20),
			array('details', 'length', 'max'=>250),
			array('amount', 'length', 'max'=>11),
			array('id,' . self::SEARCH_FIELD, 'safe', 'on' => self::SCENARIO_SEARCH),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			//array('id, receipt, date, details, amount', 'safe', 'on'=>'search'),
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
			'receipt' => 'Receipt',
			'date' => 'Date',
			'details' => 'Details',
			'amount' => 'Amount',
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
	// public function search()
	// {
	// 	// @todo Please modify the following code to remove attributes that should not be searched.

	// 	$criteria=new CDbCriteria;

	// 	$criteria->compare('id',$this->id);
	// 	$criteria->compare('receipt',$this->receipt,true);
	// 	$criteria->compare('date',$this->date,true);
	// 	$criteria->compare('details',$this->details,true);
	// 	$criteria->compare('amount',$this->amount,true);

	// 	return new CActiveDataProvider($this, array(
	// 		'criteria'=>$criteria,
	// 	));
	// }
	 public function searchParams()
        {
                return array(
                    array('details', self::SEARCH_FIELD, true, 'OR'),
                    array('amount', self::SEARCH_FIELD, true, 'OR'),
                   array('id', self::SEARCH_FIELD, true, 'OR'),
                  //  'id',
                );
        }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TblCsvimport the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
