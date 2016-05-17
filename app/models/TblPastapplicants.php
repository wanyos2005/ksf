<?php

/**
 * This is the model class for table "tbl_pastapplicants".
 *
 * The followings are the available columns in table 'tbl_pastapplicants':
 * @property integer $ID
 * @property string $NAME
 * @property string $IDNO
 * @property string $PINNO
 * @property string $EMAIL_ADD
 * @property string $TELNO
 * @property double $AMOUNT
 * @property integer $PRINTED
 * @property string $POSTDATE
 * @property integer $CONST_C
 * @property integer $YEAR_OF_STUDY
 * @property integer $STUD_CATEGORY
 * @property integer $STUD_COUNTY
 * @property string $BURSARY
 * @property string $ACADEMIC_YEAR
 */
class TblPastapplicants extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_pastapplicants';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NAME', 'required'),
			array('PRINTED, CONST_C, YEAR_OF_STUDY, STUD_CATEGORY, STUD_COUNTY', 'numerical', 'integerOnly'=>true),
			array('AMOUNT', 'numerical'),
			array('NAME', 'length', 'max'=>40),
			array('IDNO', 'length', 'max'=>11),
			array('PINNO, TELNO', 'length', 'max'=>30),
			array('EMAIL_ADD, POSTDATE', 'length', 'max'=>60),
			array('BURSARY', 'length', 'max'=>1),
			array('ACADEMIC_YEAR', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, NAME, IDNO, PINNO, EMAIL_ADD, TELNO, AMOUNT, PRINTED, POSTDATE, CONST_C, YEAR_OF_STUDY, STUD_CATEGORY, STUD_COUNTY, BURSARY, ACADEMIC_YEAR', 'safe', 'on'=>'search'),
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
			'NAME' => 'Name',
			'IDNO' => 'Idno',
			'PINNO' => 'Pinno',
			'EMAIL_ADD' => 'Email Add',
			'TELNO' => 'Telno',
			'AMOUNT' => 'Amount',
			'PRINTED' => 'Printed',
			'POSTDATE' => 'Postdate',
			'CONST_C' => 'Const C',
			'YEAR_OF_STUDY' => 'Year Of Study',
			'STUD_CATEGORY' => 'Stud Category',
			'STUD_COUNTY' => 'Stud County',
			'BURSARY' => 'Bursary',
			'ACADEMIC_YEAR' => 'Academic Year',
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
		$criteria->compare('NAME',$this->NAME,true);
		$criteria->compare('IDNO',$this->IDNO,true);
		$criteria->compare('PINNO',$this->PINNO,true);
		$criteria->compare('EMAIL_ADD',$this->EMAIL_ADD,true);
		$criteria->compare('TELNO',$this->TELNO,true);
		$criteria->compare('AMOUNT',$this->AMOUNT);
		$criteria->compare('PRINTED',$this->PRINTED);
		$criteria->compare('POSTDATE',$this->POSTDATE,true);
		$criteria->compare('CONST_C',$this->CONST_C);
		$criteria->compare('YEAR_OF_STUDY',$this->YEAR_OF_STUDY);
		$criteria->compare('STUD_CATEGORY',$this->STUD_CATEGORY);
		$criteria->compare('STUD_COUNTY',$this->STUD_COUNTY);
		$criteria->compare('BURSARY',$this->BURSARY,true);
		$criteria->compare('ACADEMIC_YEAR',$this->ACADEMIC_YEAR,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TblPastapplicants the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
