<?php

class Category{

    public static function getCategoryList(){

        $db = Db::getConnection();

        $categoryList = array();

       $result = $db->query('SELECT id, title FROM category');

        //$result = $db->query('SELECT n.id, n.title, n.id_category FROM news n INNER JOIN category c ON n.id_category = c.id');

        $i = 0;

        while($row = $result->fetch()){
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['title'] = $row['title'];

            $i++;
        }

        return $categoryList;
    }


}