<?php
class APM_USERS
{
	protected PgSQL\Connection $db_connection;
	
	public function __construct() {
		$this->db_connection = pg_connect("host=localhost dbname=APM user=APM password=APM");
	}

	public function createUser($username,$name,$password) {
		$result = pg_query($this->db_connection,"INSERT INTO public.\"APM_USERS\" VALUES('" . $username . "','" . $name . "','" . $password . "')");
		if ($result == false) {
			print("SQL ERROR");
		}
	}
	
	public function checkPassword($username,$password) {
		$result = pg_query($this->db_connection,"SELECT \"PASSWORD\" FROM public.\"APM_USERS\" WHERE \"USERNAME\"='" . $username . "'");
		$is_good = false;
		if ($result == false) {
			print("SQL ERROR");
		} else {
			$str_res = pg_fetch_assoc($result);
			if (strcmp($str_res['PASSWORD'],$password)==0) {
				$is_good = true;
			}
		}
		return($is_good);
	}
	
	public function getUserList(){
		$result = pg_query($this->db_connection,"SELECT * FROM public.\"APM_USERS\"");
		if ($result == false) {
			print("SQL ERROR");
		}
		return($result);
	}

	public function getFilteredUserList($filter){
		$result = pg_query($this->db_connection,"SELECT * FROM public.\"APM_USERS\" WHERE " . $filter);
		if ($result == false) {
			print("SQL ERROR");
		}
		return($result);
	}
		
	public function updateFieldApplication($id,$field,$value) {
		$result = pg_query($this->db_connection,"UPDATE public.\"APM_USERS\" SET ".$field."='" . $value . "' WHERE \"ID\"='" . $id . "'");
		if ($result == false) {
			print("SQL ERROR");
		}		
	}
}
?>


