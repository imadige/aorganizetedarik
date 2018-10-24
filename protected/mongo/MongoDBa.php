<?php

use Smce\Sm;


class MongoDBa
{
	private static $mongo;

	private static $conn=false;

	private static $sellectDB;

	private static $collection;

	private function mongoInit()
	{
		
		$seeds='mongodb://'.Yii::app()->params["mongodb"]["username"].':'.Yii::app()->params["mongodb"]["password"].'@localhost:27017/'.Yii::app()->params["mongodb"]["db"];
		
		//$options=Yii::app()->params["mongodb"];


		self::$mongo=$this->getMongoClient($seeds);
			

	}

	private function getMongoClient($seeds = "", $options = array(), $retry = 7) {

	    try {

	    	self::$conn=true;
	        return new MongoDB\Driver\Manager($seeds, $options);

	    } catch(MongoConnectionException $e) {


	        
	    	self::$conn=false;
	    }

	    if ($retry > 0) {

	        return $this->getMongoClient($seeds, $options, --$retry);

	    }else{
	    	echo "mg conn error;";
	    	exit;
	    }

	    
	}

 

	public function setMongo($dbname,$collection)
	{
		
		if(!self::$conn)
		{
			$this->mongoInit();
		}

		self::$sellectDB=$dbname;
		
		self::$collection=$collection;

	}

	protected static function mongo_insert($params)
	{	
		$bulk = new MongoDB\Driver\BulkWrite;
		$bulk->insert($params);
		
		self::$mongo->executeBulkWrite(self::$sellectDB.".".self::$collection, $bulk);
	}

	protected static function mongo_update($where,$params)
	{	
		$bulk = new MongoDB\Driver\BulkWrite;
		$bulk->update($where,$params);
		
		self::$mongo->executeBulkWrite(self::$sellectDB.".".self::$collection, $bulk);
	}

	protected static function mongo_delete($params)
	{	
		$bulk = new MongoDB\Driver\BulkWrite;
		$bulk->delete($params);
		
		self::$mongo->executeBulkWrite(self::$sellectDB.".".self::$collection, $bulk);
	}

	protected static function mongo_count($params)
	{	
		return count(iterator_to_array(self::mongo_find($params)));
	}

	protected static function mongo_find($params=array(),$options=array())
	{	
		$query = new MongoDB\Driver\Query($params, $options);
		
		return self::$mongo->executeQuery(self::$sellectDB.".".self::$collection, $query);
	
	}

	protected static function mongo_aggregate($params)
	{	
		$pr=array(
			"aggregate"=>self::$collection,
			"pipeline"=>$params,
		);

		$query = new MongoDB\Driver\Command($pr);
		
		return self::$mongo->executeCommand(self::$sellectDB, $query);
	
	}

}