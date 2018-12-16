<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP Contact Form With Validation And Recaptcha - reusable form</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
    </head>
    <body >
        <div class="container">
            <script src='https://www.google.com/recaptcha/api.js'></script>
            <div class="form-container">
                <h1>
                    Contact Us
                </h1>
                <form method="post" id="reused_form" >
                    <label for="name">Your Name:</label>
                    <input id="name" type="text" name="Name" required maxlength="50">
                    <label for="email">Email Address:</label>
                    <input id="email" type="email" name="Email" required maxlength="50">
                    <label for="message">Message:</label>
                    <textarea id="message" name="Message" rows="10" maxlength="6000" required></textarea>
         <div class="g-recaptcha" data-sitekey="6LcvJ4IUAAAAAMU74kl3mP1_qkP6Px8rj8rDQj2s"></div>

                    <button class="button-primary" type="submit" >Post</button>
                </form>
                <div id="success_message" style="display:none">
                    <h3>Submitted the form successfully!</h3> 
                    <p> We will get back to you soon. </p>
                </div>
                <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
            </div>
        </div>
    </body>
</html>