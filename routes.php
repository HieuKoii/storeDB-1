<?php

const CONTROLLERS = array(

    [
        'method'  => 'GET',
        'url'     => '/users',
        'name'    => 'users',
        'use'     => 'UserController',
        'action'  => 'index'
    ],

    //------------------- FRONT-END -----------------//


    //HOME
    [
        'method'  => 'GET',
        'url'     => '/',
        'name'    => 'home',
        'use'     => 'front-end/HomeController',
        'action'  => 'index'
    ],
    [
        'method'  => 'GET',
        'url'     => '/index',
        'name'    => 'index',
        'use'     => 'front-end/HomeController',
        'action'  => 'index'
    ],
    //CART
    [
        'method'  => 'GET',
        'url'     => '/cart',
        'name'    => 'cart',
        'use'     => 'front-end/HomeController',
        'action'  => 'cart'
    ],
    //CART
    [
        'method'  => 'GET',
        'url'     => '/cart',
        'name'    => 'cart',
        'use'     => 'front-end/HomeController',
        'action'  => 'cart'
    ],
    //PRODUCTS
    [
        'method'  => 'GET',
        'url'     => '/products',
        'name'    => 'products',
        'use'     => 'front-end/HomeController',
        'action'  => 'products'
    ],
    //TOP BRANDS
    [
        'method'  => 'GET',
        'url'     => '/topbrands',
        'name'    => 'topbrands',
        'use'     => 'front-end/HomeController',
        'action'  => 'topbrands'
    ],
    //CART
    [
        'method'  => 'GET',
        'url'     => '/cart',
        'name'    => 'cart',
        'use'     => 'front-end/HomeController',
        'action'  => 'cart'
    ],
    //CONTACT
    [
        'method'  => 'GET',
        'url'     => '/contact',
        'name'    => 'contact',
        'use'     => 'front-end/HomeController',
        'action'  => 'contact'
    ],
    //DETAIL
    [
        'method'  => 'GET',
        'url'     => '/detail',
        'name'    => 'detail',
        'use'     => 'front-end/HomeController',
        'action'  => 'detail'
    ],
    //LOGIN
    [
        'method'  => 'GET',
        'url'     => '/users/{user_id}/edit',
        'name'    => 'users.edit',
        'use'     => 'front-end/UserController',
        'action'  => 'edit'
    ],

    [
        'method'  => 'GET',
        'url'     => '/show-login',
        'name'    => 'auth.show-login',
        'use'     => 'front-end/AuthController',
        'action'  => 'showLogin'
    ],

    [
        'method'  => 'POST',
        'url'     => '/login',
        'name'    => 'auth.login',
        'use'     => 'front-end/AuthController',
        'action'  => 'login'
    ],

    [
        'method'  => 'GET',
        'url'     => '/logout',
        'name'    => 'logout',
        'use'     => 'front-end/AuthController',
        'action'  => 'logout'
    ],

    [
        'method'  => 'GET',
        'url'     => '/edit-profile',
        'name'    => 'edit-profile',
        'use'     => 'front-end/AuthController',
        'action'  => 'editProfile'
    ],

    [
        'method'  => 'POST',
        'url'     => '/update-profile',
        'name'    => 'update-profile',
        'use'     => 'front-end/AuthController',
        'action'  => 'updateProfile'
    ],

    [
        'method'  => 'POST',
        'url'     => '/register',
        'name'    => 'auth.register',
        'use'     => 'front-end/AuthController',
        'action'  => 'register'
    ],

    [
        'method'  => 'POST',
        'url'     => '/check-username',
        'name'    => 'auth.check-duplicate-username',
        'use'     => 'front-end/AuthController',
        'action'  => 'checkUsername'
    ],

    [
        'method'  => 'GET',
        'url'     => '/edit-profile',
        'name'    => 'edit-profile',
        'use'     => 'front-end/AuthController',
        'action'  => 'editProfile'
    ],

    [
        'method'  => 'POST',
        'url'     => '/update-profile',
        'name'    => 'update-profile',
        'use'     => 'AuthController',
        'action'  => 'updateProfile'
    ],


    //------------------- ADMIN -----------------//


    //INDEX
    [
        'method'  => 'GET',
        'url'     => '/admin',
        'name'    => 'index-admin',
        'use'     => 'admin/HomeController',
        'action'  => 'index'
    ],

    [
        'method'  => 'GET',
        'url'     => '/admin/users',
        'name'    => 'admin.users',
        'use'     => 'Admin/UsersController',
        'action'  => 'index'
    ],
    [
        'method'  => 'POST',
        'url'     => '/admin/users/show-form-edit',
        'name'    => 'admin.users.show-form-edit',
        'use'     => 'Admin/UsersController',
        'action'  => 'showFormEdit'
    ],

    [
        'method'  => 'POST',
        'url'     => '/admin/users/delete',
        'name'    => 'admin.users.delete',
        'use'     => 'Admin/UsersController',
        'action'  => 'delete'
    ],

    //  TITLE & SLOGAN
    [
        'method'  => 'GET',
        'url'     => '/slogan',
        'name'    => 'slogan',
        'use'     => 'admin/HomeController',
        'action'  => 'slogan'
    ],
    // SOCIAL MEDIA
    [
        'method'  => 'GET',
        'url'     => '/social',
        'name'    => 'social',
        'use'     => 'admin/HomeController',
        'action'  => 'social'
    ],
    // COPYRIGHT
    [
        'method'  => 'GET',
        'url'     => '/admin/copyright',
        'name'    => 'copyright',
        'use'     => 'admin/HomeController',
        'action'  => 'copyright_view'
    ],
    // SLIDER ADD
    [
        'method'  => 'GET',
        'url'     => '/admin/addslider',
        'name'    => 'slideradd',
        'use'     => 'admin/HomeController',
        'action'  => 'slideradd'
    ],
    // SLIDER LIST
    [
        'method'  => 'GET',
        'url'     => '/admin/sliderlist',
        'name'    => 'sliderlist',
        'use'     => 'admin/HomeController',
        'action'  => 'sliderlist'
    ],
    // CATEGORY ADD
    [
        'method'  => 'GET',
        'url'     => '/admin/addcat',
        'name'    => 'addcat',
        'use'     => 'admin/HomeController',
        'action'  => 'addcat'
    ],
    // CATEGORY LIST
    [
        'method'  => 'GET',
        'url'     => '/admin/catlist',
        'name'    => 'catlist',
        'use'     => 'admin/HomeController',
        'action'  => 'catlist'
    ],
    // ADD PRODUCT
    [
        'method'  => 'GET',
        'url'     => '/admin/addproduct',
        'name'    => 'addproduct',
        'use'     => 'admin/HomeController',
        'action'  => 'addproduct'
    ],
    // LIST PRODUCT
    [
        'method'  => 'GET',
        'url'     => '/admin/productlist',
        'name'    => 'productlist',
        'use'     => 'admin/HomeController',
        'action'  => 'productlist'
    ],


    //----------------------------------------------------------------//



    [
        'method'  => 'GET',
        'url'     => '/users/{user_id}/edit',
        'name'    => 'users.edit',
        'use'     => 'UserController',
        'action'  => 'edit'
    ],


); 
