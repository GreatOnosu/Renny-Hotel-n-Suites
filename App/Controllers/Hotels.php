<?php
namespace App\Controllers;
use \Core\View;
/************************************************************************/
use App\Models\Reservation;
/************************************************************************/
class Hotels extends \Core\Controller{
/************************************************************************/	
	protected function before(){

	}
/************************************************************************/	
	protected function after(){

	}
	public function abujaAction(){
		View::render('Hotels/hotels_abuja.php');
	}
	public function deltaAction(){
		View::render('Hotels/hotels_delta.php');
	}
	public function lagosAction(){
		View::render('Hotels/hotels_lagos.php');
	}
	public function selectRoomAction(){
		$rooms = Reservation::getRoom();
		View::render('Hotels/select_room.php', [
			'rooms' => $rooms
			]);
	}
	public function reservationAction(){
		View::render('Hotels/reservation.php');
	}
	public function successAction(){
		$reserve = Reservation::makeReservation();
		View::render('Hotels/success.php', [
			'reserve' => $reserve
			]);
	}
}