<?php
class Lang {
	public static function getTable() {
		global $CFG;
		$sql = "SELECT * FROM lang";
		$result = db_query_array($sql);
		
		if ($result) {
			foreach ($result as $row) {
				$key = $row['key'];
				$lang_table[$key]['es'] = str_replace('[exchange_name]',$CFG->exchange_name,$row['esp']);
				$lang_table[$key]['en'] = str_replace('[exchange_name]',$CFG->exchange_name,$row['eng']);
				$lang_table[$key]['ru'] = str_replace('[exchange_name]',$CFG->exchange_name,$row['ru']);
				$lang_table[$key]['zh'] = str_replace('[exchange_name]',$CFG->exchange_name,$row['zh']);
			}
		}
		return $lang_table;
	}
}
?>
