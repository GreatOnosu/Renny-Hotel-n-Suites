<?php
namespace App\Controllers;
use \Core\View;
/************************************************************************/	
use App\Models\User;
use App\Models\Room;
use App\Models\Transaction;
/************************************************************************/	
class Admin extends \Core\Controller{
/************************************************************************/	
	protected function before(){

	}
/************************************************************************/	
	protected function after(){

	}
/************************************************************************/
	public function indexAction(){
		$all = User::calcTotal();
		$staff = $all['user'];
		$reserve = $all['reserve'];
		$room = $all['room'];
		$trans = $all['trans'];
		View::render('Admin/index.php', [
			'staff' => $staff,
			'reserve' => $reserve,
			'room' => $room,
			'trans' => $trans
			]);
	}
/************************************************************************/	
	public function staffAction(){
		$get_staff = User::getUser();
		View::render('Admin/staff.php', [
			'get_staff' => $get_staff
			]);
	}
/************************************************************************/
	public function editstaffAction(){
		$upd = new User;
		$update = $upd->selectUser();
		View::render('Admin/edit_staff.php', [
			'update' => $update
			]);
	}
/************************************************************************/
	public function addstaffAction(){
		$add_staff = User::addUser();
		View::render('Admin/add_staff.php', [
			'add_staff' => $add_staff
			]);
	}
/************************************************************************/
	public function addroomAction(){
		$add_room = Room::addRoom();
		View::render('Admin/add_room.php', [
			'add_room' => $add_room
			]);
	}
/************************************************************************/
	public function roomAction(){
		$get_room = Room::getRoom();
		View::render('Admin/rooms.php', [
			'get_room' => $get_room
			]);
	}
/************************************************************************/
	public function editroomAction(){
		$upd = new Room;
		$update = $upd->selectRoom();
		View::render('Admin/edit_room.php', [
			'update' => $update
			]);
	}
/************************************************************************/
	public function reservationAction(){
		$get_reserve = Transaction::getReserve();
		View::render('Admin/reservation.php', [
			'get_reserve' => $get_reserve
			]);
	}
/************************************************************************/
	public function occupiedAction(){
		$get_reserve = Transaction::getOccupants();
		View::render('Admin/occupied.php', [
			'get_reserve' => $get_reserve
			]);
	}
/************************************************************************/
	public function editreservationAction(){
		$upd = new Transaction;
		$update = $upd->selectReserve();
		View::render('Admin/edit_reservation.php', [
			'update' => $update
			]);
	}
/************************************************************************/
public function logoutAction(){
		View::render('Admin/logout.php');
	}
/************************************************************************/
	public function transactionAction(){
		$get_trans = Transaction::getTrans();
		View::render('Admin/transaction.php', [
			'get_trans' => $get_trans
			]);
	}
}