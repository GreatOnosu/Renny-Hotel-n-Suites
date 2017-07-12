<?php
namespace App\Controllers;
use \Core\View;
use App\Models\Reservation;
/************************************************************************/	
class Home extends \Core\Controller{
/************************************************************************/	
	protected function before(){

	}
/************************************************************************/	
	protected function after(){

	}
	public function indexAction(){
		
		View::render('Home/index.php');
	}
	public function hotelsAction(){
		View::render('Home/our_hotels.php');
	}
	public function galleryAction(){
		View::render('Home/gallery.php');
	}
	public function contactsAction(){
		View::render('Home/contact_us.php');
	}
	public function loginAction(){
		$login = Reservation::checkLogin();
		View::render('Home/login.php', [
			'login' => $login
			]);
	}
}