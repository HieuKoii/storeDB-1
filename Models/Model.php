<?php

class Model{

    protected $table;
    protected $attributes = [];
    protected $db;

    public function __construct($data=[]){

        $this->db =  DB::getInstance();
        $this->setAttributes($data);

    }

    public function setAttributes($data){

        $this->attributes = array_merge($this->attributes, ['id','created_at','updated_at','deleted_at']);

        foreach($data as $field => $value){
            if(in_array($field,$this->attributes)){
                $this->$field = $value;
            }
        }

        return $this;
    }

    public function create($data){

        $data['created_at'] = date("Y-m-d H:i:s");
        $data['updated_at'] = date("Y-m-d H:i:s");

        foreach($data as $key => $value){
            if(!in_array($key,$this->attributes)){
                unset($data[$key]);
            }
        }

        $keys = array_keys($data);
        $keys = '(' . implode(', ',$keys) . ')';

        foreach($data as $key => $value){
            $data[':'.$key] = $value;
            unset($data[$key]);
        }

        $newKeys = array_keys($data);
        $newKeys = '(' . implode(', ',$newKeys) . ')';


        $query = 'INSERT INTO '.$this->table.' '.$keys.' VALUES '.$newKeys;
        $this->db->prepare($query)->execute($data);
        return $this->find($this->db->lastInsertId());

    }

    public function update($data){

        $data['updated_at'] = date("Y-m-d H:i:s");

        foreach($data as $key => $value){
            if(!in_array($key,$this->attributes)){
                unset($data[$key]);
            }
        }

        $attributesUpdate = array_keys($data);
        $attributesUpdate = implode("=?, ", $attributesUpdate);
        $attributesUpdate = $attributesUpdate."=? ";

        $valuesUpdate = array_values($data);

        $query = "UPDATE {$this->table} SET {$attributesUpdate} WHERE id={$this->id}";

        $this->db->prepare($query)->execute($valuesUpdate);
        return $this->find($this->id);
    }

    public function find($id){
        $query = "SELECT * FROM ".$this->table." WHERE id=? AND ISNULL(deleted_at)";
        $req = $this->db->prepare($query);
        $req->execute([$id]);
        $modelAttributes = $req->fetch();
        if(!$modelAttributes){
            return null;
        }

        return $this->setAttributes($modelAttributes);
    }

    public function deleteForever(){
        $query = "DELETE FROM {$this->table} WHERE id=?";
        return $this->db->prepare($query)->execute([$this->id]);
    }

    public function delete(){
        return $this->update([
            'deleted_at' => date("Y-m-d H:i:s")
        ]);
    }

    public function getList($statements=[], $addQuery = ''){

        $statementsText = empty($statements) ? "WHERE" :
            "WHERE ".implode(' AND ',$statements). " AND";

        $query = "SELECT * FROM {$this->table} ".$statementsText." ISNULL(deleted_at) ".$addQuery;

        $listModels = $this->db->query($query)->fetchAll();
        return array_map(function($model){
            $user = new User();
            $user->setAttributes($model);
            return $user;
        },$listModels);
    }

}