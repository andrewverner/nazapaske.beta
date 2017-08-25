<html>
    <head>
        <title></title>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <?php Yii::app()->clientScript->registerCSSFile('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css'); ?>
        <?php Yii::app()->clientScript->registerCSSFile('/css/style.css'); ?>
    </head>
    <body>

        <div id="content">
            <div class="container">
                <div class="top-nav">
                    <ul class="top-menu">
                        <li><a href="#">EINS</a></li>
                        <li><a href="#">ZWEI</a></li>
                        <li><a href="#">DREI</a></li>
                        <li><a href="#">VIER</a></li>
                        <li><a href="#">FEUNF</a></li>
                    </ul>
                </div>
            </div>

            <div class="container">
                <?= $content; ?>
            </div>
        </div>

    </body>
</html>
