<?php

require_once('Controllers/Controller.php');
require_once('Repositories/CategoryRepository.php');
require_once('Models/Category.php');

class CategoriesController extends Controller {
    protected $categoryRepository;
    protected $repository;

    public function __construct(){
        parent::__construct();
        $this->categoryRepository = new CategoryRepository();
        $this->repository = new CategoryRepository();
    }

    public function  index(){

        return $this->view('admin/user/index');
    }
}
