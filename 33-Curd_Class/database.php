<?php
//Class Start
class database{
	private $servername = "localhost";
	private $username = "root";
	private $password = "";
	private $dbname = "test2";
	
	private $mysqli = "";
	private $reasult = array();
	private $conn = false;
	
	//Constructor to execute autometically
	public function __construct(){
		if(!$this->conn){
			$this->mysqli = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
			$this->conn = true;
			if($this->mysqli->connect_error){
				array_push($this->reasult,$this->mysqli->connect_error);
				return false;
			}
		}
		else{
			return true;
		}
	}
	
	//Function to insert into the database
	public function insert($table,$params=array()){
		if($this->tableExists($table)){
			//print_r($params);
			$table_columns = implode(', ',array_keys($params));
			$table_values = implode("', '",$params);

			$sql = "INSERT INTO $table ($table_columns) VALUES ('$table_values')";
			//echo $sql;
			if($this->mysqli->query($sql)){
				array_push($this->reasult,$this->mysqli->insert_id);
				return true;
			}else{
				array_push($this->reasult,$this->mysqli->error);
				return false;
			}
		}else{
			return false;
		}
	}
	
	//Function to update row in database
	public function update($table,$params=array(),$where= null){
        if($this->tableExists($table)){

            $args=array();
            foreach($params as $key=>$value){
                $args[]="$key ='$value'";
            }
            $sql = "UPDATE $table SET " . implode(', ',$args);
            if($where !=null){
                $sql.="WHERE $where";
            }
            if($this->mysqli->query($sql)){
                array_push($this->reasult,$this->mysqli->affected_rows);
                return true;
            }
            else{
                array_push($this->reasult,$this->mysqli->error);
                return false;
            }
        }
        else{
            return false;
        }
    }
	
	//Function to delete table or row(s) in database
	public function delete($table,$where= null){
		if($this->tableExists($table)){
			$sql = "DELETE FROM $table";
			if($where !=null){
                $sql.=" WHERE $where";
            }
			if($this->mysqli->query($sql)){
                array_push($this->reasult,$this->mysqli->affected_rows);
                return true;
            }
            else{
                array_push($this->reasult,$this->mysqli->error);
                return false;
            }
		}else{
			return false;
		}
	}
	
	//Function to SELECT from the database
	public function select($table,$rows="*",$join = null,$where=null,$order=null,$limit=null){
		if($this->tableExists($table)){
			$sql = "SELECT $rows FROM $table";
			if($join != null){
				$sql .= " JOIN $join";
			}
			if($where != null){
				$sql .= " WHERE $where";
			}
			if($order != null){
				$sql .= " ORDER BY $order";
			}
			if($limit != null){
				$sql .= " LIMIT 0, $limit";
			}

			$query = $this->mysqli->query($sql);
			if($query){
				$this->reasult = $query->fetch_all(MYSQLI_ASSOC);
				return true;
			}else{
				array_push($this->reasult,$this->mysqli->error);
				return false;
			}
		}else{
			return false;
		}
	}
	public function sql($sql){
		$query = $this->mysqli->query($sql);
		if($query){
			$this->reasult = $query->fetch_all(MYSQLI_ASSOC);
			return true;
		}else{
			array_push($this->reasult,$this->mysqli->error);
			return false;
		}
	}


	//Check table exists
	private function tableExists($table){
		$sql = "SHOW TABLES FROM $this->dbname LIKE '$table'";
		$tableInDb = $this->mysqli->query($sql);
		if($tableInDb){
			if($tableInDb->num_rows == 1){
				return true;
			}else{
				array_push($this->reasult,$table." table does not exist in this database.");
				return false;
			}
		}
	}

	//Error hendeling
	public function getReasult(){
		$val = $this->reasult;
		$this->reasult = array();
		return $val;
	}
	 
	//Close connection
	public function __destruct(){
		if($this->conn){
			if($this->mysqli->close()){
				$this->conn = false;
				return true;
			}
		}else{
			return false;
		}
	}
}
//Class Close
?>