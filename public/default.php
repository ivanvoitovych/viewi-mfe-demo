<?php

use Viewi\App;

ob_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        Targeted Renderer | Viewi
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.muicss.com/mui-0.10.3/css/mui.min.css">
    <script src="/app.js"></script>
    <style>
        /**
        * Sidebar CSS
        */

        #sidebar {
            background-color: #E57373;
            padding: 15px;
        }

        #content {
            padding: 26px;
        }

        @media (min-width: 768px) {
            #sidebar {
                position: fixed;
                top: 0;
                bottom: 0;
                width: 180px;
                height: 100%;
                padding-top: 30px;
            }

            #content {
                margin-left: 240px;
                padding: 0 26px 0 0;
            }
        }
    </style>
</head>

<body>
    <div id="sidebar">
    </div>
    <div id="content">
        <div>
            <h1>Testing Viewi Partial render with custom target</h1>
            <p>
                Viewi application should be rendered below.
            </p>
        </div>
        <div id="todo-app">
        </div>
        <div id="counter-app">
        </div>
    </div>
    <?= App::getScriptsHtmlCode() ?>
</body>

</html>
<?php

$html = ob_get_clean();

return $html;
