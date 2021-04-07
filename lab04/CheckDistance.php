<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="./style.css">
        <div class="row main-title">
        <title>Distance and Time Calculations</title>
        </div>
        
    </head>
    <body>
    <div class="container-fluid mw-40" >
    <div class="row">
        <div class="col-12">
            <div id = "shadow-box" class="jumbotron min-vh-100 text-center m-0 bg-info d-flex flex-column justify-content-center ">
            <div class="row">
            <?php
        $cities = array('Dallas' => 803,
            'Toronto' => 435,
            'Boston' => 848,
            'Nashville' => 406,
            'Las Vegas' => 1526,
            'San Francisco' => 1835,
            'Washington, DC' => 595,
            'Miami' => 1189,
            'Pittsburgh' => 409);
        $destination = $_POST["destination"];
        if (count($destination) > 0) {
            print'<div class="row sub-title"> From Chicago to:</div>';
            // print 'From Chicago to:';
            print '
            <table class="table table-striped table-dark" border="1"><thead><tr> <th>No.</th> <th>Destination</th> <th>Distance</th> <th>Driving time</th> <th>Walking time</th> </tr> </thead> <tbody>';
            $i = 0;
            foreach ($destination as $item){
                $i++;
                if(isset($cities[$item])){
                
                    $distance = $cities[$item];
                    $time = round(($distance / 60), 2);
                    $walktime = round(($distance / 5), 2);
                    print "<tr><td>$i</td><td>$item</td><td>$distance</td><td>$time</td><td>$walktime</td></tr>";
                }else{
                    print "<tr><td>$i</td><td>$item</td><td colspan=\"3\">N/A</td>";
                }
            }

            print '</tbody></table>';
        } else {
            print "Sorry, there is no destination";
        }
//       
//            if(isset($cities[$destination])){
//                $distance = $cities[$destination];
//                $time = round(($distance/60),2);
//                $walktime = round(($distance/5),2);
//                print "The distance between Chicago and <I>$destination</I>is $distance miles.";
//                print "<br>Driving at 60 miles per hour it would take $time hours.";
//                print "<br>Walking at 5 miles per hour it would take $walktime hours.";
//            }else{
//                print "Sorry, do not have destination information for $destination.";
//            }
        ?>
            </div>
            </div>
        </div>
    </div>
    </div>
       
    </body>
</html>