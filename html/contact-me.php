<?php

?>


<html>
    <head>
        <title>Inquiries</title>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link href="../css/menu.css" rel="stylesheet"type="text/css">
        
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        
        <script type="text/javascript" src="../js/website.js"></script>
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <style>
            h1{
                max-width: 230px;
            }
            #content-container{
                overflow:hidden;
            }
            
        
            @media only screen and (max-width: 1024px){
                
                
            }
            
            
        
        
        </style>
    
    </head>
    
    <body>
        <div id="nav-bar-container">
            
        </div>
        
        <div class="page-content-container">   
            <div class="page-content">
                
                <h1>Contact me</h1>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name = "email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" id="subject"placeholder="Enter Subject">
                </div>
                <div class="form-group">
                    <label for="body">Any comments or feedback?</label>
                    <textarea class="form-control" id="body" rows="3" name = "body"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                
            </div>
        </div>
        
        <div id="footer-container">
            
        </div>    
    </body>


</html>