<?php

require_once('Controllers/Controller.php');
require_once('Repositories/PostRepository.php');
require_once('Models/Post.php');
require_once('Models/User.php');
require_once('libs/Validator.php');
require_once('Repositories/Authenticate.php');

class PostsController extends Controller {
    protected $postRepository;
    protected $repository;

    public function __construct(){
        parent::__construct();
        $this->postRepository = new PostRepository();
        $this->repository = new PostRepository();
    }

    public function index(){
        //$categories = $this->categoryRepository->getAllCategory();
        //return $this->view('admin/category2/index',compact('categories'));
        return $this->view('admin/post/index');
    }

    public function showFormEdit(){

        $category = (new Category()) ->find($this->data['category_id']);


        if(is_null($category)){
            return $this->response(['message' => 'Không tìm thấy người dùng']);
        }



        return $this->view('admin/category2/edit-category',compact('category'));


    }

    public function updateCategory(){
        $category = (new Category())->find($this->data['category_id']);


        if(is_null($category)){
            return $this->response([

                'code'    => 404,
                'message' => 'Category not found'
            ]);
        }
        $category=$this->repository->updateCategory($category, $this->data);


        return $this->response([
            'code' => 200,
            'message' => 'Edit successfully'
        ]);
    }

    public function delete(){
        $category = (new Category())->find($this->data['category_id']);

        if(is_null($category)){
            return $this->response([
                'code'    => 404,
                'message' => 'Không tìm thấy người dùng'
            ]);
        }

        $category->delete();
        return $this->response([
            'code'    => 200,
            'message' => 'Xóa người dùng thành công'
        ]);
    }

    public function createCategory(){

        $categories = $this->categoryRepository->getAllCategory();

        // tạo tài khoản
        $category = $this->categoryRepository->createCategory($this->data);

        // chuyển trang sửa thông tin người dùng
        // kèm báo luôn kết quả : bạn đã tạo người dùng thành công

        return $this->view('admin/category2/index',compact('categories'));
    }

}
