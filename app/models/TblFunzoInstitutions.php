<?php

/**
 * This is the model class for table "tbl_funzo_institutions".
 *
 * The followings are the available columns in table 'tbl_funzo_institutions':
 * @property integer $MIS_CODE
 * @property string $MIS_SHT_DESC
 * @property string $MIS_NAME
 * @property string $MIS_CATEGORY
 * @property string $MIS_STATUS
 */
class TblFunzoInstitutions extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_funzo_institutions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('MIS_CODE', 'numerical', 'integerOnly'=>true),
			array('MIS_SHT_DESC, MIS_NAME, MIS_CATEGORY, MIS_STATUS', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('MIS_CODE, MIS_SHT_DESC, MIS_NAME, MIS_CATEGORY, MIS_STATUS', 'safe', 'on'=>'search'),
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
			'MIS_CODE' => 'Mis Code',
			'MIS_SHT_DESC' => 'Mis Sht Desc',
			'MIS_NAME' => 'Mis Name',
			'MIS_CATEGORY' => 'Mis Category',
			'MIS_STATUS' => 'Mis Status',
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
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('MIS_CODE',$this->MIS_CODE);
		$criteria->compare('MIS_SHT_DESC',$this->MIS_SHT_DESC,true);
		$criteria->compare('MIS_NAME',$this->MIS_NAME,true);
		$criteria->compare('MIS_CATEGORY',$this->MIS_CATEGORY,true);
		$criteria->compare('MIS_STATUS',$this->MIS_STATUS,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TblFunzoInstitutions the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	private static $_institutions=array();
		//Display all institutions
	  public static function showinstitutions()
    {
        //if(!isset(self::$_items[$type]))
            self::loadinstitutions();
        return self::$_institutions;
    }
	  public static function getinstitutions($MIS_CODE)
    {
        if(!isset(self::$_institutions))
            self::loadinstitutions();
        return isset(self::$_institutions[$MIS_CODE]) ? self::$_institutions[$MIS_CODE] : false;
    }
 
	  private static function loadinstitutions()
    {
        self::$_institutions=array();
        $models=self::model()->findAll(array(
            'order'=>'MIS_CODE',
        ));
        foreach($models as $model)
            self::$_institutions[$model->MIS_CODE]=$model->MIS_NAME;
    }

      Public function findinstitution($MIS_CODE)
    {
         $rec = self::model()->find('MIS_CODE=:MIS_CODE',array(':MIS_CODE'=>$MIS_CODE));

         if (!empty($rec)) 
         	 return $rec->MIS_NAME;
         	else
         		false;

 	
    }
   				
}
