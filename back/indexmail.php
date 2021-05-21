
<?php

//if (isset($_POST["nom"]) 
    // {
        //if ( 
           // !empty($_POST["nom"])
           // {
              //  $nom=$_POST["nom"];
          //  }

     //}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Send an Email</title>
</head>
<body>

	<center>
		<h4 class="sent-notification"></h4>
    

		<form id="myForm">
			<h1>Send an Email</h1>
<br>
<hr size=3 align=center width=25%>
<br>
			<label>Name</label>
			<input id="name" type="text" placeholder="Enter name" required=""  value="<?php $_GET['nom'] ?>" >
			<br><br>

			<label>Email</label>
			<input id="email" type="text" placeholder="Enter Email">
			<br><br>

			<label>Subject</label>
			<input id="subject" type="text" placeholder=" Enter Subject"> 
			<br><br>

			<p>Message</p>
			<textarea id="body" rows="5" placeholder="Type Message"></textarea>
			<br><br>

			<button type="button" onclick="sendEmail()" value="Send An Email">Submit</button> 
            <br>
            <br>
            <li ><a href="tables.php"></em>Back to home</a></li>
           
		</form>
	</center>
    <hr size=3 align=center width=25%>

	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

</body>
</html>