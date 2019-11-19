
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>To Do Sign-up</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>




<div id="wrapper">

    <form name="vform" action="mainpage.php" onsubmit="return validateForm()" method="post"> <!-- change action file and use db-->
        <div>

            <input type="email" name="email" class="textInput" placeholder="Username email">
            <div id="email_error" class="val_error"> </div>
        </div>

        <div>
            <input type="password" name="password" class="textInput" placeholder="Password">
            <div id="pssw_error" class="val_error"> </div>
        </div>


        <div>
            <input type="submit" value="Log-in" class="btn" name="Log-in">

        </div>

        <p>Not a member? <a href="signup.php">Sign up</a></p>

    </form>







    <script type="text/javascript">
        //input text

        var email = document.forms ["vform"]["email"];
        var password = document.forms ["vform"]["password"];


        //error message
        var email_error = document.getElementById('email_error');
        var pssw_error = document.getElementById('pssw_error');


        // event listener method
        email.addEventListener('blur', emailVerify, true);
        password.addEventListener('blur', passwordVerify, true);




        // validation

        function validateForm() {
            if (email.value == "") {
                email.style.border = "2px solid red";
                email_error.textContent = "Please enter you username";
                email.focus();
                return false;
            }
            if (password.value == "") {
                password.style.border = "2px solid red";
                pssw_error.textContent = "Please enter you password";
                password.focus();
                return false;
            }
        }



        // event functions
        function emailVerify() {
            if (email.value != "") {
                email.style.border = "1px solid #5e6e66";
                email_error.innerHTML = "";
                return true;
            }
        }
        function passwordVerify() {
            if (password.value != "") {
                password.style.border = "1px solid #5e6e66";
                pssw_error.innerHTML = "";
                return true;
            }
        }

    </script>


</div>

</body>
</html>