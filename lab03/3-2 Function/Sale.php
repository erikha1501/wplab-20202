<html>
    <head>
        <title>Our Shop</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <font size="4" color="blue">
        <?php
        $today = date('l, F d, Y');
        print "Welcome on $today to our huge blowout sale! </font>";
        $month = date('m');
        $year = date('Y');
        $dayofyear = date('z');
        if ($month == 12 && $year == 2001) {
            $daysleft = 365 - $dayofyear + 10;
            print "<br> There are $daysleft sales days left";
        } elseif ($month == 1 && $year == 2002) {
            if ($dayofyear <= 10) {
                $daysleft = 10 - $dayofyear;
                print "<br> There are $daysleft sales days left";
            } else {
                print "<br>Sorry, our sale is over.";
            }
        } else {
            print "<br>Sorry, our sale is over.";
        }
        print "<br>Our sale ends on January 10, 2002";
        ?>
        </font>
    </body>
</html>
