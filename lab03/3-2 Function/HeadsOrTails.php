<html>
    <head>
        <title>Coin flip</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Please pick heads or tails</h1>
        <form action="GotFlip.php" method="post">
            <?php
            print '<input type="radio" name="pick" value="0"> Heads';
            print '<input type="radio" name="pick" value="1"> Tails';
            print '<br>'
            ?>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
    </body>
</html>
