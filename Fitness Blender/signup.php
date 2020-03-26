<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Become a member of Fitness Blender</title>
        <link rel="stylesheet" href="login.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="signupformValidation.js"></script>
    </head>
    <body>
        <div class="formsign">
            <form class="signupform" onsubmit="return validate()" action="insertsignupdata.php" method="POST">
                <br><p class="heading">Sign-Up Page</p><br>
                <input class="value" id="name" type="text" name="fullname" placeholder="Enter Name" required/><br><span class="errormessage" id="signup-name"></span><br>
                <input class="value" id="email" type="email" name="email" placeholder="Enter Email" required/><br><span class="errormessage" id="signup-email"></span><br>
                <input class="value" id="mobile" type="text" name="mobno" placeholder="Enter Mobile Number" required/><br><span class="errormessage" id="signup-mobile"></span><br>
                <input class="radiovalue" type="radio"  name="gender" value="m"/> Male
                <input class="radiovalue" type="radio" name="gender" value="f"/> Female<br><br>
                <input class="value" id="username" type="text" name="uname" placeholder="Enter Username" autocomplete="off" required/><br><span id="signup-username"></span><br>
                <input class="value" id="password" type="password" name="pass" placeholder="Enter Password" required/><br><span class="errormessage" id="signup-password"></span><br>
                <input class="value" id="confirmpassword" type="password" name="confirmpass" placeholder="Confirm Password" required/><br><span class="errormessage" id="signup-confirmpassword"></span><br>
                <input class="submit" id="signinbutton" type="submit" name="submit" value="Sign-Up"><br><br>
                <p class="message">Already Registered? <a href="login.html" class="account">Log-In</a></p>
            </form>
        </div> 
    </body>
    <script>
        $(document).ready(function(){
            $('#username').blur(function(){

                var user = $(this).val();       // 'this' refers to #username.
                $.ajax({

                    url:'signupajax.php',
                    method:'POST',
                    data:{user_name: user},
                    success: function(data){

                        if(data != '0'){
                            $('#signup-username').html('<span class="danger">-- Username not available --</span>');
                            $('#signinbutton').attr("disabled", true);
                        }
                        else{
                            $('#signup-username').html('<span class="success">-- Username available --</span>');
                            $('#signinbutton').attr("disabled", false);
                        }
                    }
                })
            });
        });
    </script>
</html>