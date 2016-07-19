<?php

class Post{

    const LIMIT_POST = 5;


    public static function getPostListByCategory($idCategory = false, $page = 1){
        if($idCategory){

            $page = intval($page);
            $offset = ($page - 1) * self::LIMIT_POST;

            $db = Db::getConnection();
            $posts = array();
            $result = $db->query('SELECT id, title, date, description, image FROM news WHERE id_category = ' . $idCategory . ' ORDER BY id DESC LIMIT ' . self::LIMIT_POST . ' OFFSET ' . $offset);

            $i = 0;

            while($row = $result->fetch()){

                $posts[$i]['id'] = $row['id'];
                $posts[$i]['title'] = $row['title'];
                $posts[$i]['date'] = $row['date'];
                $posts[$i]['description'] = $row['description'];
                $posts[$i]['image'] = $row['image'];
                $i++;
            }
            return $posts;

        }
    }

    public static function getTotalPostsListByCategory($idCategory){

        $db = Db::getConnection();

        $result = $db->query('SELECT count(id) AS count FROM news WHERE id_category = ' . $idCategory);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $row = $result->fetch();

        return $row['count'];
    }

}