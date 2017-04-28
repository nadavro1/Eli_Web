<!DOCTYPE html>
<html>
<head>
    <?php header('Content-Type: text/html; charset=utf-8'); ?>
    <meta charset="UTF-8">
    <title>פידבק</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
    <script src="jquery-3.2.1.min.js"></script>
    <script src="custom.js"></script>
</head>
<body>
<form id="contact-form" action="script.php" method="post" style="background-color:lightgreen">
    <img src='photos/2.jpg' style='width:50%;height:50%' alt='[]' />
    <ul>
        <li><label for="name">Name:</label> <input type="text" name="name" id="name" value="" /></li>
        <li><label for="email">Email:</label> <input type="text" name="email" id="email" value="" /></li>
        <li><label for="pwd">Password:</label> <input type="password" name="pwd" id="pwd" value="" /></li>
    </ul>

    <ul>
        <li>
            Please check all the emotions that apply to you:
            <ul>
                <li><label for="angry">Angry</label> <input type="checkbox" name="angry" id="angry" value="angry"></li>
                <li><label for="sad">Sad</label> <input type="checkbox" name="sad" id="sad" value="sad"></li>
                <li><label for="happy">Happy</label> <input type="checkbox" name="happy" id="happy" value="happy"></li>
                <li><label for="ambivalent">Ambivalent</label> <input type="checkbox" name="ambivalent" id="ambivalent" value="ambivalent"></li>
            </ul>
        </li>
        <li>
            How satisfied were you with our service?
            <ul>
                <li><label for="vsat">Very satisfied</label> <input type="radio" name="satisfaction" id="vsat" value="vsat"></li>
                <li><label for="sat">Satisfied</label> <input type="radio" name="satisfaction" id="sat" value="sat"></li>
                <li><label for="dcare">Didn't care</label> <input type="radio" name="satisfaction" id="dcare" value="dcare"></li>
                <li><label for="disat">Dissatisfied</label> <input type="radio" name="satisfaction" id="disat" value="disat"></li>
                <li><label for="vdisat">Very dissatisfied</label> <input type="radio" name="satisfaction" id="vdisat" value="vdisat"></li>
            </ul>
        </li>
        <li><label for="comments">Further comments:</label> <textarea name="comments" id="comments" cols="25" rows="3"></textarea></li>
    </ul>

    <ul>
        <li><label for="photo">Add your photo !</label> <input type="file" name="photo" id="photo" value="" /></li>
        
    </ul>

    <li><input type="submit" value="submit" /></li>
 
</form>

</body>
