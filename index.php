<!DOCTYPE html>
<html>
    <head>
        <meta name="google-signin-client_id" content="257579608945-s39jckt8dibrc1gv27gtgvvbkd2m5qv8.apps.googleusercontent.com">
        <script src="https://apis.google.com/js/platform.js?onload=init" async defer></script>
        
        <title>Project Requests</title>
        <script
          src="https://code.jquery.com/jquery-3.3.1.min.js"
          integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
          crossorigin="anonymous">
        </script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="js/googleSignIn.js"></script>
		
        <style>
            .data{
                display:none;
            }
        </style>

    </head>
    <body>

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





    </body>
</html>
