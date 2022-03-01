<?php
/**
 *File name : HomeController.php  / Date: 12/21/2021 - 11:16 PM
 *Code Owner: Tke / Phone: 0367313134 / Email: thedc.it.94@gmail.com
 */

require_once('Controllers/Controller.php');
require_once('Models/User.php');

class HomeController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $_SESSION['save'] = '1';
        return $this->view('front-end/index');
    }
    public function cart(){

        return $this->view('front-end/cart');
    }
    public function products(){

        return $this->view('front-end/products');
    }

    public function topbrands(){

        return $this->view('front-end/topbrands');
    }

    public function contact(){

        return $this->view('front-end/contact');
    }

    public function detail(){

        return $this->view('front-end/detail');
    }




}