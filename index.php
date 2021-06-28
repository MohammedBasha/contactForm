<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact form</title>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/styles.min.css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <!-- Starting the form -->
      <section class="form-contact-wrapper">
        <div class="container">
          <div class="row">
            <h2 class="col-12 text-center mt-5 mb-5">Contact Me</h2>
            <form class="col-12 form-horizontal mb-5" id="form-contact">
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <i class="fas fa-user"></i>
                <input type="text" class="form-control" id="username" placeholder="Type your user name">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <i class="fas fa-envelope"></i>
                <input type="email" class="form-control" id="email" placeholder="Type your email">
              </div>
              <div class="mb-3">
                <label for="cellphone" class="form-label">Cell phone</label>
                <i class="fas fa-phone-alt"></i>
                <input type="text" class="form-control" id="cellphone" placeholder="Type your cell phone">
              </div>
              <div class="mb-3 message-wrapper">
                <label for="message" class="form-label">Message</label>
                <i class="fas fa-envelope-open-text"></i>
                <textarea class="form-control" id="message" rows="5" placeholder="Type your message"></textarea>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-success">
                  <i class="fas fa-paper-plane"></i>  
                  Send Message
                </button>
              </div>
            </form>
          </div>
        </div>
      </section>
    <!-- Ending the form -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <!-- Custom scripts -->
    <script src="js/scripts.js"></script>
  </body>
</html>