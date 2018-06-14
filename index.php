<!DOCTYPE html>
<html>
    <head>
		<?php include "head.php";?>
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="g-signin2" data-onsuccess="onSignIn"></div>
                <div class="data">
                    <p>Profile Details</p>
                    <img id="pic" class="img-circle" alt="">
                    <p>Email Address</p>
                    <p id="email" class="alert alert-danger"></p>
                    <div class="row">
                        <button onclick="signOut()" class="btn btn-danger">GET OUT</button>
                    </div>
                </div>
            </div>

        </div>


    </body>
</html>
