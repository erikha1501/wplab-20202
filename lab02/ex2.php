<html>
    <head> <title> Receiving input </title> </head>
    <body>
        <font size=5>Thank you: Got your input!</font>
        <?php
            $name = $_POST["name"];
            $class = $_POST["class"];
            $school = $_POST["school"];
            $hobby = $_POST["hobby"];
            print("<br>Your username is: $name");
            print("<br>Your class: $class");
            print("<br>And your school: $school");
            print("<br>Your hobby is: ");
            foreach($hobby as $val) {
                print("${val}");
                if ($val != end($hobby)) {
                    print(", ");
                } else print(".");
            }
            print("<br>");
        ?>            
    </body>

</html>