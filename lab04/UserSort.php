<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="./style.css">
</head>
<body>
<?php

function user_sort($a, $b) {
    // smarts is all-important, so sort it first
    if ($b == 'smarts') {
        return 1;
    } else if ($a == 'smarts') {
        return -1;
    }

    return ($a == $b) ? 0 : (($a < $b) ? -1 : 1);
}

$values = array(
    'name' => 'Buzz Lightyear',
    'email_address' => 'buzz@starcommand.gal',
    'age' => 32,
    'smarts' => 'some'
);
$copy_values = array(
    'name' => 'Buzz Lightyear',

    'email_address' => 'buzz@starcommand.gal',

    'age' => 32,

    'smarts' => 'some'
);

if (isset($_POST['submitted'])) {
    $sort_type = $_POST['sort_type'];
    if ($sort_type == 'usort' || $sort_type == 'uksort' || $sort_type == 'uasort') {
        $sort_type($values, 'user_sort');
    } else {
        $sort_type($values);
    }
}
?>
<div class="container mt-40 mw-80" >
 <form action="UserSort.php" method="post">
    <div class="row">
    <div id = "shadow-box" class="jumbotron min-vh-100 m-0 bg-info d-flex flex-column justify-content-center ">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <div class="form-input">
        <input type="radio" name="sort_type" value="sort" checked="checked" />
        Standard sort<br />
        </div>
        <div class="form-input">
        <input type="radio" name="sort_type" value="rsort" />   Reverse sort<br />
</div>
<div class="form-input">
        <input type="radio" name="sort_type" value="usort" />   User-defined sort<br />
</div>    
    </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <input type="radio" name="sort_type" value="ksort" />   Key sort<br />
        <input type="radio" name="sort_type" value="krsort" />  Reverse key sort<br />
        <input type="radio" name="sort_type" value="uksort" />  User-defined key sort<br />
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <input type="radio" name="sort_type" value="asort" />  Value sort<br />
        <input type="radio" name="sort_type" value="arsort" /> Reverse value sort<br />
        <input type="radio" name="sort_type" value="uasort" /> User-defined value sort<br />
        </div>
    

    <p align="center">
        <input type="submit" value="Sort" name="submitted" class="btn btn-submit mt-20"/>
    </p>

    <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <p class="sub-title">
        Values before sorted: 
        <!-- <?php 
        if(isset($_POST['submitted'])) { 
            $sort_type = $_POST['sort_type'];
            echo "sorted by $sort_type";
        } else 
            echo "unsorted";
        ?>: -->
    </p>

    <ul>
        <?php
        foreach ($copy_values as $key => $value) {
            echo "<li><b>$key</b>: $value</li>";
        }
        ?>
    </ul>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <p class="sub-title">
        Values 
        <?php 
        if(isset($_POST['submitted'])) { 
            $sort_type = $_POST['sort_type'];
            echo "sorted by $sort_type";
        } else 
            echo "unsorted";
        ?>:
    </p>

    <ul>
        <?php
        foreach ($values as $key => $value) {
            echo "<li><b>$key</b>: $value</li>";
        }
        ?>
    </ul>
        </div>
    </div>
    
    </div>
</form>
</body>
</html>
