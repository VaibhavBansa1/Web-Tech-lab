<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #edf1f5;
        }

        p {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            color: #85757f;
            text-align: center;
            font-size: 35px;
            background-color: #C9C9FF;
            margin-right: 15%;
            margin-left: 15%;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_GET['q']) && $_GET['q'] == 2) {
        ?>
            <p>2<sup>nd</sup> page</p>
            <p>Vaibhav Bansal</p>
            <p>I like songs</p>
        <?php
    } else if (isset($_GET['q']) && $_GET['q'] == 3) {
        ?>
            <div>
                <p>3<sup>rd</sup> page</p>
                <p>Vaibhav Bansal</p>
                <p>My Home Town is Gwalior!</p>
            </div>
        <?php
    } else {
        ?>
            <p>1<sup>st</sup> page</p>
            <p>Vaibhav Bansal</p>
            <p>I am a student of Computer Science and Engineering</p>

        <?php
    }

    ?>

</body>

</html>