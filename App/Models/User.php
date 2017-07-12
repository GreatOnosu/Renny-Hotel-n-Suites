<?php
namespace App\Models;
use PDO;
use App\Config;
class User extends \Core\Model{
/************************************************************************/
	public static function calcTotal(){
		$db = static::getDB();
		$all_array = array();
		if($_SESSION['entry_username'] == 'SuperAdmin'){
			try {
				$stmt = $db->query("SELECT * FROM users_tb");
				$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
				$user_count = count($result);
			}catch (Exception $e) {
				return false;
			}
			try {
				$stmt = $db->query("SELECT * FROM reservations_tb WHERE status = 'Waiting'");
				$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
				$reserve_count = count($result);
			}catch (Exception $e) {
				return false;
			}
			try {
				$stmt = $db->query("SELECT * FROM reservations_tb WHERE status = 'Checked In'");
				$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
				$room_count = count($result);
			}catch (Exception $e) {
				return false;
			}
			try {
				$result = $db->query("SELECT * FROM reservations_tb ORDER BY id DESC");
				$trans = $result->fetchAll(PDO::FETCH_ASSOC);
			}catch (Exception $e) {
				return false;
			}	
		}else{
			$branch = $_SESSION['entry_branch'];
			try {
				$stmt = $db->query("SELECT * FROM users_tb WHERE branch = '$branch'");
				$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
				$user_count = count($result);
			}catch (Exception $e) {
				return false;
			}
			try {
				$stmt = $db->query("SELECT * FROM  reservations_tb WHERE status = 'Waiting' AND hotel = '$branch'");
				$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
				$reserve_count = count($result);
			}catch (Exception $e) {
				return false;
			}
			try {
				$stmt = $db->query("SELECT * FROM  reservations_tb WHERE status = 'Checked In' AND hotel = '$branch'");
				$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
				$room_count = count($result);
			}catch (Exception $e) {
				return false;
			}
			try {
				$result = $db->query("SELECT * FROM reservations_tb WHERE hotel = '$branch' ORDER BY id DESC");
				$trans = $result->fetchAll(PDO::FETCH_ASSOC);
			}catch (Exception $e) {
				return false;
			}
		}
		$all_array['user'] = $user_count;
		$all_array['reserve'] = $reserve_count;
		$all_array['room'] = $room_count;
		$all_array['trans'] = $trans;
		return $all_array;
	}
/************************************************************************/
	public static function addUser(){
		if(isset($_POST['btn_add'])){
			$get_fname = htmlspecialchars($_POST['fname']);
			$get_email = htmlspecialchars($_POST['email']);
			$get_branch = htmlspecialchars($_POST['branch']);
			$get_level = htmlspecialchars($_POST['level']);
			$get_username = htmlspecialchars($_POST['username']);
			$get_password = htmlspecialchars($_POST['password']);
			$bindings = array(
				'fname' 		=>	$get_fname,
				'email'			=>	$get_email,
				'branch'		=> 	$get_branch,
				'level'			=>	$get_level,
				'username'		=>	$get_username,
				'password'		=>	$get_password,
			);
			try {
				$db = static::getDB();
				$result = $db->prepare("INSERT INTO users_tb (username, password, level, branch, full_name, email) VALUES (:username, :password, :level, :branch, :fname, :email)");
				return $result->execute($bindings);
			}catch (Exception $e) {
				return false;
			}
		}
	}
/************************************************************************/
	public static function getUser(){
		$db = static::getDB();
		if(isset($_POST['btn_update'])){
			$id = $_POST['updateid'];
			$get_fname = htmlspecialchars($_POST['fname']);
			$get_email = htmlspecialchars($_POST['email']);
			$get_branch = htmlspecialchars($_POST['branch']);
			$get_level = htmlspecialchars($_POST['level']);
			$get_username = htmlspecialchars($_POST['username']);
			$get_password = htmlspecialchars($_POST['password']);
			try {
				$result = $db->prepare("UPDATE users_tb SET 
					username = '$get_username', 
				 	password = '$get_password', 
				 	level = '$get_level', 
				 	branch = '$get_branch', 
				 	full_name = '$get_fname', 
				 	email = '$get_email'
				 	WHERE id = $id");
				$result->execute();
			}catch (Exception $e) {
				return false;
			}
		}
		if(isset($_GET['deleteid'])){
			if($_SESSION['entry_username'] == 'SuperAdmin'){
				$id = $_GET['deleteid'];
				try {
					$result = $db->query("DELETE FROM users_tb WHERE id = $id");
					$result->execute();
				}catch (Exception $e) {
					return false;
				}
			}
		}
		if($_SESSION['entry_username'] == 'SuperAdmin'){
			try {
				$result = $db->query("SELECT * FROM users_tb ORDER BY level ASC");
				return $result->fetchAll(PDO::FETCH_ASSOC);
			}catch (Exception $e) {
				return false;
			}
		}else{
			$branch = $_SESSION['entry_branch'];
			try {
				$result = $db->query("SELECT * FROM users_tb WHERE branch = '$branch' ORDER BY level ASC");
				return $result->fetchAll(PDO::FETCH_ASSOC);
			}catch (Exception $e) {
				return false;
			}
		}
	}
/************************************************************************/
	public function selectUser(){
		if(isset($_GET['updateid'])){
			$id = $_GET['updateid'];
			try {
				$db = static::getDB();
				$result = $db->query("SELECT * FROM users_tb WHERE id = $id");
				return $result->fetchAll(PDO::FETCH_ASSOC);
			}catch (Exception $e) {
				return false;
			}
		}
	}
}