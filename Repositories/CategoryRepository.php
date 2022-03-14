<?php

class CategoryRepository{
    public function createCategory($data)
    {



        $dataCreate = [
            'name'      => $data['name'],
            'parentId' => $data['parentId'],
        ];



        return (new Category())->create($dataCreate);
    }

    public function updateCategory($category, $data)
    {

        $dataUpdate = array(

            'name'         => isset($data['name']) ? $data['name'] : $category->name,
            'parentId'    => isset($data['parentId']) ? $data['parentId'] : $category->parentId,
        );

        $category->update($dataUpdate);

        return $category;
    }


    public function getAllCategory(){
        return (new Category())->getListCategory([],"ORDER BY 'name'");
    }
}