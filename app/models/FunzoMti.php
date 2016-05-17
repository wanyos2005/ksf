<?php

/**
 * This is the model class for table "funzo_mti".
 *
 * The followings are the available columns in table 'funzo_mti':
 * @property integer $ID
 * @property string $IDNO
 * @property integer $CATEGORY
 * @property integer $LEVEL_OF_STUDY
 * @property integer $YEAR_OF_STUDY
 * @property integer $COST_OF_PROGRAM
 * @property integer $CADRE
 * @property integer $APPLICANT_DETAILS
 * @property integer $GENDER
 * @property integer $COUNTY
 * @property integer $FATHER
 * @property integer $MOTHER
 * @property integer $GUARDIAN
 * @property integer $ACADEMIC_PROGRESS
 * @property integer $ORGANIZATION_SKILLS
 * @property integer $INTERPERSONAL_SKILLS
 * @property integer $TOTAL
 * @property string $DATE_POSTED
 * @property integer $AMOUNT_AWARDED
 * @property integer $AMOUNT_AWARDED_CUM
 * @property integer $PAID
 * @property string $DATE_PAID
 * @property integer $USER_PAID
 * @property integer $CONFIRMED
 * @property string $DATE_CONFIRMED
 * @property integer $USER_CONFIRMED
 */
class FunzoMti extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'funzo_mti';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID, CATEGORY, LEVEL_OF_STUDY, YEAR_OF_STUDY, COST_OF_PROGRAM, CADRE, APPLICANT_DETAILS, GENDER, COUNTY, FATHER, MOTHER, GUARDIAN, ACADEMIC_PROGRESS, ORGANIZATION_SKILLS, INTERPERSONAL_SKILLS, TOTAL, AMOUNT_AWARDED, AMOUNT_AWARDED_CUM, PAID, USER_PAID, CONFIRMED, USER_CONFIRMED', 'numerical', 'integerOnly'=>true),
			array('IDNO, DATE_POSTED', 'length', 'max'=>20),
			array('DATE_PAID, DATE_CONFIRMED', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, IDNO, CATEGORY, LEVEL_OF_STUDY, YEAR_OF_STUDY, COST_OF_PROGRAM, CADRE, APPLICANT_DETAILS, GENDER, COUNTY, FATHER, MOTHER, GUARDIAN, ACADEMIC_PROGRESS, ORGANIZATION_SKILLS, INTERPERSONAL_SKILLS, TOTAL, DATE_POSTED, AMOUNT_AWARDED, AMOUNT_AWARDED_CUM, PAID, DATE_PAID, USER_PAID, CONFIRMED, DATE_CONFIRMED, USER_CONFIRMED', 'safe', 'on'=>'search'),
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
			'ID' => 'ID',
			'IDNO' => 'Idno',
			'CATEGORY' => 'Category',
			'LEVEL_OF_STUDY' => 'Level Of Study',
			'YEAR_OF_STUDY' => 'Year Of Study',
			'COST_OF_PROGRAM' => 'Cost Of Program',
			'CADRE' => 'Cadre',
			'APPLICANT_DETAILS' => 'Applicant Details',
			'GENDER' => 'Gender',
			'COUNTY' => 'County',
			'FATHER' => 'Father',
			'MOTHER' => 'Mother',
			'GUARDIAN' => 'Guardian',
			'ACADEMIC_PROGRESS' => 'Academic Progress',
			'ORGANIZATION_SKILLS' => 'Organization Skills',
			'INTERPERSONAL_SKILLS' => 'Interpersonal Skills',
			'TOTAL' => 'Total',
			'DATE_POSTED' => 'Date Posted',
			'AMOUNT_AWARDED' => 'Amount Awarded',
			'AMOUNT_AWARDED_CUM' => 'Amount Awarded Cum',
			'PAID' => 'Paid',
			'DATE_PAID' => 'Date Paid',
			'USER_PAID' => 'User Paid',
			'CONFIRMED' => 'Confirmed',
			'DATE_CONFIRMED' => 'Date Confirmed',
			'USER_CONFIRMED' => 'User Confirmed',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('IDNO',$this->IDNO,true);
		$criteria->compare('CATEGORY',$this->CATEGORY);
		$criteria->compare('LEVEL_OF_STUDY',$this->LEVEL_OF_STUDY);
		$criteria->compare('YEAR_OF_STUDY',$this->YEAR_OF_STUDY);
		$criteria->compare('COST_OF_PROGRAM',$this->COST_OF_PROGRAM);
		$criteria->compare('CADRE',$this->CADRE);
		$criteria->compare('APPLICANT_DETAILS',$this->APPLICANT_DETAILS);
		$criteria->compare('GENDER',$this->GENDER);
		$criteria->compare('COUNTY',$this->COUNTY);
		$criteria->compare('FATHER',$this->FATHER);
		$criteria->compare('MOTHER',$this->MOTHER);
		$criteria->compare('GUARDIAN',$this->GUARDIAN);
		$criteria->compare('ACADEMIC_PROGRESS',$this->ACADEMIC_PROGRESS);
		$criteria->compare('ORGANIZATION_SKILLS',$this->ORGANIZATION_SKILLS);
		$criteria->compare('INTERPERSONAL_SKILLS',$this->INTERPERSONAL_SKILLS);
		$criteria->compare('TOTAL',$this->TOTAL);
		$criteria->compare('DATE_POSTED',$this->DATE_POSTED,true);
		$criteria->compare('AMOUNT_AWARDED',$this->AMOUNT_AWARDED);
		$criteria->compare('AMOUNT_AWARDED_CUM',$this->AMOUNT_AWARDED_CUM);
		$criteria->compare('PAID',$this->PAID);
		$criteria->compare('DATE_PAID',$this->DATE_PAID,true);
		$criteria->compare('USER_PAID',$this->USER_PAID);
		$criteria->compare('CONFIRMED',$this->CONFIRMED);
		$criteria->compare('DATE_CONFIRMED',$this->DATE_CONFIRMED,true);
		$criteria->compare('USER_CONFIRMED',$this->USER_CONFIRMED);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FunzoMti the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
