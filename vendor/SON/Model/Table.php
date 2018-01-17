<?php

namespace SON\Model;

abstract class Table
{
	protected $db;
	protected $table;

	public function __construct(\PDO $db)
	{
		$this->db = $db;
	}

	public function fetchAll()
	{
		$query = "select * from {$this->table}";
		return $this->db->query($query);
	}

	public function find($id)
	{
		$query = "select * from {$this->table} where id=:id";
		$stmt = $this->db->prepare($query);
		$stmt->bindParam(":id",$id);
		$stmt->execute();
		return $stmt->fetch(\PDO::FETCH_ASSOC);
	}

	public function store($class)
	{
		$columns = array();
		$values = array();

		foreach ($class as $column => $value) {
			if($column != "db" && $column != "table"){
				$columns[] = $column;
				$values[$column] = $value;
			}
		}
		$columns_to_insert = implode(",",$columns);
		$values_to_insert = ":".implode(",:",$columns);

		$query = "insert into $this->table (
			".$columns_to_insert."
		) values (
			".$values_to_insert."
		)";

		$stmt = $this->db->prepare($query);
		foreach ($values as $key => $value) {
			$stmt->bindParam(":$key",$this->$key);
		}
			
		$stmt->execute();

	}
	public function setAttributes($data)
	{
		foreach ($data as $attribute => $value) {
			$this->$attribute = $value;
		}
	}
}