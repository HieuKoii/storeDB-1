<?php
/**
 *File name : UsersController.php  / Date: 1/20/2022 - 2:26 PM
 *Code Owner: Tke / Phone: 0367313134 / Email: thedc.it.94@gmail.com
 */

require_once('Controllers/Controller.php');
require_once('libs/Validator.php');
require_once('Repositories/UserRepository.php');
require_once('Repositories/Authenticate.php');
require_once('Models/User.php');

class UsersController extends Controller
{
    protected $userRepository;
    protected $authenticate;
    protected $repository;

    public function __construct(){
        parent::__construct();
        $this->userRepository = new UserRepository();
        $this->authenticate = new Authenticate();
        $this->repository = new UserRepository();
    }

    public function index(){
        $users = $this->repository->getAllUser();

        return $this->view('admin/user/index', compact('users'));
    }

    public function showFormEdit(){

        $user = (new User())->find($this->data['user_id']);

        if(is_null($user)){
            return $this->response(['message' => 'Không tìm thấy người dùng']);
        }

        return $this->view('admin/user/edit-user',compact('user'));


    }

    public function delete(){
        $user = (new User())->find($this->data['user_id']);

        if(is_null($user)){
            return $this->response([
                'code'    => 404,
                'message' => 'Không tìm thấy người dùng'
            ]);
        }

        $user->delete();
        return $this->response([
            'code'    => 200,
            'message' => 'Xóa người dùng thành công'
        ]);
    }

    public function updateUser(){
        $user = (new User())->find($this->data['id']);
        if(is_null($user)){
            return $this->response([
                'code'    => 404,
                'message' => 'User not found'
            ]);
        }


        //TODO SOMETHING: validate data
        $name=$this->repository->analysisName($this->data['fullname']);
        // nối mảng
        $this->data=array_merge($this->data,$name);

        $user=$this->repository->updateUser($user, $this->data);


        return $this->response([
            'code' => 200,
            'message' => 'Edit successfully'
        ]);
    }
    public function showFormCreate(){

        return $this->view('admin/user/create-user');

    }

    public function create_user(){

        $validate = Validator::validateEmpty($this->data, [
            'username','password','re_password','fullname','date_of_birth'
        ]);


        if(!$validate['valid']){
            return $this->response([
                'message' => $validate['message']
            ]);
        }

        // tạo tài khoản
        $user = $this->userRepository->createUser($this->data);

        // chuyển trang sửa thông tin người dùng
        // kèm báo luôn kết quả : bạn đã tạo người dùng thành công

        return $this->redirect(Route::name('admin.users'));
    }
}