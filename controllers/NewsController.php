<?php

/*include_once ROOT.'/models/News.php';
include_once ROOT.'/components/DB.php';*/

class NewsController
{
	
	public function actionIndex()
	{
		$newsList = array();
		$newsList = News::getNewsList();

		include_once (ROOT.'/views/news/index.php');
	}

	public function actionView($id){
		
		if($id){
			$newsItem = News::getNewsItemById($id);
		}

		include_once (ROOT.'/views/news/view.php');
		return true;
	}
}