<html>
    <head>
        <title>Coin flip result</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        srand((double) microtime() * 10000000);
        $flip = rand(0, 1);
        $pick = $_POST['pick'];
        if ($flip == 0 && $pick == 0) {
            print "The flip = $flip, which is heads! <br> ";
            print "<h1>You got it right</h1>";
        } elseif ($flip == 0 && $pick == 1) {
            print "The flip = $flip, which is heads! <br> ";
            print "<h1>You got it wrong</h1>";
        } elseif ($flip == 1 && $pick == 1) {
            print "The flip = $flip, which is tails! <br> ";
            print "<h1>You got it right</h1>";
        } elseif ($flip == 1 && $pick == 0) {
            print "The flip = $flip, which is tails! <br> ";
            print "<h1>You got it wrong</h1>";
        } else {
            print "<h1>Illegal state</h1>";
        }
        ?>
    </body>
</html>
