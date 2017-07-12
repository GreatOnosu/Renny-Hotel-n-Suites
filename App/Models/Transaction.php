<?php
namespace App\Models;
use PDO;
use App\Config;
class Transaction extends \Core\Model{

/************************************************************************/
	public static function getTrans(){
		$db = static::getDB();
		try {
			$result = $db->query("SELECT * FROM reservations_tb WHERE status != 'Waiting' ORDER BY id ASC");
			return $result->fetchAll(PDO::FETCH_ASSOC);
		}catch (Exception $e) {
			return false;
		}
	}
/************************************************************************/
	public static function getReserve(){
		$db = static::getDB();
		if(isset($_GET['cancelid'])){
			$id = $_GET['cancelid'];
			$result = $db->query("UPDATE reservations_tb SET status = 'Canceled' WHERE id = $id");
			$result->execute();
		}
		if(isset($_GET['checkin'])){
			$id = $_GET['checkin'];
			$result = $db->query("UPDATE reservations_tb SET status = 'Checked In' WHERE id = $id");
			$result->execute();
			try {
				$result = $db->query("SELECT * FROM reservations_tb WHERE id = $id");
				$reserve = $result->fetchAll(PDO::FETCH_ASSOC);
			}catch (Exception $e) {
				return false;
			}
			$loc = $reserve{0}['hotel'];
			$cat = $reserve{0}['room'];
			try {
				$result = $db->query("SELECT * FROM rooms_tb WHERE category = '$cat' AND branch = '$loc'");
				$roomie = $result->fetchAll(PDO::FETCH_ASSOC);
			}catch (Exception $e) {
				return false;
			}
			$new = $roomie{0}['occupied_rooms'] + 1;
			$result = $db->query("UPDATE rooms_tb SET occupied_rooms = $new WHERE category = '$cat' AND branch = '$loc'");
			$result->execute();
		}
		if(isset($_POST['reservationid'])){
			$id = $_POST['reservationid'];
			$get_in = $_POST['in'];
			$get_out = $_POST['out'];
			$get_payment = $_POST['payment'];
			$get_amount = $_POST['amount'];
			$result = $db->query("UPDATE reservations_tb SET check_in = '$get_in', check_out = '$get_out', payment_mode = '$get_payment', amount = '$get_amount' WHERE id = $id");
			$result->execute();
		}
		if($_SESSION['entry_username'] == 'SuperAdmin'){
			try {
				$result = $db->query("SELECT * FROM reservations_tb WHERE status = 'Waiting' ORDER BY check_in ASC");
				return $result->fetchAll(PDO::FETCH_ASSOC);
			}catch (Exception $e) {
				return false;
			}	
		}else{
			$branch = $_SESSION['entry_branch'];
			try {
				$result = $db->query("SELECT * FROM reservations_tb WHERE status = 'Waiting' AND hotel = '$branch' ORDER BY check_in ASC");
				return $result->fetchAll(PDO::FETCH_ASSOC);
			}catch (Exception $e) {
				return false;
			}
		}
	}
/************************************************************************/
	public static function getOccupants(){
		$db = static::getDB();
		if(isset($_GET['cancelid'])){
			$id = $_GET['cancelid'];
			$result = $db->query("UPDATE reservations_tb SET status = 'Canceled' WHERE id = $id");
			$result->execute();
		}
		if(isset($_GET['checkout'])){
			$id = $_GET['checkout'];
			$result = $db->query("UPDATE reservations_tb SET status = 'Checked Out' WHERE id = $id");
			$result->execute();
			try {
				$result = $db->query("SELECT * FROM reservations_tb WHERE id = $id");
				$reserve = $result->fetchAll(PDO::FETCH_ASSOC);
			}catch (Exception $e) {
				return false;
			}
			$loc = $reserve{0}['hotel'];
			$cat = $reserve{0}['room'];
			try {
				$result = $db->query("SELECT * FROM rooms_tb WHERE category = '$cat' AND branch = '$loc'");
				$roomie = $result->fetchAll(PDO::FETCH_ASSOC);
			}catch (Exception $e) {
				return false;
			}
			$new = $roomie{0}['occupied_rooms'] - 1;
			$result = $db->query("UPDATE rooms_tb SET occupied_rooms = $new WHERE category = '$cat' AND branch = '$loc'");
			$result->execute();
		}
		if($_SESSION['entry_username'] == 'SuperAdmin'){
			try {
				$result = $db->query("SELECT * FROM reservations_tb WHERE status = 'Checked In' ORDER BY check_in ASC");
				return $result->fetchAll(PDO::FETCH_ASSOC);
			}catch (Exception $e) {
				return false;
			}	
		}else{
			$branch = $_SESSION['entry_branch'];
			try {
				$result = $db->query("SELECT * FROM reservations_tb WHERE status = 'Checked In' AND hotel = '$branch' ORDER BY check_in ASC");
				return $result->fetchAll(PDO::FETCH_ASSOC);
			}catch (Exception $e) {
				return false;
			}
		}
	}
/************************************************************************/
	public function selectReserve(){
		if(isset($_GET['reserveid'])){
			$id = $_GET['reserveid'];
			try {
				$db = static::getDB();
				$result = $db->query("SELECT * FROM reservations_tb WHERE id = $id");
				return $result->fetchAll(PDO::FETCH_ASSOC);
			}catch (Exception $e) {
				return false;
			}
		}
	}
}