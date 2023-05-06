<?php
class APM_CAPABILITIES
{
	protected PgSQL\Connection $db_connection;
	
	public function __construct() {
		$this->db_connection = pg_connect("host=localhost dbname=APM user=APM password=APM");
	}

	public function createCapability($id,$name,$description,$father_id) {
		$result = pg_query($this->db_connection,"INSERT INTO public.\"APM_CAPABILITIES\" VALUES('" . $id . "','" . $name . "','" . $description . "','". $father_id  ."')");
		if ($result == false) {
			print("SQL ERROR");
		}
	}
		
	public function getCapabilityList(){
		$result = pg_query($this->db_connection,"SELECT * FROM public.\"APM_CAPABILITIES\"");
		if ($result == false) {
			print("SQL ERROR");
		}
		return($result);
	}

	public function getFilteredCapabilityList($filter){
		$result = pg_query($this->db_connection,"SELECT * FROM public.\"APM_CAPABILITIES\" WHERE " . $filter);
		if ($result == false) {
			print("SQL ERROR");
		}
		return($result);
	}
		
	public function updateFieldCapability($id,$field,$value) {
		$result = pg_query($this->db_connection,"UPDATE public.\"APM_CAPABILITIES\" SET ".$field."='" . $value . "' WHERE \"ID\"='" . $id . "'");
		if ($result == false) {
			print("SQL ERROR");
		}		
	}

}
?>


