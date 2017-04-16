<?php
	 include 'dbh.php';
?>
<!DOCTYPE html>
<html>
<head>
<?php header('Content-Type: text/html; charset=utf-8'); ?>
<meta charset="UTF-8">

	<title>הירשם</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <script src="jquery-3.2.1.min.js"></script>
    <script src="custom.js"></script>
</head> 
<body>

    <form action="signup.php" method="POST">
        <h2>הרשמה</h2>
        <p>
            שם פרטי

            <input id="first" name="first" type="text">
        </p>
        <p>
            שם משפחה

            <input id="last" name="last" type="text">
        </p>
        <p>
            אימייל

            <input id="Email" name="uid" type="text" style="direction: ltr">
        </p>
        <p>
            סיסמא
            >
            <input id="password" name="pwd" type="password" style="direction: ltr">
            <span>תנאי לסיסמא</span>
        </p>

        <p>
            <input type="submit" value="רשום אותי" id="submit">
        </p>

    </form>
    <br>
    <form action="user_data.php" method="POST">
        <button>show data</button>
    </form>

		
</body>
<style>
    body{
        background-image: url(photos/2.jpg);
        background-size: 100%;
    }
    form {
        background: #fff;
        padding: 4em 4em 2em;
        max-width: 400px;
        margin: 50px auto 0;
        box-shadow: 0 0 1em #222;
        border-radius: 2px;
    }

        h2{
            margin:0 0 50px 0;
            padding:10px;
            text-align:center;
            font-size:30px;
            color:darken(#e5e5e5, 50%);
            border-bottom:solid 1px #e5e5e5;
        }
        p {
            direction: rtl;
            margin: 0 0 3em 0;
            position: relative;
        }
        input {
            display: block;
            box-sizing: border-box;
            width: 100%;
            outline: none;
            margin:0;
        }
        input[type="text"],
        input[type="password"] {
            background: #fff;
            border: 1px solid #dbdbdb;
            font-size: 1.6em;
            padding: .8em .5em;
            border-radius: 2px;
        }
        input[type="text"]:focus,
        input[type="password"]:focus {
            background: #fff
        }
        span {
            display:block;
            background: #F9A5A5;
            padding: 2px 5px;
            color: #666;
        }
        input[type="submit"] {
            background: $button;
            box-shadow: 0 3px 0 0 darken($button, 10%);
            border-radius: 2px;
            border: none;
            color: #fff;
            cursor: pointer;
            display: block;
            font-size: 2em;
            line-height: 1.6em;
            margin: 2em 0 0;
            outline: none;
            padding: .8em 0;
            text-shadow: 0 1px #68B25B;
        }
        input[type="submit"]:hover {
            background: rgba(148,175,101,1);
            text-shadow:0 1px 3px darken($button, 30%);
        }
        input[type="submit"]:hover {

        }



    </style>
</html>