<?php

/**
 * This is the model class for table "{{counties}}".
 *
 * The followings are the available columns in table '{{counties}}':
 * @property integer $county_id
 * @property integer $county_code
 * @property string $county_name
 */
class Counties extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Counties the static model class
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
		//return '{{counties}}';
		return 'tbl_counties';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('county_code, county_name', 'required'),
			array('county_code', 'numerical', 'integerOnly'=>true),
			array('county_name', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('county_id, county_code, county_name', 'safe', 'on'=>'search'),
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
			'county_id' => 'County',
			'county_code' => 'County Code',
			'county_name' => 'County Name',
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

		$criteria->compare('county_id',$this->county_id);
		$criteria->compare('county_code',$this->county_code);
		$criteria->compare('county_name',$this->county_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	
	private static $_counties=array();
		//Display all counties
	  public static function showcounties()
    {
        //if(!isset(self::$_items[$type]))
            self::loadcounties();
        return self::$_counties;
    }
	  public static function getcounties($county_code)
    {
        if(!isset(self::$_counties))
            self::load_counties();
        return isset(self::$_counties[$county_code]) ? self::$_counties[$county_code] : false;
    }
 
	  private static function loadcounties()
    {
        self::$_counties=array();
        $models=self::model()->findAll(array(
            'order'=>'county_code',
        ));
        foreach($models as $model)
            self::$_counties[$model->county_code]=$model->county_name;
    }
}
