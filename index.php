<?php

    class movie{
        public $title;
        public $lenguage;

        // COSTRUTTORE LINGUA
        function __construct($_lenguage){
            $this->lenguage = $_lenguage;
        }

        // METODO
        function set_title($title) {
            $this->title = $title;
        }
    }

    // NUOVO OGGETTO ISTANZIATO (BATMAN)
    $batman = new movie('English');
    $batman->title = 'Batman';

    var_dump($batman);

    // NUOVO OGGETTO ISTANZIATO (SPIDER-MAN)
    $spider_man = new movie('German');
    $spider_man->title = 'Spider Man';

    var_dump($spider_man);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>