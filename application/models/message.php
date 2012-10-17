<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Message extends CI_Model { 
	public function ShowMsgbox($msg="",$url="") {
		echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
		echo "<script>";
		if (strlen($msg) > 2) {
			echo "alert('".$msg."');";
		}
		if (strlen($url) > 3) {
			echo "location='".$url."';";
		} else {
			echo "window.history.back();";
		}
		echo "</script>";
		exit;
	}
}
