<?php
session_start();
include "conn.php";
?>
<!doctype html>
<html lang="en">
<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css.map">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css.map">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css.map">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css.map">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.css.map">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css.map">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
</head>
<title>e-commerce</title>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <div style="margin: 5px;" class="btn-group">
          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Men
          </button>
          <div class="dropdown-menu">
            <a style="color: lime;" class="dropdown-item" href="#">Clothing</a>
            <div class="dropdown-divider"></div>
            <a style="color: lime;" class="dropdown-item" href="#">Footwear</a>
            <div class="dropdown-divider"></div>
            <a style="color: lime;" class="dropdown-item" href="#">Watches</a>
          </div>
        </div>
        <div style="margin: 5px;" class="btn-group">
          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Women
          </button>
          <div class="dropdown-menu">
            <a style="color: lime;" class="dropdown-item" href="#">Clothing</a>
            <div class="dropdown-divider"></div>
            <a style="color: lime;" class="dropdown-item" href="#">Footwear</a>
            <div class="dropdown-divider"></div>
            <a style="color: lime;" class="dropdown-item" href="#">Jewellery</a>
          </div>
        </div>
        <div style="margin: 5px;" class="btn-group">
          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Kids
          </button>
          <div class="dropdown-menu">
            <a style="color: lime;" class="dropdown-item" href="#">Clothing</a>
            <div class="dropdown-divider"></div>
            <a style="color: lime;" class="dropdown-item" href="#">Footwear</a>
            <div class="dropdown-divider"></div>
            <a style="color: lime;" class="dropdown-item" href="#">Toys</a>
          </div>
        </div>
      </ul>
      <?php
          if (isset($_SESSION['welcome_msg']))
          { ?>
            <ul><?php echo $_SESSION['welcome_msg']; ?>
            <button style="margin: 5px;" class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="logout.php"><b>Logout</b></a></button>
            <?php }
            else
            {
              ?>
      <button style="margin: 5px;" class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="mylogin.php"><b>Login</b></a></button>
      <button style="margin: 5px;" class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="mysignup.php"><b>Sign-Up</b></a></button>
      <?php } ?>
    </div>
  </nav>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <br>
  <!--<table id="students" style="border: 1px solid black" class="table display" style="width:100%">
  <thead>
  <tr>
    <th>SIC</th>
    <th>FIRST NAME</th>
    <th>LAST NAME</th>
    <th>AGE</th>
    <th>SEX</th>
    <th>CATEGORY</th>
    <th>FATHER'S NAME</th>
    <th>MOTHER'S NAME</th>
    <th>E-MAIL</th>
    <th>CONTACT</th>
    <th>ADDRESS</th>
    <th>CITY</th>
    <th>STATE</th>
    <th>PIN CODE</th>
    <th>SEM</th>
    <th>BRANCH</th>
    <th>FACILITIES REQUESTED</th>
    <th>CHANGES</th>
    </tr>
</thead>
<tbody>
  <?php
  $sql="SELECT * FROM registration";
  $sql_resultset=mysqli_query($conn,$sql);
  while($qry=mysqli_fetch_array($sql_resultset)) { ?>
  <tr>
    <td><?php echo $qry['sic']?></td>
    <td><?php echo $qry['first_name']?></td>
    <td><?php echo $qry['last_name']?></td>
    <td><?php echo $qry['age']?></td>
    <td><?php echo $qry['sex']?></td>
    <td><?php echo $qry['category']?></td>
    <td><?php echo $qry['father_name']?></td>
    <td><?php echo $qry['mother_name']?></td>
    <td><?php echo $qry['email_id']?></td>
    <td><?php echo $qry['contact']?></td>
    <td><?php echo $qry['address']?></td>
    <td><?php echo $qry['city']?></td>
    <td><?php echo $qry['state']?></td>
    <td><?php echo $qry['pin_code']?></td>
    <td><?php echo $qry['sem']?></td>
    <td><?php echo $qry['branch']?></td>
    <td>
    <?php
      $sqlf=mysqli_query($conn,"SELECT GROUP_CONCAT(f.facility_name) facility_name 
      FROM facility_mapping m,facility_master f where m.facility_id=f.facility_id and m.sic='$qry[sic]'");
      while($qryF=mysqli_fetch_array($sqlf))
      {
        echo $qryF['facility_name'];
      }
      ?>
    </td>
    </td>
    <td data-head="Edit/Delete:"><a href="edit.php?sic=<?php echo $qry['sic'];?>">Edit</a>/<a href="delete.php?sic=<?php echo $qry['sic']; ?>">Delete</a></td>
  </tr>
  <?php } 
  ?>
</tbody>
</table>
<br>-->
<div class="card-group">
  <div class="card">
      <img src="images/bs.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 style="color:red;" class="card-title"><b>Speakers</b></h3>
        <h5 style="color: blue;" class="card-text">Upto 30% Off</h5>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUY NOW</button>
      </div>
    </div>
    <div class="card">
      <img src="images/hp.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 style="color:red;" class="card-title"><b>Headphones</b></h3>
        <h5 style="color: blue;" class="card-text">Upto 70% Off</h5>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUY NOW</button>
      </div>
    </div>
    <div class="card">
      <img src="images/tv.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 style="color:red;" class="card-title"><b>LED</b></h3>
        <h5 style="color: blue;" class="card-text">Upto 50% Off</h5>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUY NOW</button>
      </div>
    </div>
</div>
<br>
<table style="color: cyan; background-image: linear-gradient(120deg,navy,black);" class="table">
    <thead>
      <tr>
        <th scope="col"><h2><b>ITEM</b></h2></th>
        <th scope="col"><h2><b>PRICE</b></h2></th>
        <th scope="col"><h2><b>NOW OR NEVER</b></h2></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><h4>Smart Phones</h4></td>
        <td><h4>Starting @5999/-</h4></td>
        <td><button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUY NOW</button></td>
      </tr>
      <tr>
        <td><h4>Everyday Essentials</h4></td>
        <td><h4>Starting @79/-</h4></td>
        <td><button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUY NOW</button></td>
      </tr>
      <tr>
        <td><h4>Home & Decor</h4></td>
        <td><h4>Starting @299/-</h4></td>
        <td><button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUY NOW</button></td>
      </tr>
    </tbody>
</table>
<br>
<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div id="carouselExampleControls_s" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/s1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/s2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/s3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls_s" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls_s" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="card-body">
                <h3 style="color:red;" class="card-title">SHOES</h3>
                <h4 style="color:blue;" class="card-text">Starting @1,999/-</h4>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUY NOW</button></td>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div id="carouselExampleControls_w" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/w1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/w2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/w3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls_w" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls_w" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="card-body">
                <h3 style="color:red;" class="card-title">WATCHES</h3>
                <h4 style="color:blue;" class="card-text">Starting @2,499/-</h4>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUY NOW</button></td>
            </div>
        </div>
    </div>
</div>
<br>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
    <h1 style="color: lime;" class="display-4"><b>ASSURED CASBACK UPTO 30%</b></h1> <p>Minimum Purchase Of Rs 1500/- & Above</p>
    <h1 style="color: lime;" class="display-4"><b>EXTRA 10% OFF</b></h1> <p>On Sbi Credit & Debit Cards</p>
    </div>
  </div>
  <div>
    <h3 style="color:crimson; padding-left: 110px;" class="mt-0"><b>Contact Us:</b></h3>
    <p style="color:crimson; padding-left: 10px;"><b>Address: 702, Sector-10, Malviya Nagar, South Delhi,<br> DELHI (DL), India (IN), Pin Code:- 110017</b></p>
    <p style="color:crimson; padding-left: 10px;"><b>Phone: 9776989185</b><br><b>e-mail: vermapiyush1102@gmail.com</b></p>
  </div>
  <footer class="background">
        <p class="text-footer"> <b>
          Copyright &copy; 2021 www.e-commerce.com - All rights reserved
    </b>
        </p>
    </footer>
  <!-- JS -->
  <script src="js/bootstrap.bundle.js"></script>
  <script src="js/bootstrap.bundle.js.map"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/bootstrap.bundle.min.js.map"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.js.map"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.min.js.map"></script>
  <script src="js/jquery-3.5.1.slim.min.js"></script>
  <script src="js/bootstrap.bundle.min..js"></script>
  <!--<script src="https://code.jquery.com/jquery-3.5.1.js"></script>-->
  <script src="https:////cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script>
  $(document).ready( function () {
    $('#students').DataTable();
} );
</script>
</body>
</html>