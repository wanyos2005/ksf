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
* @property integer $transactionno
 * @property integer $notes
 * @property integer $created
 * @property string $user
 */
class PartnersContribution extends CActiveRecord {
 
    public $mytotal;
 
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return PartnersContribution the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
 
    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_partners_contribution';
    }
 
    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name, code, phone, amount', 'required'),
            array('year, month, week, day', 'numerical', 'integerOnly' => true),
            array('name', 'length', 'max' => 40),
            array('code', 'length', 'max' => 12),
            array('phone', 'length', 'max' => 15),
           array('transactionno', 'length', 'max' => 50),
            array('notes', 'length', 'max' => 250),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, name, code, phone, amount, year, month, week, tarehe, day, created, user', 'safe', 'on' => 'search'),
        );
    }
 
    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }
 
    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'name' => 'Name',
            'code' => 'Code',
            'phone' => 'Phone',
            'amount' => 'Amount Paid',
            'transactiono' => 'Transaction no.',
            'notes' => 'Notes',

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
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.
 
        $criteria = new CDbCriteria;
 
        $criteria->compare('id', $this->id);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('code', $this->code, true);
        $criteria->compare('phone', $this->phone, true);
        $criteria->compare('amount', $this->amount);
        $criteria->compare('year', $this->year, true);
        $criteria->compare('month', $this->month, true);
        $criteria->compare('week', $this->week);
        $criteria->compare('day', $this->day, true);
        $criteria->compare('day', $this->tarehe);
        $criteria->compare('created', $this->created);
        $criteria->compare('user', $this->user, true);
 
        return new CActiveDataProvider($this, array(
           // 'criteria' => $criteria, 'pagination' => array('pageSize' => $this->count()),
     'criteria' => $criteria, 'pagination' => array('pageSize' => 15),
        ));
    }
 
    public function searchDistinct() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.
 
        $criteria = new CDbCriteria;
        $criteria->distinct = true;
        // $criteria->with = array('user', 'user.site');
        $criteria->select = array(
            't.code',
                //'t.name',
                //'t.phone',
        );
 
        $criteria->compare('id', $this->id);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('code', $this->code, true);
        $criteria->compare('phone', $this->phone, true);
        $criteria->compare('amount', $this->amount);
        $criteria->compare('year', $this->year);
        $criteria->compare('month', $this->month);
        $criteria->compare('week', $this->week);
        $criteria->compare('day', $this->day);
        //$criteria->compare('day',$this->tarehe);
        $criteria->compare('created', $this->created);
        $criteria->compare('user', $this->user, true);
 
        return new CActiveDataProvider($this, array(
            'criteria' => $criteria, 'pagination' => array('pageSize' => $this->count()),
        ));
    }
 
    public function search2($code) {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.
 
        $criteria = new CDbCriteria;
 
        $criteria->compare('id', $this->id);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('code', $code, true);
        $criteria->compare('phone', $this->phone, true);
        $criteria->compare('amount', $this->amount);
        $criteria->compare('year', $this->year);
        $criteria->compare('month', $this->month);
        $criteria->compare('week', $this->week);
        $criteria->compare('day', $this->day);
        $criteria->compare('created', $this->created);
        $criteria->compare('user', $this->user, true);
 
        return new CActiveDataProvider($this, array(
            'criteria' => $criteria, 'pagination' => array('pageSize' => $this->count()),
        ));
    }
 
    /* protected function beforeSave()
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
 
    public static function amountPaid($code) {
        $records = PartnersContribution::model()->findAll('code=:cd', array(':cd' => $code));
 
        $total = 0;
        foreach ($records as $record)
            $total = $total + $record->amount;
 
        return "$total";
    }
#Insert into memberscontribution  all imported payment records
/**    public function Updateimportedrecs() {


        $model=new TblCsvimport;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

         $records=TblCsvimport::model()->findAll();
         foreach ($records as $key => $record) {

             
            $hcPartners=new HcPartners;
            $partnersContribution = new PartnersContribution;
    /**the string in the details part seem different  
    check if the string starts with *payment for* or *paybil*
    
       
    if(substr($record->details,0,8)=='Pay Bill'){
    			$phone1=substr($record->details, 14,12);
	            
	           $phone= substr_replace($phone1,0,0,3);
	            //echo $phone;die();

			}elseif (substr($record->details, 7)=='Payment') {
							
	            $phone=substr($record->details, 22,10);
	           
	            
            }
            	$amount = $record->amount;
            	$amount = str_replace( ',', '', $amount );
            	$code=substr($record->details, -6);
            //var_dump($code);die();

            #find a member with this celphone

            if ($phone>0){
             $hcPartners=$hcPartners->model()->find('phone=:phone || code=:code ' , array(':phone'=>$phone,':code'=>$code));

             //print_r( $hcPartners);die();
             if (!empty($hcPartners)) {
                  $parts = explode('/', $record->date);
                  $date  = "$parts[2]-$parts[1]-$parts[0]";
                  $parts2 = explode(' ', $parts[2]);
                  $date2  = "$parts2[0] $parts2[1]";
                  $date3 = 
                #$tarehe=substr($record->date, 5,4).':'.substr($record->date, 0,1).':'.substr($record->date, 2,2).':'.substr($record->date, 10);
                 $tarehe=$parts2[0]."-".$parts[0]."-".$parts[1]."-".$parts2[1];
                 # code...
                $partnersContribution->name= $hcPartners->name;
                $partnersContribution->code=$hcPartners->code;
                $partnersContribution->phone=$hcPartners->phone;
                $partnersContribution->amount=$amount;
                 $partnersContribution->year=$parts2[0];
                $partnersContribution->month=$parts[0];
                $partnersContribution->week=$parts[1];
                $partnersContribution->day=$parts[1];
                $partnersContribution->user=Yii::app()->user->id;
                $partnersContribution->created=$tarehe;
                $partnersContribution->tarehe=$tarehe;
        #check if this person paid at exactly this time

            
                 $payrecexist=PartnersContribution::model()->find('created=:created' , array(':created'=>$tarehe));
                if(empty( $payrecexist))
                    $partnersContribution->save();
                    $key++;
        #remove a record that is already a partner
                    TblCsvimport::model()->deleteAll('id=:id' , array(':id'=>$record->id));
             }
        #empty the table holding imported records. This table should remain empty
             //TblCsvimport::model()->deleteAll('id=:id' , array(':id'=>$record->id));
        #delete any empty rows inported from the execl file
         }else
          TblCsvimport::model()->deleteAll('id=:id' , array(':id'=>$record->id));
        
         }
    }*/

    #Insert into memberscontribution  all imported payment records
    public function Updateimportedrecs() {


        $model=new TblCsvimport;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

         $records=TblCsvimport::model()->findAll();
         foreach ($records as $key => $record) {


             
            $hcPartners=new HcPartners;
            $partnersContribution = new PartnersContribution;
if (!empty($record->details) ) {
    # code...

  
                $phone1=substr($record->details, 14,12);
                
               $phone= substr_replace($phone1,0,0,3);
                //echo $phone;die();

         
                $amount = $record->amount;
                $amount = str_replace( ',', '', $amount );
                $code=substr($record->details, -6);
            //var_dump($code);die();

            #find a member with this celphone

            if ($phone>0){
             $hcPartners=$hcPartners->model()->find('phone=:phone || code=:code ' , array(':phone'=>$phone,':code'=>$code));

             //print_r( $hcPartners);die();
             if (!empty($hcPartners)) {
                  $parts = explode('/', $record->date);
                  
                  $date  = "$parts[2]-$parts[1]-$parts[0]";
                  $parts2 = explode(' ', $parts[2]);
                  $date2  = "$parts2[0] $parts2[1]";
                  $date3 = 
                #$tarehe=substr($record->date, 5,4).':'.substr($record->date, 0,1).':'.substr($record->date, 2,2).':'.substr($record->date, 10);
                 #$tarehe=$parts2[0]."-".$parts[0]."-".$parts[1]."-".$parts2[1];
                $tarehe=$parts2[0]."-".$parts[1]."-".$parts[0]." ".$parts2[1];
                //print_r( $tarehe);die();
                 # code...
                $partnersContribution->name= $hcPartners->name;
                $partnersContribution->code=$hcPartners->code;
                $partnersContribution->phone=$hcPartners->phone;
                $partnersContribution->amount=$amount;
                $partnersContribution->year=$parts2[0];
                $partnersContribution->month=$parts[1];
                $partnersContribution->week=$parts[1];
                $partnersContribution->day=$parts[0];
                $partnersContribution->user=Yii::app()->user->id;
                $partnersContribution->created=$tarehe;
                $partnersContribution->tarehe=$tarehe;
        #check if this person paid at exactly this time

            
                 $payrecexist=PartnersContribution::model()->find('created=:created' , array(':created'=>$tarehe));
                if(empty( $payrecexist))
                    $partnersContribution->save();
                    $key++;
        #remove a record that is already a partner
                    TblCsvimport::model()->deleteAll('id=:id' , array(':id'=>$record->id));
             }
        #empty the table holding imported records. This table should remain empty
             //TblCsvimport::model()->deleteAll('id=:id' , array(':id'=>$record->id));
        #delete any empty rows inported from the execl file if $phone <> a number
         }else{
          TblCsvimport::model()->deleteAll('id=:id' , array(':id'=>$record->id));
}
    #delete record when details row is empty
            }else{
            TblCsvimport::model()->deleteAll('id=:id' , array(':id'=>$record->id));
}
         
         }
    }
 
 
    public static function amountPaid1($year, $month) {
        $records = PartnersContribution::model()->findAll('year=:yr && month=:mth', array(':yr' => $year, ':mth' => $month));
 
        $total = 0;
        $count = 0;
        foreach ($records as $record) {
            if ($record->amount > 0) {
                $count++;
                $total = $total + $record->amount;
            }
        }
 
        return array('total' => $total, 'count' => $count);
    }
 
    public static function balance($phone, $code) {
        $code = HcPartners::findPartnersByPhone_Code($phone, $code);
        $paid = self::amountPaid($code->code);
 
        if (!empty($code) && !empty($paid))
            return $code->amountpledged - $paid;
 
        if (!empty($code))
            return $code->amountpledged;
    }
 
    public static function uncleared($partners, $range) {
        $pledges = 0;
        $paid = 0;
        $count = 0;
        foreach ($partners as $i => $partner) {
            $lipwa = PartnersContribution::amountPaid($partner->code);
            if (!$partner->amountpledged > 0 || $lipwa >= $partner->amountpledged || $lipwa / $partner->amountpledged < $range['min'] / 100 || $lipwa / $partner->amountpledged > $range['max'] / 100)
                unset($partners[$i]);
            else {
                $pledges = $pledges + $partner->amountpledged;
                $paid = $paid + $lipwa;
                $count++;
            }
        }
 
        return array(
            'partners' => $partners, 'pledges' => $pledges,
            'paid' => $paid, 'unpaid' => $pledges - $paid,
            'count' => $count
        );
    }

     public function reports_cleared() {
        $partners = HcPartners::model()->findAll(array('order' => 'name ASC'));
 
        $range = self::postRange();
 
        $partners = PartnersContribution::cleared($partners, $range);

        return array(
            'partners' => $partners,
            'range' => $range
        );
 
          }

           public static function postRange() {
        $range = 102;
 
        if (!empty($_POST['PartnersContribution'])) {
            $range = $_POST['PartnersContribution']['amount'];
        }
 
        return $range;
    }
 
    public static function cleared($partners, $range) {
        $pledges = 0;
        $paid = 0;
        $count = 0;
        foreach ($partners as $i => $partner) {
            $lipwa = PartnersContribution::amountPaid($partner->code);
            if ($partner->amountpledged > 0 && (($range == 102 && $lipwa >= $partner->amountpledged) || ($range == 101 && $lipwa > $partner->amountpledged) || ($range == 100 && $lipwa == $partner->amountpledged))) {
                $pledges = $pledges + $partner->amountpledged;
                $paid = $paid + $lipwa;
                $count++;
            } else
                unset($partners[$i]);
        }
 
        return array(
            'partners' => $partners, 'pledges' => $pledges,
            'paid' => $paid, 'extra' => $paid - $pledges,
            'count' => $count
        );
    }
 
    public static function months($mth) {
        if ($mth == 1)
            return 'January';
        if ($mth == 2)
            return 'February';
        if ($mth == 3)
            return 'March';
        if ($mth == 4)
            return 'April';
        if ($mth == 5)
            return 'May';
        if ($mth == 6)
            return 'June';
        if ($mth == 7)
            return 'July';
        if ($mth == 8)
            return 'August';
        if ($mth == 9)
            return 'September';
        if ($mth == 10)
            return 'October';
        if ($mth == 11)
            return 'November';
        if ($mth == 12)
            return 'December';
 
        return false;
    }
 
    public static function Jumlas() {
        $partners = HcPartners::model()->findAll();
        return self::Jumla($partners);
    }
 
    public static function Jumla($partners) {
        $pledges = 0;
        $pats = 0;
        $paid = 0;
        $count = 0;
        $comp = 0;
        $stld = 0;
        $extra = 0;
        foreach ($partners as $partner) {
            if ($partner->amountpledged > 0) {
                $pledges = $pledges + $partner->amountpledged;
                $pats++;
                $lipwa = PartnersContribution::amountPaid($partner->code);
                if ($lipwa > 0) {
                    $paid = $paid + $lipwa;
                    $count++;
                    if ($lipwa >= $partner->amountpledged) {
                        $stld = $stld + $lipwa;
                        $extra = $extra + ($lipwa - $partner->amountpledged);
                        $comp++;
                    }
                }
            }
        }
 
        return array(
            'pledges' => $pledges, 'pats' => $pats, 'comp' => $comp, 'stld' => $stld,
            'paid' => $paid, 'extra' => $extra, 'count' => $count
        );
    }
 
    public static function bestMonth() {
 
        $yrmth = array('yr' => '2012', 'mt' => '08');
        $best = null;
 
        $prvs = 0;
        while (($yrmth['yr'] < date('Y')) || ($yrmth['yr'] == date('Y') && $yrmth['mt'] <= date('m'))) {
            $total = self::amountPaid1($yrmth['yr'], $yrmth['mt']);
            $count = $total['count'];
            $total = $total['total'];
            if ($total > $prvs) {
                $best = array(
                    'yr' => $yrmth['yr'], 'mt' => $yrmth['mt'], 'ttl' => $total, 'cnt' => $count
                );
                $prvs = $total;
            }
 
            $yrmth['mt'] = $yrmth['mt'] + 1;
            if ($yrmth['mt'] > 12) {
                $yrmth['yr'] = $yrmth['yr'] + 1;
                $yrmth['mt'] = 1;
            }
        }
 
        return $best;
    }
 
    public static function worstMonth() {
        $yrmth = array('yr' => '2012', 'mt' => '08');
        $worst = null;
 
        $prvs = self::Jumlas();
        $prvs = $prvs['paid'];
        while (($yrmth['yr'] < date('Y')) || ($yrmth['yr'] == date('Y') && $yrmth['mt'] < date('m'))) {
            $total = self::amountPaid1($yrmth['yr'], $yrmth['mt']);
            $count = $total['count'];
            $total = $total['total'];
            if ($total < $prvs) {
                $worst = array(
                    'yr' => $yrmth['yr'], 'mt' => $yrmth['mt'], 'ttl' => $total, 'cnt' => $count
                );
                $prvs = $total;
            }
 
            $yrmth['mt'] = $yrmth['mt'] + 1;
            if ($yrmth['mt'] > 12) {
                $yrmth['yr'] = $yrmth['yr'] + 1;
                $yrmth['mt'] = 1;
            }
        }
 
        return $worst;
    }
 
    public static function quaterlyMonthArray($year) {
        if ($year == 2012)
            return array('q3' => array(), 'q4' => array());
 
        if ($year != date('Y'))
            return array('q1' => array(), 'q2' => array(), 'q3' => array(), 'q4' => array());
 
        if (date('Y') < 4)
            $array = array('q1' => array());
        else
        if (date('Y') < 7)
            $array = array('q1' => array(), 'q2' => array());
        if (date('Y') < 10)
            $array = array('q1' => array(), 'q2' => array(), 'q3' => array());
        else
            $array = array('q1' => array(), 'q2' => array(), 'q3' => array(), 'q4' => array());
 
        return $array;
    }
 
    public static function monthArray($q) {
        if ($q == 1)
            return array('min' => 1, 'max' => 3);
        if ($q == 2)
            return array('min' => 4, 'max' => 6);
        if ($q == 3)
            return array('min' => 7, 'max' => 9);
        if ($q == 4)
            return array('min' => 10, 'max' => 12);
 
        return array('min' => 1, 'max' => 12);
    }
 
    public static function bestYear() {
        $previous = 0;
 
        for ($year = 2012; $year <= date('Y'); $year++) {
            $annualTotal = self::annulaTotal($year, 'whl');
 
            if ($annualTotal['total'] >= $previous) {
                $best = array(
                    'yr' => $year, 'ttl' => $annualTotal['total'], 'cnt' => $annualTotal['count']
                );
                $previous = $annualTotal['total'];
            }
        }
 
        return $best;
    }
 
    public static function worstYear() {
        $previous = self::Jumlas();
        $previous = $previous['paid'];
 
        for ($year = 2012; $year <= date('Y'); $year++) {
            $annualTotal = self::annulaTotal($year, 'whl');
 
            if ($annualTotal['total'] < $previous) {
                $worst = array(
                    'yr' => $year, 'ttl' => $annualTotal['total'], 'cnt' => $annualTotal['count']
                );
                $previous = $annualTotal['total'];
            }
        }
 
        return $worst;
    }
 
    public static function annulaTotal($year, $q) {
        $total = array('count' => 0, 'total' => 0);
 
        $range = self::monthArray($q);
 
        for ($month = $range['min']; $month <= $range['max']; $month++) {
            $mwezi = self::amountPaid1($year, $month);
            $total['count'] = $total['count'] + $mwezi['count'];
            $total['total'] = $total['total'] + $mwezi['total'];
        }
 
        return $total;
    }
 
    public function findHcamountpaidbyCode($code) {
        $model = new PartnersContribution;
        $total = 0;
        $records = $model->model()->findAll('code=:code', array(':code' => $code));
        //if($record)
        foreach ($records as $record):
            $total = $total + $record->amount;
        endforeach;
 
        return $total;
    }
 
    public function findRunningtotal($value) {
        $val = $vlaue;
 
        return $val;
    }
 
    public function updatePertnserContributionPartnercodes() {
        $criteria = new CDbCriteria;
 
        $records = self::model()->findAll($criteria);
        foreach ($records as $record):
            $k = $record->code;
            $val = '';
 
//UPDATE THE PARTNERS CODES
            $criteria->condition = 'id=:id';
            $criteria->params = array(':id' => $record->id);
 
            if ($k < 10) {
                $val = "HC000" . $k;
                self::model()->updateAll(array('code' => $val, 'tarehe' => "2012-08-01", 'year' => 2012, 'month' => 8, 'week' => 1, 'day' => 1), $criteria);
            } else {
                if ($k > 9 && $k < 100) {
                    $val = "HC00" . $k;
                    self::model()->updateAll(array('code' => $val, 'tarehe' => "2012-08-01", 'year' => 2012, 'month' => 8, 'week' => 1, 'day' => 1), $criteria);
                } else {
                    if ($k > 99 && $k < 1000) {
                        $val = "HC0" . $k;
                        self::model()->updateAll(array('code' => $val, 'tarehe' => "2012-08-01", 'year' => 2012, 'month' => 8, 'week' => 1, 'day' => 1), $criteria);
                    } else {
                        $val = "HC" . $k;
                        self::model()->updateAll(array('code' => $val, 'tarehe' => "2012-08-01", 'year' => 2012, 'month' => 8, 'week' => 1, 'day' => 1), $criteria);
                    }
                }
            }
 
            //self::model()->updateAll(array('code'=>($record->month_total - $record->monthly_fee - Withdrawal::getclientwithdrawal($record->memberid,$record->year,$record->month)), 'new_' => 2 ), $criteria );
        endforeach;
    }
 
    public function findHcRunningTotalByCode($code, $amount) {
        if (empty($_SESSION['lastcode'])) {
            $_SESSION['lastcode'] = $code;
            $_SESSION['amount'] = $amount;
        } else {
            if ($_SESSION['lastcode'] === $code) {
                $_SESSION['lastcode'] = 11;
            } else {
                $_SESSION['lastcode'] = $code;
            }
        }
        $j = $code;
        $i = 0;
        $model = new PartnersContribution;
        $total = 0;
        $records = $model->model()->findAll('code=:code', array(':code' => $code));
        //if($record)
        foreach ($records as $record):
            $total = $total + $record->amount;
        endforeach;
 
        return $_SESSION['amount'];
    }
 
    public function partnerssmscontents($phone) {
        $phone = substr($phone, 3);
        $hcPartners = new HcPartners;
        $model = new PartnersContribution;
        $total = 0;
        $records = $model->model()->findAll('phone=:phone', array(':phone' => $phone));
        foreach ($records as $record):
            $total = $total + $record->amount;
        endforeach;
        $bal = $hcPartners->findHcamountpledgebyCode($record->code) - $total;
        return strtoupper($record->name) . "; " . "ACC:" . $record->code . "; " . "PLEDGE:" . number_format($hcPartners->findHcamountpledgebyCode($record->code)) . "�" . "PAID:" . number_format($total) . "; " . "BAL:" . number_format($bal) . "; Thank u for investing in the Historic and Glorious Sanctuary for our God.";
    }
 
    public function hcreportpdf($dataProvider) {
        //Prepare the pdf exporter
        //$html2pdfPath = Yii::getPathOfAlias('ext.tcpdf.tcpdf');
        $html2pdfPath = Yii::createComponent('ext.tcpdf.TcPdf', 'P', 'cm', 'A4', true, 'UTF-8');
        spl_autoload_unregister(array('YiiBase', 'autoload'));
        //require_once("$html2pdfPath/config/lang/fra.php");
        //require_once("$html2pdfPath/tcpdf.php");
        $pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        spl_autoload_register(array('YiiBase', 'autoload'));
 
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
        $pdf->SetTextColor(80, 80, 80);
        $pdf->AddPage();
 
        //Write the html from a Yii view
        $html = Yii::app()->controller->renderPartial(('hcreportpdf1'), array('dataProvider' => $dataProvider), true);
 
        //Convert the Html to a pdf document
        $pdf->writeHTML($html, true, false, true, false, '');
 
        // reset pointer to the last page
        $pdf->lastPage();
 
        //Close and output PDF document
        $pdf->Output('filename.pdf', 'I');
    }
 
}