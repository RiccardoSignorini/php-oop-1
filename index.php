<?php

    class movie{
        public $title;
        public $lenguage;

        function __construct($_lenguage){
            $this->lenguage = $_lenguage;
        }
    }

    $batman = new movie('English');
    $batman->title = 'Batman';

    var_dump($batman);

    $spider_man = new movie('German');
    $spider_man->title = 'Spider Man';

    var_dump($spider_man)

?>