<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="./style.css">
        <title>Tuna Cafe</title>
    </head>
    <body>
    <div class="container-fluid mw-40 mt-40" >
    <div class="row">
        <div class="col-12">
            <div id = "shadow-box" class="jumbotron min-vh-100 tm-0 bg-info d-flex flex-column justify-content-center">
            <div class="row justify-content-center text-center">
        <font size ="4" color="blue">
        Welcome to the Tuna Cafe survey!</font>
            </div>
        <form action="TunaResult.php" method="GET">
            <?php
            $menu = array('Tuna Casserole', 'Tuna Sandwich', 'Tuna Pie', 'Grilled Tuna', 'Tuna Surprise');
            $bestseller = 2;
            print('<div class="row justify-content-center text-center sub-title">
            Please indicate all your favotie dishes.<br>
            </div>');
            for ($i = 1; $i < count($menu); $i++) {
                print "<input type=\"checkbox\" name=\"prefer[]\" value=$i>$menu[$i]";
                if ($i == $bestseller) {
                    print "<font color=red> Our best seller!!!</font>";
                }
                print"<br>";
            }
            ?>
            <div class="row mt-20">
            <input type="submit" value="Submit" class="btn btn-submit mt-20">
            <input type="reset" value="Reset" class="btn btn-reset mt-20">
            </div>
            <!-- <input type="submit" value="submit">
            <input type="reset" value="reset"> -->
        </form>
            </div>
        </div>
    </div>
    </div>
    </body>
</html>