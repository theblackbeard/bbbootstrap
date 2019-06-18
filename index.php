<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
    .nospace{
        padding: 0;
        margin: 0;
    }
</style>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    include_once("vendor/autoload.php");

    use Source\BBBootstrap\Thumbnails;
    use Source\BBBootstrap\Alert;
    use Source\BBBootstrap\Panel;

    $data = array(
        array("https://via.placeholder.com/300x200", "http://www.google.com.br"),
        array("https://via.placeholder.com/300x200", "http://www.google.com.br"),
        array("https://via.placeholder.com/300x200", "http://www.google.com.br"),
        array("https://via.placeholder.com/300x200", "http://www.google.com.br"),
        array("https://via.placeholder.com/300x200", "http://www.google.com.br"),
        array("https://via.placeholder.com/300x200", "http://www.google.com.br"),
        array("https://via.placeholder.com/300x200", "http://www.google.com.br")

    );

    //Thumbnails::show($data, '', '', '','', true);
    
    //Alert::show("Teste de Alerta", Alert::SUCCESS);



    $p = array(
            "title" => "Teste de Titulo",
            "body" => "corpo",
            "footer" => "<button>Salvar</button>"
    );

    $css = array(
        "main" => array("css1", "css2"),
        "body" => array("nospace")
    );


    Panel::show($p, Panel::PI, true, true);

