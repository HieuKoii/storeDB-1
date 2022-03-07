<?php
require_once('Models/Model.php');

class Category extends Model{
    protected $table = 'categories';
    protected $attributes = [
        'name',
        'alias',
        'parent_id',
    ];

    public function __construct($data = [])
    {
        parent::__construct($data);
    }
}