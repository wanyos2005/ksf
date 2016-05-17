<?php

/**
 * This is the model class for table "funzo_universitydetails".
 *
 * The followings are the available columns in table 'funzo_universitydetails':
 * @property integer $UNIID
 * @property string $UNIVERSITY_CODE
 * @property string $DEPARTMENT
 * @property string $FACULTY
 * @property string $AREA_OF_STUDY
 * @property string $REG_NO
 * @property string $CURR_YEAR_OF_STUDY
 * @property string $DEGREE_QUALIFICATION
 * @property string $LEVEL_OF_STUDY
 * @property string $COURSE_AREA
 * @property string $APP_IDNOFK
 * @property string $YEAR_OF_ADM
 * @property string $DATE_POSTED
 * @property string $CAMPUS_NAME
 * @property string $LENGTH_OF_STUDY
 * @property string $CATEGORY
 * @property string $CADRE
 */
class FunzoUniversitydetails extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'funzo_universitydetails';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('UNIID', 'numerical', 'integerOnly'=>true),
			array('UNIVERSITY_CODE, CURR_YEAR_OF_STUDY, LEVEL_OF_STUDY, APP_IDNOFK, YEAR_OF_ADM, DATE_POSTED, LENGTH_OF_STUDY', 'length', 'max'=>20),
			array('DEPARTMENT, FACULTY, AREA_OF_STUDY, DEGREE_QUALIFICATION, CAMPUS_NAME, CADRE', 'length', 'max'=>200),
			array('REG_NO', 'length', 'max'=>100),
			array('COURSE_AREA', 'length', 'max'=>500),
			array('CATEGORY', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('UNIID, UNIVERSITY_CODE, DEPARTMENT, FACULTY, AREA_OF_STUDY, REG_NO, CURR_YEAR_OF_STUDY, DEGREE_QUALIFICATION, LEVEL_OF_STUDY, COURSE_AREA, APP_IDNOFK, YEAR_OF_ADM, DATE_POSTED, CAMPUS_NAME, LENGTH_OF_STUDY, CATEGORY, CADRE', 'safe', 'on'=>'search'),
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
			'UNIID' => 'Uniid',
			'UNIVERSITY_CODE' => 'University Code',
			'DEPARTMENT' => 'Department',
			'FACULTY' => 'Faculty',
			'AREA_OF_STUDY' => 'Area Of Study',
			'REG_NO' => 'Reg No',
			'CURR_YEAR_OF_STUDY' => 'Curr Year Of Study',
			'DEGREE_QUALIFICATION' => 'Degree Qualification',
			'LEVEL_OF_STUDY' => 'Level Of Study',
			'COURSE_AREA' => 'Course Area',
			'APP_IDNOFK' => 'App Idnofk',
			'YEAR_OF_ADM' => 'Year Of Adm',
			'DATE_POSTED' => 'Date Posted',
			'CAMPUS_NAME' => 'Campus Name',
			'LENGTH_OF_STUDY' => 'Length Of Study',
			'CATEGORY' => 'Category',
			'CADRE' => 'Cadre',
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

		$criteria->compare('UNIID',$this->UNIID);
		$criteria->compare('UNIVERSITY_CODE',$this->UNIVERSITY_CODE,true);
		$criteria->compare('DEPARTMENT',$this->DEPARTMENT,true);
		$criteria->compare('FACULTY',$this->FACULTY,true);
		$criteria->compare('AREA_OF_STUDY',$this->AREA_OF_STUDY,true);
		$criteria->compare('REG_NO',$this->REG_NO,true);
		$criteria->compare('CURR_YEAR_OF_STUDY',$this->CURR_YEAR_OF_STUDY,true);
		$criteria->compare('DEGREE_QUALIFICATION',$this->DEGREE_QUALIFICATION,true);
		$criteria->compare('LEVEL_OF_STUDY',$this->LEVEL_OF_STUDY,true);
		$criteria->compare('COURSE_AREA',$this->COURSE_AREA,true);
		$criteria->compare('APP_IDNOFK',$this->APP_IDNOFK,true);
		$criteria->compare('YEAR_OF_ADM',$this->YEAR_OF_ADM,true);
		$criteria->compare('DATE_POSTED',$this->DATE_POSTED,true);
		$criteria->compare('CAMPUS_NAME',$this->CAMPUS_NAME,true);
		$criteria->compare('LENGTH_OF_STUDY',$this->LENGTH_OF_STUDY,true);
		$criteria->compare('CATEGORY',$this->CATEGORY,true);
		$criteria->compare('CADRE',$this->CADRE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FunzoUniversitydetails the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
