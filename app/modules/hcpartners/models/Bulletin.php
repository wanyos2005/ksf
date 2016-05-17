<?php

/**
 * This is the model class for table "{{bulletin}}".
 *
 * The followings are the available columns in table '{{bulletin}}':
 * @property integer $id
 * @property integer $event_priority
 * @property string $name
 * @property string $start_date
 * @property string $end_date
 * @property integer $logged_user
 */
class Bulletin extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Bulletin the static model class
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
		return 'tbl_bulletin';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('event_priority, name, start_date, end_date', 'required'),
			array('event_priority, logged_user', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>300),
			array('start_date, end_date', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, event_priority, name, start_date, end_date, logged_user', 'safe', 'on'=>'search'),
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
			'event_priority' => 'Event Priority',
			'name' => 'Content',
			'start_date' => 'Start Date',
			'end_date' => 'End Date',
			'logged_user' => 'Logged User',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('event_priority',$this->event_priority);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('end_date',$this->end_date,true);
		$criteria->compare('logged_user',$this->logged_user);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function bulletinsms()
    {
		$model=new Bulletin;
	    $records=$model->model()->findAll();
		foreach ($records as $record):
		$total=$total+$record->name;		
		endforeach;
	
		return $record->name;
		
    }
}