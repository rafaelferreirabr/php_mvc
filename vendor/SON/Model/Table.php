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

	public function store()
	{
		/*falta incluir os atributos dinamicos*/
		$query = "insert into $this->table (id,name,email) values (:id,:name,:email)";
		$stmt = $this->db->prepare($query);

		$stmt->bindParam(":id",$this->id);
		$stmt->bindParam(":name",$this->name);
		$stmt->bindParam(":email",$this->email);

		$stmt->execute();

	}
	public function setAttributes($data)
	{
		foreach ($data as $attribute => $value) {
			$this->$attribute = $value;
		}
	}
}