<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<?php
    include_once("vendor/autoload.php");

    use Source\BBBootstrap\Thumbnails;
    use Source\BBBootstrap\Alert;

    $data = array(
        array("https://via.placeholder.com/300x200", "http://www.google.com.br"),
        array("https://via.placeholder.com/300x200", "http://www.google.com.br"),
        array("https://via.placeholder.com/300x200", "http://www.google.com.br"),
        array("https://via.placeholder.com/300x200", "http://www.google.com.br"),
        array("https://via.placeholder.com/300x200", "http://www.google.com.br"),
        array("https://via.placeholder.com/300x200", "http://www.google.com.br"),
        array("https://via.placeholder.com/300x200", "http://www.google.com.br")

    );

    Thumbnails::show($data, '', '', '','', true);
    
    Alert::show("Teste de Alerta", Alert::SUCCESS);