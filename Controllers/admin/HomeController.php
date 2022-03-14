<?php
/**
 *File name : HomeController.php  / Date: 12/21/2021 - 11:16 PM
 *Code Owner: Tke / Phone: 0367313134 / Email: thedc.it.94@gmail.com
 */

require_once('Controllers/Controller.php');
require_once('libs/Validator.php');
require_once('Repositories/UserRepository.php');
require_once('Repositories/Authenticate.php');
require_once('Models/User.php');

class HomeController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function admin(){

        return $this->view('admin/index');
    }

    public function slogan(){

        return $this->view('admin/slogan');
    }

    public function social(){

        return $this->view('admin/social');
    }
    public function copyright_view(){

        return $this->view('admin/copyright');
    }
    public function slideradd(){

        return $this->view('admin/slideradd');
    }
    public function sliderlist(){

        return $this->view('admin/sliderlist');
    }
    public function addcat(){

        return $this->view('admin/catadd');
    }
    public function catlist(){

        return $this->view('admin/catlist');
    }
    public function addproduct(){

        return $this->view('admin/productadd');
    }
    public function productlist(){

        return $this->view('admin/productlist');
    }


}