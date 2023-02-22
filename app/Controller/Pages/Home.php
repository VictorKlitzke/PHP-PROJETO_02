<?php

    namespace App\Controller\Pages;

    use App\Utils\View;

    class Home extends Page{
        /**
         * @return string
         */
        public static function getHome(){
            $content = View::render('pages/home', [
                'name' => 'Victor',
                'description' => 'vdfdfdfvdfvdfdffverhnhjghwehterhrhryh'
            ]);
            return parent::getPage('ERP WEB', $content);

        }
    }