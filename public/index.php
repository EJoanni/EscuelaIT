<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
    <h1>Prueba de texto</h1>
    <p>Código para servidor virtual en  PHP <b>php -S loscalhost:8009 -t public/</b></p>

    <?php
    require '../vendor/autoload.php';
    use Carbon\Carbon;
    use Lib\breadcrumbs;
    use Lib\Dates;
    

    $date = Carbon::now();
    echo $date->format('Y');
    Carbon::setlocale('es');
    $today = Carbon::now();
    $tomorrow = $today->adddays(1);
    echo $tomorrow->isoFormat("dddd DD [de] MMMM");

    //include '../Lib/breadcrumbs.php';
    //include '../Lib/Dates.php';
    $crumbs = new Breadcrumbs();
    $crumbs->add("/link",'Sección');
    $crumbs->show();
    ?>
    <p>Con PHP es fácil hacer Spaguetti Code y mezclar la presentación, el html con código</p>
    <p>Pero el <?php echo Dates::longdate(Dates::tomorrow());?> Lo vamos a solucionar</p>
</body>
</html>