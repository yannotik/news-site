<?php

class Main{

    public static function getAdvertisingList(){

        $db = Db::getConnection();

        $advertisingList = array();

        $result = $db->query('SELECT DISTINCT * FROM advertising ORDER BY RAND() LIMIT 4');

        $i = 0;

        while($row = $result->fetch()){
            $advertisingList[$i]['id'] = $row['id'];
            $advertisingList[$i]['title'] = $row['title'];
            $advertisingList[$i]['company'] = $row['company'];
            $advertisingList[$i]['price'] = $row['price'];
            $advertisingList[$i]['link'] = $row['link'];

            $i++;
        }

        return $advertisingList;
    }

    public static function getImgPost(){

        $db = Db::getConnection();

        $imgPostList = array();

        $result = $db->query('SELECT id, title, image FROM news LIMIT 3');

        $i = 0;

        while($row = $result->fetch()){
            $imgPostList[$i]['id'] = $row['id'];
            $imgPostList[$i]['title'] = $row['title'];
            $imgPostList[$i]['image'] = $row['image'];

            $i++;
        }

        return $imgPostList;
    }


}