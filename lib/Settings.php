<?php
class Settings {
	public static function assign() {
		global $CFG;
		
		$all = self::get();
		if (is_array($all) && is_object($CFG)) {
			foreach ($all as $name => $value) {
				if (!strstr($name,'_api'))
					$name = str_replace('api_','',$name);
				
				$CFG->$name = $value;
			}
		}
	}
	
	public static function get() {
		$sql = 'SELECT * FROM app_configuration WHERE id = 1';
		$result = db_query_array($sql);
		return $result[0];
	}
}

?>