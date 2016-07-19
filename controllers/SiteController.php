<?php


class SiteController
{

    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoryList();

        $advertising = array();
        $advertising = Main::getAdvertisingList();

        $imgPost = array();
        $imgPost = Main::getImgPost();

        require_once (ROOT.'/views/site/index.php');

        return true;
    }

    // Action contacts
    public function actionContacts()
    {
        $userEmail = false;
        $userText = false;
        $result = false;

        if (isset($_POST['submit'])) {

            $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];
            $errors = false;

          /*  if (!User::checkEmail($userEmail)) {
                $errors[] = 'Неправильный email';
            }*/

            if ($errors == false) {

                $adminEmail = 'yannotik13@gmail.com';
                $message = "Текст: {$userText}. От {$userEmail}";
                $subject = 'Тема письма';
                $result = mail($adminEmail, $subject, $message);
                $result = true;
            }
        }

        require_once(ROOT .'/views/site/contacts.php');
        return true;
    }

    // Action about

    public function actionAbout()
    {
        require_once(ROOT .'/views/site/about.php');
        return true;
    }
}