<?php

/**
 * This is the model class for table "{{partners_contribution}}".
 *
 * The followings are the available columns in table '{{partners_contribution}}':
 * @property integer $id
 * @property string $name
 * @property string $code
 * @property string $phone
 * @property integer $amount
 * @property integer $year
 * @property integer $month
 * @property integer $week
 * @property integer $day
 * @property integer $created
 * @property string $user
 */
class PartnersContribution extends CActiveRecord
{
	public $mytotal;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PartnersContribution the static model class
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
		return 'tbl_partners_contribution';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, code, phone, amount', 'required'),
			array('amount, year, month, week, day, created', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>20),
			array('code', 'length', 'max'=>12),
			array('phone', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, code, phone, amount, year, month, week, tarehe, day, created, user', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'code' => 'Code',
			'phone' => 'Phone',
			'amount' => 'Amount',
			'year' => 'Year',
			'month' => 'Month',
			'week' => 'Week',
			'day' => 'Day',
			'created' => 'Created',
			'user' => 'User',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('year',$this->year,true);
		$criteria->compare('month',$this->month,true);
		$criteria->compare('week',$this->week);
		$criteria->compare('day',$this->day,true);
		$criteria->compare('day',$this->tarehe);
		$criteria->compare('created',$this->created);
		$criteria->compare('user',$this->user,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria, 'pagination'=>array('pageSize'=>$this->count()),
		));
	}

public function searchDistinct()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
		 $criteria->distinct = true;
               // $criteria->with = array('user', 'user.site');
                $criteria->select = array(
                        't.code',
                      	//'t.name',
						//'t.phone',
                     );

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('year',$this->year);
		$criteria->compare('month',$this->month);
		$criteria->compare('week',$this->week);
		$criteria->compare('day',$this->day);
		//$criteria->compare('day',$this->tarehe);
		$criteria->compare('created',$this->created);
		$criteria->compare('user',$this->user,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria, 'pagination'=>array('pageSize'=>$this->count()),
		));
	}
	
		public function search2($code)
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('code',$code,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('year',$this->year);
		$criteria->compare('month',$this->month);
		$criteria->compare('week',$this->week);
		$criteria->compare('day',$this->day);
		$criteria->compare('created',$this->created);
		$criteria->compare('user',$this->user,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria, 'pagination'=>array('pageSize'=>$this->count()),
		));
	}

/*protected function beforeSave()
	{
		if(parent::beforeSave())
		{
			if($this->isNewRecord)
			{
				$this->year=date('Y');
				$this->month=date('m');
				$this->week=date('Y');
				$this->day=date('d');
				$this->tarehe=date('Y-m-d');
				//$this->created=$this->update_time=time();
				$this->user=Yii::app()->user->id;
			}
			else
        $this->tarehe=date('Y-m-d');
			return true;
		}
		else
			return false;
	}
*/	
public function findHcamountpaidbyCode($code)
    {
		$model=new PartnersContribution;
		$total=0;
	    $records=$model->model()->findAll('code=:code' , array(':code'=>$code));
		//if($record)
		foreach ($records as $record):
		$total=$total+$record->amount;		
		endforeach;

		return $total;
		
    }

public function findRunningtotal($value)
    {
	$val =$vlaue;

		return $val;
		
    }
public function updatePertnserContributionPartnercodes()
    {
		$criteria = new CDbCriteria;
		
		$records = self::model()->findAll($criteria);
		foreach ($records as $record):
		$k=$record->code;
		$val='';
		
//UPDATE THE PARTNERS CODES
				$criteria->condition = 'id=:id';
				$criteria->params = array(':id' => $record->id);	
				
				if($k<10){
						$val= "HC000".$k;
						self::model()->updateAll(array('code'=>$val,'tarehe'=>"2012-08-01",'year'=>2012,'month'=>8,'week'=>1,'day'=>1), $criteria );
					}else{
						if($k>9 && $k<100){
							$val=  "HC00".$k;
						self::model()->updateAll(array('code'=>$val,'tarehe'=>"2012-08-01",'year'=>2012,'month'=>8,'week'=>1,'day'=>1), $criteria );

							}else{
								if($k>99 && $k<1000){
								$val=  "HC0".$k;
								self::model()->updateAll(array('code'=>$val,'tarehe'=>"2012-08-01",'year'=>2012,'month'=>8,'week'=>1,'day'=>1), $criteria );
							}else{
								$val=  "HC".$k;
								self::model()->updateAll(array('code'=>$val,'tarehe'=>"2012-08-01",'year'=>2012,'month'=>8,'week'=>1,'day'=>1), $criteria );
							}
						}
					}
							
				//self::model()->updateAll(array('code'=>($record->month_total - $record->monthly_fee - Withdrawal::getclientwithdrawal($record->memberid,$record->year,$record->month)), 'new_' => 2 ), $criteria );
		endforeach;

	
	}
	
	public function findHcRunningTotalByCode($code,$amount)
    {
		if(empty($_SESSION['lastcode'])){
			$_SESSION['lastcode']=$code;
			$_SESSION['amount']=$amount;
			}else{
				if($_SESSION['lastcode']===$code){
					$_SESSION['lastcode']=11;
					
					}else{
						$_SESSION['lastcode']=$code;
					}
			}
		$j=$code;
		$i=0;
		$model=new PartnersContribution;
		$total=0;
	    $records=$model->model()->findAll('code=:code' , array(':code'=>$code));
		//if($record)
		foreach ($records as $record):
		$total=$total+$record->amount;		
		endforeach;

		return $_SESSION['amount'];
		
    }
	
	public function partnerssmscontents($phone)
    {
		$phone=substr($phone, 3);
		$hcPartners=new HcPartners;
		$model=new PartnersContribution;
		$total=0;
	    $records=$model->model()->findAll('phone=:phone' , array(':phone'=>$phone));
		foreach ($records as $record):
		$total=$total+$record->amount;		
		endforeach;
		$bal=$hcPartners->findHcamountpledgebyCode($record->code)-$total;
		return strtoupper($record->name)."; "."ACC:".$record->code."; "."PLEDGE:".number_format($hcPartners->findHcamountpledgebyCode($record->code))."¬"."PAID:".number_format($total)."; "."BAL:".number_format($bal)."; Thank u for investing in the Historic and Glorious Sanctuary for our God.";
		
	
		
    }
	
public function hcreportpdf($dataProvider) {

			
//Prepare the pdf exporter
//$html2pdfPath = Yii::getPathOfAlias('ext.tcpdf.tcpdf');
$html2pdfPath = Yii::createComponent('ext.tcpdf.TcPdf',
                            'P', 'cm', 'A4', true, 'UTF-8');
spl_autoload_unregister(array('YiiBase','autoload'));
//require_once("$html2pdfPath/config/lang/fra.php");
//require_once("$html2pdfPath/tcpdf.php");
$pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
spl_autoload_register(array('YiiBase','autoload'));
                
// set document information
$pdf->SetCreator(PDF_CREATOR);  
                
$pdf->SetTitle("title");                
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, "title", "subtitle");
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->SetFont('helvetica', '', 9);
$pdf->SetTextColor(80,80,80);
$pdf->AddPage();
                 
//Write the html from a Yii view

$html = Yii::app()->controller->renderPartial(('hcreportpdf1'),array ('dataProvider'=>$dataProvider) ,true);

//Convert the Html to a pdf document
$pdf->writeHTML($html, true, false, true, false, '');
                
// reset pointer to the last page
$pdf->lastPage();

//Close and output PDF document
$pdf->Output('filename.pdf', 'I');

}
	
	



	
}