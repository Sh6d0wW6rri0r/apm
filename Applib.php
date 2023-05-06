<?php
class APM_APPLICATIONS
{
	protected PgSQL\Connection $db_connection;
	
	public function __construct() {
		$this->db_connection = pg_connect("host=localhost dbname=APM user=APM password=APM");
	}

	public function createApplication($id,$name,$description,$functional_owner,$technical_owner,$deployment_date,$retirement_date) {
		$result = pg_query($this->db_connection,"INSERT INTO public.\"APM_APPLICATIONS\" VALUES('" . $id . "','" . $name . "','" . $description . "','". $functional_owner ."','" . $functional_owner . "','". $technical_owner . "','". $deployment_date . "','". $retirement_date ."')");
		if ($result == false) {
			print("SQL ERROR");
		}
	}
		
	public function getApplicationList(){
		$result = pg_query($this->db_connection,"SELECT * FROM public.\"APM_APPLICATIONS\"");
		if ($result == false) {
			print("SQL ERROR");
		}
		return($result);
	}

	public function getFilteredApplicationList($filter){
		$result = pg_query($this->db_connection,"SELECT * FROM public.\"APM_APPLICATIONS\" WHERE " . $filter);
		if ($result == false) {
			print("SQL ERROR");
		}
		return($result);
	}
		
	public function updateFieldApplication($id,$field,$value) {
		$result = pg_query($this->db_connection,"UPDATE public.\"APM_APPLICATIONS\" SET ".$field."='" . $value . "' WHERE \"ID\"='" . $id . "'");
		if ($result == false) {
			print("SQL ERROR");
		}		
	}

}
?>


