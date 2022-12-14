<!DOCTYPE html>
<html lang="en">

  <?php
  error_reporting(0);
  include "koneksi.php";
  $insert = mysqli_query ($koneksi, "insert into data (nama, nim, alamat)
  values ('$_POST[nama]','$_POST[nim]','$_POST[alamat]' )")
  ?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>topupslur</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"> <img src="T.png" width="100PX"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="website.php">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="login_form.php">Login</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
               DAFTAR
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="registerfacebook.php">Facebook</a>
                <a class="dropdown-item" href="register.php">Google Account</a>
              </div>
            </li>
          </ul>

          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

    <div class="wrapper">

                <section id="MASUK"></section>

                <nav style="padding-left: 120px;">
                   
                           
                        </div>
                    </div>
                </nav>

                <div class="row mt-5">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                      <div class="card" style="width: 90%">
                          <div class="card-header">Produk</div>
                          <div class="card-body">
                              <div class="row">
                                  <div class="col-md-3">
                                    <a href="mobilelegend.php" target="_blank" rel="noopener">
                                    <img src="mobilepegend.png" width="75px">
                                    </a>
                                  </div>
                                  <div class="col-md-3">
                                   <a href="pubg.php" target="_blank" rel="noopener">
                                   <img src="pubg.png" width="75px">
                                   </a>
                                  </div>
                                  <div class="col-md-3">
                                  <a href="codm.php"  target="_blank" rel="noopener">
                                  <img src="call-of-duty-mobile.png" width="100px">
                                  </a>
                                  </div>
                                  <div class="col-md-3">
                                    <a href="pb.php" target="_blank" rel="noopener">
                                     <img src="pb.png" width="90px">
                                    </a>
                                  </div>
                                 
                              </div>
                          </div>
                        </div>
                
                        <section class="footer">
                         
                        <div class="footer">
  <p>Copyright © MOCH MIFTAHUL AKHYAR</p>
</div>
                          
                      </section> 



       
                    
                  
                    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>