<?php

class MoProducts extends MongoDBa
{
	private static $dbname="organizetedarik";

	private static $tablename="products";

	private static $table;

	private static $db;

	private $int=array("products_id","suppliers_id","productgroup_id","deleted","admindeleted","status","salestype","cargopricetype","cargoprice","price","lastshowday","lastbidday","piece","startingprice","viewed","code","discount","currency","totalpoint","uservotecount","viewok");

	private $datetime=array("dateadd","updatedateadd","lastshowdates");

	public function __construct()
	{

		$this->setMongo(self::$dbname,self::$tablename);


	}

	public function insert($arr)
	{

		self::mongo_insert($arr);

	}

	public function search($str,$page,$pagesize)
	{	
		$skip=$pagesize*($page-1);

		if(empty($str))
		{	

			$where = array("lastshowdates"=>array('$gt'=>new MongoDB\BSON\UTCDateTime(time()*1000))); 

		}else{

			 if(strlen($str)<3)
		     {
		     	 $where = array('$text' => array('$search'=>$str),'viewok'=>1,"lastshowdates"=>array('$gt'=>new MongoDB\BSON\UTCDateTime(time()*1000))); 
		     }else{
		     	 $where = array(
		     	 		'$or'=>array(
				     	 	array('name' =>  new MongoDB\BSON\Regex ( '^'.$str,'i')),
				     	 	array('$text' => array('$search'=>$str))
		     	 		),'viewok'=>1,"lastshowdates"=>array('$gt'=>new MongoDB\BSON\UTCDateTime(time()*1000))
		     	 	); 
		     }
			 
		}

		$list=self::mongo_aggregate(array(
		    array('$match'=>$where),
		    array('$sort'=>array('dateadd'=>-1)),
		    array('$skip'=>$skip),
		    array('$limit'=>$pagesize),

		));

		$count=self::mongo_count($where);
		
		return array(
			"list"=>$list,
			'count'=>$count,
		);

	}

	public function update($id,$arr)
	{
		$where=array("products_id"=>$id);
		$count=self::mongo_count($where);
		
		if($count==0)
		{
			self::mongo_insert($arr);
		}else{
			self::mongo_update($where,array('$set'=>$arr));
		}
		
	}


	public function buildArr($model)
	{
		$arr=array();

		foreach($model as $key=>$value)
		{
			if(in_array($key,$this->int))
			{
				$arr[$key]=$value+0;;
				
			}elseif(in_array($key,$this->datetime)){
				$arr[$key]=new MongoDB\BSON\UTCDateTime(strtotime($value)*1000);
			}else{
				$arr[$key]=$value;
			}


		}

		$arr["productgroup_name"]=Func::getProductgroup($model->productgroup_id)->name;
		$arr["imageS"]=$this->getImages($model->products_id);

		return $arr;
	}

	public function getImages($products_id)
	{


		$criteria=new CDbCriteria;
		$criteria->condition = "products_id=:products_id && imagetype=0";
		$criteria->params = array (	
			':products_id' =>$products_id,
		);

		$modelProductimages=Productimages::model()->find($criteria);


		if(isset($modelProductimages->imageS))
		{
			return $modelProductimages->imageS;
		}else{
			return "";
		}
		
	}

	public function re()
	{
		
		$get=self::mongo_find();

		foreach($get as $key=>$value)
		{
			self::mongo_delete(array(
				"_id"=>$value->_id,
			));
		}
		

		$model=Products::model()->findAll();

		foreach($model as $key=>$value)
		{
			$this->insert($this->buildArr($value));
		}
	}

}