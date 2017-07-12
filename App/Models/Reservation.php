<?php
namespace App\Models;
use PDO;
use App\Config;
class Reservation extends \Core\Model{

	public static function checkLogin(){
		if(isset($_POST['btn_login'])){
			$user = $_POST['username'];
			$pass = $_POST['password'];
			try {
				$db = static::getDB();
				$result = $db->prepare("SELECT * FROM users_tb WHERE username = '$user' AND password = '$pass'");
				$result->execute();
				return $result->fetchAll(PDO::FETCH_ASSOC);
			} catch (Exception $e) {
				return false;
			}
		}
	}
/************************************************************************/
	public static function getRoom(){
		$db = static::getDB();
		if(isset($_SESSION['hotel'])){
			$hotel = $_SESSION['hotel'];
			try {
				$result = $db->query("SELECT * FROM rooms_tb WHERE branch = '$hotel' ORDER BY price ASC");
				return $result->fetchAll(PDO::FETCH_ASSOC);
			}catch (Exception $e) {
				return false;
			}
		}
	}
/************************************************************************/
	public static function makeReservation(){
		if(isset($_POST['btn_pay'])){
			$get_fname = htmlspecialchars($_POST['fname']);
			$get_email = htmlspecialchars($_POST['email']);
			$get_phone = htmlspecialchars($_POST['phone']);
			$get_nationality = htmlspecialchars($_POST['nationality']);
			$get_in = $_POST['in'];
			$get_out = $_POST['out'];
			$get_hotel = htmlspecialchars($_POST['hotels']);
			$get_type = htmlspecialchars($_POST['room_type']);
			$get_guest = htmlspecialchars($_POST['guests']);
			$get_mode = htmlspecialchars($_POST['mode']);
			$get_amount = htmlspecialchars($_POST['amount']);
			$ref_code = "Renny@".rand(100000,999999);
			$bindings = array(
				'ref' 			=>	$ref_code,
				'fname' 		=>	$get_fname,
				'email'			=>	$get_email,
				'phone'			=> 	$get_phone,
				'nationality'	=>	$get_nationality,
				'ins'			=>	$get_in,
				'outs'			=>	$get_out,
				'hotel'			=> 	$get_hotel,
				'type'			=> 	$get_type,
				'guest'			=>	$get_guest,
				'mode'			=>	$get_mode,
				'amount'		=>	$get_amount,
				'status'		=>	'Waiting',
			);
			try {
				$db = static::getDB();
				$result = $db->prepare("INSERT INTO reservations_tb (ref_code, full_name, email, phone, nationality, check_in, check_out, hotel, room, guest, payment_mode, amount, status) VALUES (:ref, :fname, :email, :phone, :nationality, :ins, :outs, :hotel, :type, :guest, :mode, :amount, :status)");
				$result->execute($bindings);
				return $ref_code;
			}catch (Exception $e) {
				return false;
			}
		}
	}
/************************************************************************/
}