<?php
    $error = "";
    $success = "";
    if($_POST){
        if(!$_POST["email"]){
            //. is for concatenation in php
            $error .= "An email is required<br>";
        }
        if(!$_POST["subject"]){
            $error .= "A subject is required<br>";
        }
        if(!$_POST["body"]){
            $error .= "A body is required<br>";
        }

        if ($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
            $error .= "The email you entered is not valid<br>";
        }

        if($error != ""){
            //this is accessible throughout the page
            $error = "<div class=\"alert alert-danger\" role=\"alert\"><p><strong>Oops, there are some mistakes with your submision</strong></p>".$error."</div>";
        }
        else{
            $emailTo = "chumomega@gmail.com";
            $subject = $_POST["subject"];
            $emailBody = $_POST["body"];

            $emailFrom = $_POST["email"];
            $headers = "From: ".$emailFrom;

            if(mail($emailTo, $subject, $emailBody, $headers)){
                $success = "<div class=\"alert alert-success\" role=\"alert\"><p><strong>Congrats, Your message went through successfully. You'll hear from me ASAP!</strong></p>".$success."</div>";
            }
            else{
                $error = "<div class=\"alert alert-danger\" role=\"alert\"><p><strong>Oops, your message didn't get through. Please try again later.</strong></p>".$success."</div>";
            }

        }
    }
?>

<html>
    <head>
        <title>Inquiries</title>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link href="../css/menu.css" rel="stylesheet"type="text/css">
        <link rel="shortcut icon" href="../myfavicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="../js/website.js"></script>

        <style>
            h1{
                max-width: 230px;
            }
            #content-container{
                overflow:hidden;
            }
            body{
                background-color: #9EE8FC;
            }
        </style>
    
    </head>
    
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1B4F72;"></nav>
        
        <div class="page-content-container">   
            <div class="page-content">
                
                <h1>Contact me</h1>
                <div id="error"><? echo $error.$success; ?></div>
                <form method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name = "email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your email please :)">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Enter your subject please :)">
                    </div>
                    <div class="form-group">
                        <label for="body">What do you wanna ask me?</label>
                        <textarea name="body" class="form-control" id="body" rows="3" name = "body"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
            </div>
        </div>

        <script type="text/javascript">
             $(document).ready(function() { 
                 $("form").submit(function(e){
                     var err = "";

                     if($("#email").val() == ""){
                         err += "An email is required<br>";
                     }
                     if($("#subject").val() == ""){
                         err += "A subject is required<br>";
                     }
                     if($("#body").val() == ""){
                         err += "A body is required<br>";
                     }

                     if(err != ""){  
                        //  backslash to escape the " character 
                        $("#error").html("<div class=\"alert alert-danger\" role=\"alert\"><p><strong>Oops, there are some mistakes with your submision</strong></p>"+ err + "</div>");
                        return false;
                     }
                     else{
                        return true;
                     }


                 });
             });
        </script>
        
        <div id="footer-container">
            
        </div>    
    </body>


</html>