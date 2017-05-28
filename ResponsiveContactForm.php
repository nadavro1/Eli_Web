<!DOCTYPE html>
<html lang="en">
<head>
    <link href="CSS/ResponsiveContactStyle.css" rel="stylesheet" />
    
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
    <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
    <script type="text/javascript" src="js/jquery-3.2.1"></script>
    <script type="text/javascript">
//		$(document).ready(function() {
//			$("#ff").validate({
//				submitHandler:function(form) {
//					SubmittingForm();
//				},
//				rules: {
//					name: "required",
//					phone: "required",
//					email: {
//						required: true,
//						email: true
//					},
//					comment: {
//						required: true
//					}
//				},
//				messages: {
//					name: "Please enter your name",
//					phone: "Please enter your phone",
//					email: "Please enter valid email adress",
//					comment: "Please enter yout comment"
//				}
//			});
//		});
//
//		jQuery.validator.addMethod(
//			"selectNone",
//			function(value, element) {
//				if (element.value == "none")
//				{
//					return false;
//				}
//				else return true;
//			},
//			"Please select an option."
//		);

    </script>

</head>

<body>
    <div class="wrapper">
        <div id="contact_form">
            <form name="form1" id="ff" method="post" action="insert.php">
                <h1>! צרו קשר</h1>
               
                <label>
                    <span>שם מלא*:</span>
                    <input type="text" placeholder="שמי המלא" name="name" id="name" autofocus>
                </label>

                <label>
                    <span>ההודעה שלי*:</span>
                    <input type="text" placeholder="ההודעה שלי" name="comment" id="comment">
                </label>

                <label>
                    <span>מס' הפלאפון שלי:</span>
                    <input type="tel" placeholder="מס' הפלאפון שלי'" name="phone" id="phone">
                </label>

                <label>
                    <span>כתובת המייל שלי*:</span>
                    <input type="email" placeholder="youremail@gmail.com" name="email" id="email">
                </label>
                <!-- Created by ftutorials.com -->
                <input class="sendButton" type="submit" name="Submit" value="Send">

            </form>
        </div>
    </div>

</body>
</html>

           
              
           
                  
       
