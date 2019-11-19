<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>To Do Sign-up</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>




<div id="wrapper">

    <form name="vform" action="index.php" onsubmit="return validateForm()" method="post">
        <div>

            <input type="email" name="email" class="textInput" placeholder="Username email">
            <div id="email_error" class="val_error"> </div>
        </div>

        <div>
            <input type="password" name="password" class="textInput" placeholder="Password">
        </div>

        <div>
            <input type="password" name="pss_conformation" class="textInput" placeholder="Password conformation">
            <div id="password_error" class="val_error"> </div>
        </div>

        <div>
            <input type="text" name="fname" class="textInput" placeholder="First name">
            <div id="fname_error" class="val_error"> </div>
        </div>

        <div>
            <input type="text" name="lname" class="textInput" placeholder="Last name">
            <div id="lname_error" class="val_error"> </div>
        </div>

        <div>
            <input type="text" name="college" class="textInput" placeholder="College">
            <div id="college_error" class="val_error"> </div>
        </div>

        <div>
            <input type="text" name="major" class="textInput" placeholder="Major">
            <div id="major_error" class="val_error"> </div>
        </div>

        <div>
            <input type="submit" value="Sign-up" class="btn" name="Sign-up">

        </div>

        <p>Already a member? <a href="login.php">Log in</a></p>

    </form>

    <script type="text/javascript">
        //input text

        var email = document.forms ["vform"]["email"];
        var password = document.forms ["vform"]["password"];
        var pss_conformation = document.forms ["vform"]["pss_conformation"];
        var fname = document.forms ["vform"]["fname"];
        var lname = document.forms ["vform"]["lname"];
        var college = document.forms ["vform"]["college"];
        var major = document.forms ["vform"]["major"];

        //error message
        var email_error = document.getElementById('email_error');
        var password_error = document.getElementById('password_error');
        var fname_error = document.getElementById('fname_error');
        var lname_error = document.getElementById('lname_error');
        var college_error = document.getElementById('college_error');
        var major_error = document.getElementById('major_error');

        // event listener method
        email.addEventListener('blur', emailVerify, true);
        //password.addEventListener('blur', passwordVerify, true);
        pss_conformation.addEventListener('blur', pss_conformationVerify, true);
        fname.addEventListener('blur', fnameVerify, true);
        lname.addEventListener('blur', lnameVerify, true);
        college.addEventListener('blur', collegeVerify, true);
        major.addEventListener('blur', majorVerify, true);

        // validation

        function validateForm() {
            if (email.value == "") {
                email.style.border = "2px solid red";
                email_error.textContent = "Please enter you username";
                email.focus();
                return false;
            }

            if (pss_conformation.value == "") {
                pss_conformation.style.border = "2px solid red";
                password_error.textContent = "Please enter password conformation";
                pss_conformation.focus();
                return false;
            }
            // check if passwords are the same
            if (password.value != pss_conformation.value) {
                password.style.border = "2px solid red";
                pss_conformation.style.border = "2px solid red";
                password_error.textContent = "The two passwords do not match";
                return false;
            }

            if (fname.value == "") {
                fname.style.border = "2px solid red";
                fname_error.textContent = "Please enter you first name";
                fname.focus();
                return false;
            }
            if (lname.value == "") {
                lname.style.border = "2px solid red";
                lname_error.textContent = "Please enter you last name";
                lname.focus();
                return false;
            }

            if (college.value == "") {
                college.style.border = "2px solid red";
                college_error.textContent = "Please enter your college";
                college.focus();
                return false;
            }

            if (major.value == "") {
                major.style.border = "2px solid red";
                major_error.textContent = "Please enter you major";
                major.focus();
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
        function pss_conformationVerify() {
            if (pss_conformation.value != "") {
                pss_conformation.style.border = "1px solid #5e6e66";
                password_error.innerHTML = "";
                return true;
            }
        }

        function fnameVerify() {
            if (fname.value != "") {
                fname.style.border = "1px solid #5e6e66";
                fname_error.innerHTML = "";
                return true;
            }
        }
        function lnameVerify() {
            if (lname.value != "") {
                lname.style.border = "1px solid #5e6e66";
                lname_error.innerHTML = "";
                return true;
            }
        }
        function collegeVerify() {
            if (college.value != "") {
                college.style.border = "1px solid #5e6e66";
                college_error.innerHTML = "";
                return true;
            }
        }

        function majorVerify() {
            if (major.value != "") {
                major.style.border = "1px solid #5e6e66";
                major_error.innerHTML = "";
                return true;
            }
        }

    </script>

</div>


</body>
</html>
