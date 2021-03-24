<html>
    <head>
        <title>Expression Example</title>
    </head>
    <body>
        <?php
            $firstname = "John";
            $lastname = "Smith";
            $fullname = $firstname . $lastname;
            print ("Fullname=$fullname"); 
            $fullname = "$firstname $lastname";
            print "<br>$fullname<br>";

            $comments = "Good Job";
            $len = strlen($comments);
            print ("Length=$len");

            $in_name = " Joe Jackson ";
            $name = trim($in_name);
            print ("<br>name=$name<br>");

            $inquote = "Now Is The Time";
            $lower = strtolower($inquote);
            $upper = strtoupper($inquote);
            print ("<br>upper=$upper lower=$lower<br>");

            $date = "12/25/2002";
            $month = substr($date, 0, 2);
            $day = substr($date, 3, 2);
            print ("<br>Month=$month Day=$day<br>");
            $year = substr($date, 6);
            print ("Year=$year<br>");


        ?>
    </body>
</html>