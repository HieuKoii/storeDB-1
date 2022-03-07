<?php

class CategoryRepository{
    public function createUser($data)
    {



        $dataCreate = [
            'name'      => $data['name'],
            'alias'     => $data['alias'],
            'parent_id' => $data['parent_id'],
        ];



        return (new Category())->create($dataCreate);
    }

    public function updateCategory($category, $data)
    {

        $dataUpdate = array(

            'name'         => isset($data['name']) ? $data['name'] : $category->name,
            'alias'    => isset($data['alias']) ? $data['alias'] : $category->alias,
            'parent_id'    => isset($data['parent_id']) ? $data['parent_id'] : $category->parent_id,
        );

        $category->update($dataUpdate);

        return $category;
    }

    public function getAllCategory(){
        return (new Category())->getList([],"ORDER BY 'name'");
    }
}