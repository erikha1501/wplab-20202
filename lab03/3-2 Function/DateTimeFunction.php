<html>
    <head>
        <title>Date time function</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            Name 1 :
            <input type="text" name="name1">
            Birthday :
            <input type="date" name="birthday1" >
            <br><br>
            Name 2 :
            <input type="text" name="name2">
            Birthday :
            <input type="date" name="birthday2">
            <br><br>
            <input type="submit" value="Submit">
        </form>
        <?php
        if (!empty($_POST["name1"]) && !empty($_POST["name2"]) && !empty($_POST["birthday1"]) && !empty($_POST["birthday2"])) {
            $name1 = $_POST["name1"];
            $name2 = $_POST["name2"];
            $birthday1 = $_POST["birthday1"];
            $birthday2 = $_POST["birthday2"];
            $time1 = strtotime($birthday1);
            $time2 = strtotime($birthday2);
            $age1 = age($time1);
            $age2 = age($time2);
            echo "<p>First name: " . $name1 . ", birthday: " . date("l, F d, Y", $time1) . ", age: " . $age1 . "</P>";
            echo "<p>Second name: " . $name2 . ", birthday: " . date("l, F d, Y", $time2) . ", age: " . $age2 . "</P>";
            echo "<p>Difference years : " . round(abs($time1 - $time2) / (60 * 60 * 24 * 365)) . "</P>";
            echo "<p>Difference days : " . abs($time1 - $time2) / (60 * 60 * 24) . "</P>";
        } else {
            echo "Invalid date";
        }

        function age($date) {
            return date("Y") - date("Y", $date);
        }
        ?>
    </body>
</html>
