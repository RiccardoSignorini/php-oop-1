<?php

    class movie{
        public $title;
        public $lenguage;
    }

    $batman = new movie();
    $batman->title = 'Batman';
    $batman->lenguage = 'English';

    var_dump($batman);

    $spider_man = new movie();
    $spider_man->title = 'Spider Man';
    $spider_man->lenguage = 'German';

    var_dump($spider_man)

?>