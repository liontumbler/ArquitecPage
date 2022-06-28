<?php
/**
 * Autor:Edwin velasquez Jimenez
 */
class Pagina
{
    public function __construct($title = 'Document', $meta = '', $css = '', $js = '')
    {
        ?>
        <!DOCTYPE html>
        <html lang="es">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="Author" lang="es" content="" />
                <meta name="copyright" content="Copyright © pagina 2022" />
                <?=$meta?>
                <title><?=$title?></title>
                <link rel="icon" type="image/x-icon" href="../img/logo.ico" />

                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
                
                <!--librerias extra para todas las vistas-->


                <?=$css?>
            </head>
            <body>
                <div id="paginaNav"><?=$this->nav();?></div>
                <div id="content"></div>
                <div id="paginaFooter"><?=$this->footer();?></div>
                
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                <?=$js?>
            </body>
        </html>
        <?php
    }

    public function nav()
    {
        ?>
        <!--escribir el nav-->

        <?php
    }

    public function footer($content = '')
    {
        ?>
        <!--escribir el footer-->
        
        <?php
    }
}
?>