<?php

/**
 * This is the model class for table "products".
 *
 * The followings are the available columns in table 'products':
 * @property integer $products_id
 * @property integer $suppliers_id
 * @property string $name
 * @property integer $productgroup_id
 * @property integer $deleted
 * @property integer $admindeleted
 * @property string $dateadd
 * @property integer $status
 * @property string $subtitle
 * @property string $text
 * @property string $salestype
 * @property string $lastshowdates
 * @property integer $cargopricetype
 * @property double $cargoprice
 * @property double $price
 * @property integer $lastshowday
 * @property integer $piece
 */
class Products extends CActiveRecord
{

	public $productgroup_name;
	public $imageS;
	public $show;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'products';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('suppliers_id, productgroup_id, deleted, admindeleted, dateadd, status,uservotecount,totalpoint,viewok', 'required'),
			array('suppliers_id, productgroup_id, deleted, admindeleted, status, cargopricetype, lastshowday, lastbidday, piece, startingprice,discount,currency,viewok', 'numerical', 'integerOnly'=>true),
			array('cargoprice, price, startingprice,uservotecount,salestype', 'numerical'),
			array('name, subtitle', 'length', 'max'=>255),
			array('text, lastshowdates', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('products_id,currency, suppliers_id, name, productgroup_id, deleted, admindeleted, dateadd, status, subtitle, text, salestype, lastshowdates, cargopricetype, cargoprice, price, lastshowday, lastbidday, piece, status_t, startingprice,discount,uservotecount,totalpoint,viewok', 'safe', 'on'=>'search'),
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
			'show'=>'Gösterim',
			'products_id' => 'ID',
			'suppliers_id' => 'Suppliers',
			'name' => 'Ürün Adı',
			'productgroup_id' => 'Productgroup',
			'deleted' => 'Deleted',
			'admindeleted' => 'Admindeleted',
			'dateadd' => 'Dateadd',
			'status' => 'Durumu',
			'subtitle' => 'Subtitle',
			'text' => 'Açıklama',
			'salestype' => 'Salestype',
			'lastshowdates' => 'Gösterim Tarihi',
			'cargopricetype' => 'Cargopricetype',
			'cargoprice' => 'Cargoprice',
			'price' => 'Price',
			'lastshowday' => 'Gösterim',
			'lastbidday'=>'Gösterim İhale',
			'piece' => 'Adet',
			'code'=>'Ürün Kodu',
			'startingprice'=>'Başlangıç Fiyatı',
			"currency"=>'Para Birimi',
			"updatedateadd"=>"Güncellenme Tarihi",
			'viewok'=>"Gösterim"
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

		$criteria->compare('products_id',$this->products_id);
		$criteria->compare('suppliers_id',$this->suppliers_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('productgroup_id',$this->productgroup_id);
		$criteria->compare('deleted',$this->deleted);
		$criteria->compare('admindeleted',$this->admindeleted);
		$criteria->compare('dateadd',$this->dateadd,true);
		$criteria->compare('updatedateadd',$this->updatedateadd,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('subtitle',$this->subtitle,true);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('salestype',$this->salestype,true);
		$criteria->compare('currency',$this->currency);
		$criteria->compare('uservotecount',$this->uservotecount);
		$criteria->compare('totalpoint',$this->totalpoint);
		$criteria->compare('viewok',$this->viewok);
		

		if(!empty($this->lastshowdates) && $this->lastshowdates==1)
		{

			$criteria->compare('status',1);
			$criteria->compare('deleted',0);
			$criteria->compare('admindeleted',0);
			$criteria->compare('lastshowdates>',date("Y-m-d H:i:s"));
		}elseif(!empty($this->lastshowdates) && $this->lastshowdates==2)
		{
			$criteria->compare('status!=',1);
			$criteria->compare('deleted!=',0);
			$criteria->compare('admindeleted!=0',0);
			$criteria->compare('lastshowdates<',date("Y-m-d H:i:s"));
		}
		$criteria->compare('cargopricetype',$this->cargopricetype);
		$criteria->compare('cargoprice',$this->cargoprice);
		$criteria->compare('price',$this->price);
		$criteria->compare('startingprice',$this->startingprice);

		$criteria->compare('lastshowday',$this->lastshowday);
		$criteria->compare('lastbidday',$this->lastbidday);
		
		$criteria->compare('piece',$this->piece);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
			    'defaultOrder'=>'dateadd Desc',
			  )
			
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Products the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
