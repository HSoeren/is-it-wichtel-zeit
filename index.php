<!DOCTYPE HTML>
<html lang="de">
    <head>
        <title>Wichteln</title>
        <meta charset="utf-8">
        <meta name="robots" content="noindex, nofollow"/>
        <meta name="revisit-after" content="7 days"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- meta for open graph -->
        <meta property="og:title" content="Wichteln">
        <!-- link sources -->
        <link href="/style.css" rel="stylesheet">
    </head>

    <body>
    <div id="text">
        <?php 
            $month = date('m');
            $message = "Kein Wichteln<br/>🎁<br/>im ";
            
            switch($month) {
                case 1:
                    $message = $message . "Januar";
                    break;
                case 2:
                    $message = $message . "Februar";
                    break;
                case 3:
                    $message = $message . "März";
                    break;
                case 4:
                    $message = $message . "April";
                    break;
                case 5:
                    $message = $message . "Mai";
                    break;
                case 6:
                    $message = $message . "Juni";
                    break;
                case 7:
                    $message = $message . "Juli";
                    break;
                case 8:
                    $message = $message . "August";
                    break;
                case 9:
                    $message = $message . "September";
                    break;
                case 10:
                    $message = $message . "Oktober";
                    break;
                case 11:
                    $message = $message . "November";
                    break;
                case 12:
                    $message = "Wichtelzeit 🎄";
                    break;
                default:
                    $message = "Kaputt 🔧";
                    break;
            }
            echo $message;
        ?> 
    </div>
    </body>
</html>