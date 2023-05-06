<?php
class APM_SERVERS
{
	protected PgSQL\Connection $db_connection;
	
	public function __construct() {
		$this->db_connection = pg_connect("host=localhost dbname=APM user=APM password=APM");
	}

	public function createServer($id,$name,$description,$installation_date,$retirement_date,$os_id) {
		$result = pg_query($this->db_connection,"INSERT INTO public.\"APM_SERVERS\" VALUES('" . $id . "','" . $name . "','" . $description . "','". $installation_date  ."','". $retirement_date."','". $os_id . "')");
		if ($result == false) {
			print("SQL ERROR");
		}
	}
		
	public function getServerList(){
		$result = pg_query($this->db_connection,"SELECT * FROM public.\"APM_SERVERS\"");
		if ($result == false) {
			print("SQL ERROR");
		}
		return($result);
	}

	public function getFilteredServerList($filter){
		$result = pg_query($this->db_connection,"SELECT * FROM public.\"APM_SERVERS\" WHERE " . $filter);
		if ($result == false) {
			print("SQL ERROR");
		}
		return($result);
	}
		
	public function updateFieldServer($id,$field,$value) {
		$result = pg_query($this->db_connection,"UPDATE public.\"APM_SERVERS\" SET ".$field."='" . $value . "' WHERE \"ID\"='" . $id . "'");
		if ($result == false) {
			print("SQL ERROR");
		}		
	}

}
?>


