<html>

<body>
    <h1>The input types formmethod Attribute</h1>
    <p>The formmethod attribute defines the HTTP method for sending from-data to the action URL.</p>
    <form>
        First name: <input type="text" name="fname"><br><br>
        Last name: <input type="text" name="lname"><br><br>
        <input type="submit" value="Submit using GET">
        <input type="submit" formmethod="post" value="Submit using POST">
    </form>
</body>

</html>