<html>
    <head>
        <title>Radian Degree Converter</title>
        <meta charset="UTF-8">
    </head>
    <body>
        
        <form action="" method="GET">
            <h3>Radian Degree Converter</h3>
            <br>
            Input a number: <input type="text" name="input"><br>
            <input type="radio" name="converter" value="degree">Degree to Radian</>
            <input type="radio" name="converter" value="radian">Radian to Degree</>
            <br>
            <input type="submit" name="Convert">
        </form>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
            
        
            <?php
                function degreeToRadian($d){
                    $r = $d * (pi() / 180);
                    return $r;
                }
            
                function radianToDegree($r){
                    $d = $r * (180 / pi());
                    return $d;
                }
                if(isset($_GET["Convert"])){
                    if(!is_numeric($_GET["input"]) || !isset($_GET["converter"])){
                        print "You didn't input a number or choose converter!";
                    } else {
                        $input = $_GET["input"];
                        if($_GET["converter"] == "degree"){
                            $out= degreeToRadian($_GET['input']);
                            print "$input degrees = $out radians.";
                        } else {
                            $out = radianToDegree($_GET['input']);
                            print "$input radians = $out degrees.";
                        }
                        
                    }
                }
                
                
            ?>
            
        </form>
    </body>
</html>