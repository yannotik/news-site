<?php

/*include_once ROOT.'/models/News.php';
include_once ROOT.'/components/DB.php';*/


class CatalogController
{

    public function actionCategory($idCategory, $page = 1)
    {
        $categoryList = array();
        $categoryList = Category::getCategoryList();

        $categoryPost = array();
        $categoryPost = Post::getPostListByCategory($idCategory,$page);

        $total = Post::getTotalPostsListByCategory($idCategory);

        $pagination = new Pagination($total, $page, Post::LIMIT_POST, 'page-');

        include_once (ROOT.'/views/catalog/category.php');

        return true;
    }


}