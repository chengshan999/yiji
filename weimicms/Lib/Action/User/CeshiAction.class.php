<?php
class CeshiAction{
	function index(){
		echo $_SERVER['HTTP_USER_AGENT'];
	}
}