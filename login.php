<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>login</title>

    <!-- bootstrap  -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <!-- fonts style -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js"
      rel="stylesheet"
    />

    <!-- font awesome style -->
    <script
      src="https://kit.fontawesome.com/e48d166edc.js"
      crossorigin="anonymous"
    ></script>

    <!-- Custom styles -->
    <link href="css/login.css" rel="stylesheet" />

    <?php 
    session_start();
    ?>

  </head>

  <body>
    <!--form login  -->
    <section class="form mx-5 my-3">
      <div class="container">
        <div class="row">
          <div class="col-5  img_box">
            <img src="images/login.png"  class="img-fluid" alt="">
          </div>
          <div class="col-7 px-5 pt-5">
            <h1 class="font-weight-bold py-3">Login</h1>
            <h4>sign in to your account</h4>
            < method="POST" action="index.html">
              <div class="form-row">
                <div class="col-7">
                  <input name="email" type="email" class="form-control p-4 my-3" placeholder="Email-Address">
                </div>
              </div>
              <div class="form-row">
                <div class="col-7 ">
                  <input name="password" type="password" class="form-control  p-4 my-3" placeholder="password">
                </div>
              </div>
              <div class="form-row">
                <div class="col-7">
                  <button type="button" name="masuk" value="login" class="btn_login mt-3 mb-5">LOGIN</button>
                </div>
              </div>

              <?php 
               if(isset($_POST['masuk'])){
 
                $email = $_POST['email'];
                $password_kamu = $_POST['password'];
     
                if($email == 'user'){
     
                    if($password_kamu == 'user'){
     
                        $_SESSION['user'] = $username;
                        header('location: index.html');
     
                    }else{
                        echo "
                        <script>
                            alert(' PASSWORD SALAH ... !! ');
                        </script>
                    ";
                    }
     
                }else{
                    echo "
                        <script>
                            alert(' USERNAME TIDAK TERDAFTAR..!! ');
                        </script>
                    ";
                }
            }
     
         ?>
              
              <a href="#">forgot password</a>
              <p >Don't Have Account <a href="#">Register Here</a></p>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!--End form login  -->

    <!-- jQery -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>

    <!-- bootstrap js -->
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>


  </body>
</html>
