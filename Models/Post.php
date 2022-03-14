<?php
require_once('Models/Model.php');

class Post extends Model{
    protected $table = 'posts';


    protected $attributes = [

        'title',
        'content',
        'link',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function __construct($data = [])
    {
        parent::__construct($data);
    }

    /******************************************/




    /******************************************/

}