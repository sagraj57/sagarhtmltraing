<html>
<head>
    <title>My first php Website</title>
</head>
<body>
    <h1>Ragistration Page</h1>
    <a href="../index.php">Click here to go back</a><br /><br />
    <form action="php/register.php" method="POST">
        Enter Username: <input type="text" name="username" required="required" /><br /> <br />
        Enter Password: <input type="password" name="password"required="required" /><br />
        <input type="submit" value="Register" />
    </form>
</body>
</html>