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
            <div class="row">
        <font size="4" color="blue">Tuna Cafe Results Received</font>
            </div>
        <?php
        $menu = array('Tuna Casserole', 'Tuna Sandwich', 'Tuna Pie', 'Grilled Tuna', 'Tuna Surprise');
        $prefer = $_GET['prefer'];
        if(count($prefer) == 0){
            print'<div class="row sub-title">Oh no! Please pick something as your favorite!</div>';
        }
        else{
            print'<div class="row sub-title">Your selections were <ul></div>';
            foreach($prefer as $item){
                print"<li>$menu[$item]</li>";
            }
            print("</ul>");
        }
        ?>
            </div>
        </div>
    </div>
    </div>
    </body>
</html>