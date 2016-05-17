<?php

/**
 * This is the model class for table "{{const}}".
 *
 * The followings are the available columns in table '{{const}}':
 * @property integer $const_id
 * @property integer $const_code
 * @property string $const_name
 * @property string $county_code
 */
class Constituency extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Constituency the static model class
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
		return 'tbl_const';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('const_code, const_name, county_code', 'required'),
			array('const_code', 'numerical', 'integerOnly'=>true),
			array('const_name', 'length', 'max'=>30),
			array('county_code', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('const_id, const_code, const_name, county_code', 'safe', 'on'=>'search'),
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
			'const_id' => 'Const',
			'const_code' => 'Const Code',
			'const_name' => 'Const Name',
			'county_code' => 'County Code',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('const_id',$this->const_id);
		$criteria->compare('const_code',$this->const_code);
		$criteria->compare('const_name',$this->const_name,true);
		$criteria->compare('county_code',$this->county_code,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

private static $_constituencies=array();
		//Display all constituencies
	  public static function showconstituencies()
    {
        //if(!isset(self::$_items[$type]))
            self::loadconstituencies();
        return self::$_constituencies;
    }
	  public static function getconstituencies($const_code)
    {
        if(!isset(self::$_constituencies))
            self::load_constituencies();
        return isset(self::$_constituencies[$const_code]) ? self::$_constituencies[$const_code] : false;
    }
 
	  private static function loadconstituencies()
    {
        self::$_constituencies=array();
        $models=self::model()->findAll(array(
            'order'=>'const_code',
        ));
        foreach($models as $model)
            self::$_constituencies[$model->const_code]=$model->const_name;
    }
}
