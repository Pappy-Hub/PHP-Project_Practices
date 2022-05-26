<html>

    <body>

        <form action="site.php" method="get">
            Name: <input type="text" name="name">
            <br>
            Age: <input type="number" name="age">
            <br>
            <input type="submit">
        </form>
        <br>

        My name is: <?php echo $_GET["name"] ?>
        <br>
        My age is: <?php echo $_GET["age"] ?>

    </body>

</html>