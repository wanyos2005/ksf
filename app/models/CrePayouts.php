<?php

/**
 * This is the model class for table "cre_payouts".
 *
 * The followings are the available columns in table 'cre_payouts':
 * @property integer $FSERIAL
 * @property string $IDFNAME
 * @property string $IDLNAME
 * @property string $IDMNAME
 * @property string $IDNO
 * @property string $ADMI_NO
 * @property string $UNCODE
 * @property string $CAMPUS_CODE
 * @property double $AWARD
 * @property string $PRINTDATE
 * @property string $PAYMENT_SUBSET
 * @property string $ACADEMIC_YEAR
 * @property integer $REF
 * @property string $DATE
 * @property integer $id_pri
 */

class CrePayouts extends CActiveRecord
{
	public $sum;

	//private $_oldTags;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cre_payouts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('DATE', 'required'),
			array('FSERIAL, REF', 'numerical', 'integerOnly'=>true),
			array('AWARD', 'numerical'),
			array('IDFNAME, IDLNAME, IDMNAME, CAMPUS_CODE, PAYMENT_SUBSET, ACADEMIC_YEAR', 'length', 'max'=>20),
			array('IDNO, PRINTDATE', 'length', 'max'=>11),
			array('ADMI_NO', 'length', 'max'=>50),
			array('UNCODE', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('FSERIAL, IDFNAME, IDLNAME, IDMNAME, IDNO, ADMI_NO, UNCODE, CAMPUS_CODE, AWARD, PRINTDATE, PAYMENT_SUBSET, ACADEMIC_YEAR, REF, DATE, id_pri', 'safe', 'on'=>'search'),
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
			'FSERIAL' => 'Fserial',
			'IDFNAME' => 'Idfname',
			'IDLNAME' => 'Idlname',
			'IDMNAME' => 'Idmname',
			'IDNO' => 'Idno',
			'ADMI_NO' => 'Admi No',
			'UNCODE' => 'Uncode',
			'CAMPUS_CODE' => 'Campus Code',
			'AWARD' => 'Award',
			'PRINTDATE' => 'Printdate',
			'PAYMENT_SUBSET' => 'Payment Subset',
			'ACADEMIC_YEAR' => 'Academic Year',
			'REF' => 'Ref',
			'DATE' => 'Date',
			'id_pri' => 'Id Pri',
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

		$criteria->compare('FSERIAL',$this->FSERIAL);
		$criteria->compare('IDFNAME',$this->IDFNAME,true);
		$criteria->compare('IDLNAME',$this->IDLNAME,true);
		$criteria->compare('IDMNAME',$this->IDMNAME,true);
		$criteria->compare('IDNO',$this->IDNO,true);
		$criteria->compare('ADMI_NO',$this->ADMI_NO,true);
		$criteria->compare('UNCODE',$this->UNCODE,true);
		$criteria->compare('CAMPUS_CODE',$this->CAMPUS_CODE,true);
		$criteria->compare('AWARD',$this->AWARD);
		$criteria->compare('PRINTDATE',$this->PRINTDATE,true);
		$criteria->compare('PAYMENT_SUBSET',$this->PAYMENT_SUBSET,true);
		$criteria->compare('ACADEMIC_YEAR',$this->ACADEMIC_YEAR,true);
		$criteria->compare('REF',$this->REF);
		$criteria->compare('DATE',$this->DATE,true);
		$criteria->compare('id_pri',$this->id_pri);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CrePayouts the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/*public function getdistinctpaydates($model)
	{

			//ref=20,21,22,23,26,30,35,50,51,52,60,61,62
			//ref=less than 10 and 40
		//return $models=self::model()->findAllByAttributes(array('REF'=>'22' array('REF'=>'22' || 'REF'=>'21'  ,'ACADEMIC_YEAR'=>$model->ACADEMIC_YEAR,'UNCODE'=>$model->UNCODE),array(
		return $models=self::model()->findAllByAttributes(array(),array(
		    'select'=>'t.PRINTDATE,SUM(AWARD) as sum',
		    'group'=>'t.PRINTDATE',
			'condition'=>'ACADEMIC_YEAR'==$model->ACADEMIC_YEAR && 'UNCODE'==$model->UNCODE && 'REF'==20 || 'REF'==21 || 'REF'==22 || 'REF'==23 || 'REF'==26 || 'REF'==30 || 'REF'==35 || 'REF'==50 || 'REF'==51 || 'REF'==52 || 'REF'==60 || 'REF'==61 || 'REF'==62,
		    'distinct'=>true,
		    'order'=>'t.id_pri'
		));

	}*/

	public function getdistinctpaydates($model)
	{

			//ref=20,21,22,23,26,30,35,50,51,52,60,61,62
			//ref=less than 10 and 40
		//return $models=self::model()->findAllByAttributes(array('REF'=>'22' array('REF'=>'22' || 'REF'=>'21'  ,'ACADEMIC_YEAR'=>$model->ACADEMIC_YEAR,'UNCODE'=>$model->UNCODE),array(
	//print_r($model->ACADEMIC_YEAR);die();

		$criteria = new CDbCriteria;
		$criteria->select='t.PRINTDATE,SUM(AWARD) as sum';
		//$criteria->condition='ACADEMIC_YEAR=:ACADEMIC_YEAR' && 'UNCODE=:UNCODE' && 'REF'==20 || 'REF'==21 || 'REF'==22 || 'REF'==23 || 'REF'==26 || 'REF'==30 || 'REF'==35 || 'REF'==50 || 'REF'==51 || 'REF'==52 || 'REF'==60 || 'REF'==61 || 'REF'==62;
		$criteria->condition='ACADEMIC_YEAR=:ACADEMIC_YEAR && UNCODE=:UNCODE && REF>10 && REF!=40';
		$criteria->params = array(':ACADEMIC_YEAR'=>$model->ACADEMIC_YEAR,':UNCODE'=>$model->UNCODE);
		$criteria->group = 't.PRINTDATE';
		$criteria->distinct = true;
		//$criteria->order = 't.id_pri desc';
		$criteria->order = 't.PRINTDATE desc';
//print_r($criteria);die();
		return self::model()->findAll($criteria);

	


	}

	public function getpaymentlist($date,$uni)
	{

			//ref=20,21,22,23,26,30,35,50,51,52,60,61,62
			//ref=less than 10 and 40
		
		$criteria = new CDbCriteria;
		$criteria->select='*';
		//$criteria->condition='ACADEMIC_YEAR=:ACADEMIC_YEAR' && 'UNCODE=:UNCODE' && 'REF'==20 || 'REF'==21 || 'REF'==22 || 'REF'==23 || 'REF'==26 || 'REF'==30 || 'REF'==35 || 'REF'==50 || 'REF'==51 || 'REF'==52 || 'REF'==60 || 'REF'==61 || 'REF'==62;
		$criteria->condition='PRINTDATE=:PRINTDATE && UNCODE=:UNCODE && REF>10 && REF!=40';
		$criteria->params = array(':PRINTDATE'=>$date,':UNCODE'=>$uni);
		//$criteria->group = 't.PRINTDATE';
		$criteria->order = 't.id_pri';
//print_r($criteria);die();
		return self::model()->findAll($criteria);


		
	}

	public function getdistinctsums($date)
    {
		$criteria = new CDbCriteria;
		$criteria->select='SUM(AWARD) as sum';
		$criteria->condition='PRINTDATE=:PRINTDATE';		
		$criteria->params = array(':PRINTDATE'=>$date);
		
		return self::model()->find($criteria);

			//return $data ;
    }


}
