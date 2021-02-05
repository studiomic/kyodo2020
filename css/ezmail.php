<?php
require_once(SYSTEM . DS .'qdmail.php');
class Ezmail extends Qdmail{

	var $name ='Ezmail';

	function Ezmail( $param = null ){
		if( !is_null($param)){
			$param = func_get_args();
		}
		parent::__construct( $param );
	}
	function qd_convert_encoding( $word , $target_chrset , $org_charset = null ){

		if(empty($org_charset)){
			$org_charset = $this->qd_detect_encoding( $word );
		}
		if(empty($org_charset)){
			return $word;
		}
		if( strtoupper( $target_chrset ) === strtoupper( $org_charset ) ){
			return $word;
		}
		if('ASCII'===strtoupper( $target_chrset ) || 'ASCII'===strtoupper( $org_charset )){
			return $word;
		}
		if('ISO-2022-JP'===strtoupper( $target_chrset ) && 'UTF-8'===strtoupper( $org_charset )){
			if(file_exists(SYSTEM . DS .'iso2022jp.php')){
				require_once(SYSTEM . DS .'iso2022jp.php');
				return utf8_to_iso2022jp($word);
			}
		}
		return mb_convert_encoding( $word , $target_chrset , $org_charset );
	}
}
?>