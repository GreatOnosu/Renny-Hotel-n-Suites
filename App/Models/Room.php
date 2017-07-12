<?php
namespace App\Models;
use PDO;
use App\Config;
class Room extends \Core\Model{

/************************************************************************/

	public static function getRoom(){
		$db = static::getDB();
		if(isset($_POST['room_update'])){
			$id = $_POST['roomid'];
			$get_price = htmlspecialchars($_POST['price']);
			$get_size = htmlspecialchars($_POST['size']);
			try {
				$result = $db->prepare("UPDATE rooms_tb SET 
					price = '$get_price', 
				 	total_rooms = '$get_size'
				 	WHERE id = $id");
				$result->execute();
			}catch (Exception $e) {
				return false;
			}
		}
		if($_SESSION['entry_username'] == 'SuperAdmin'){
			try {
				$result = $db->query("SELECT * FROM rooms_tb ORDER BY branch ASC");
				return $result->fetchAll(PDO::FETCH_ASSOC);
			}catch (Exception $e) {
				return false;
			}
		}else{
			$branch = $_SESSION['entry_branch'];
			try {
				$result = $db->query("SELECT * FROM rooms_tb WHERE branch = '$branch' ORDER BY price DESC");
				return $result->fetchAll(PDO::FETCH_ASSOC);
			}catch (Exception $e) {
				return false;
			}
		}
		if(isset($_GET['deleteroomid'])){
			if($_SESSION['entry_username'] == 'SuperAdmin'){
				$id = $_GET['deleteroomid'];
				try {
					$result = $db->query("DELETE FROM rooms_tb WHERE id = $id");
					$result->execute();
				}catch (Exception $e) {
					return false;
				}
			}
		}
	}
/************************************************************************/
	public static function addRoom(){
		if(isset($_POST['room_create'])){
			$get_category = htmlspecialchars($_POST['category']);
			$get_branch = htmlspecialchars($_POST['branch']);
			$get_price = htmlspecialchars($_POST['price']);
			$get_size = htmlspecialchars($_POST['size']);
			$bindings = array(
				'category' 		=>	$get_category,
				'branch'		=>	$get_branch,
				'price'			=> 	$get_price,
				'size'			=>	$get_size,
			);
			try {
				$db = static::getDB();
				$result = $db->prepare("INSERT INTO rooms_tb (category, branch, price, total_rooms) VALUES (:category, :branch, :price, :size)");
				return $result->execute($bindings);
			}catch (Exception $e) {
				return false;
			}
		}
	}
/************************************************************************/

	public function selectRoom(){
		if(isset($_GET['roomid'])){
			$id = $_GET['roomid'];
			try {
				$db = static::getDB();
				$result = $db->query("SELECT * FROM rooms_tb WHERE id = $id");
				return $result->fetchAll(PDO::FETCH_ASSOC);
			}catch (Exception $e) {
				return false;
			}
		}
	}
}