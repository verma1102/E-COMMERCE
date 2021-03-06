<?php
session_start();
include "conn.php";
$roll=$_GET['sic'];
$sql="SELECT * FROM registration where sic = $roll";
$sql_resultset=mysqli_query($conn,$sql);
$qry=mysqli_fetch_array($sql_resultset);
$sqlf="SELECT GROUP_CONCAT(f.facility_name) facility_name FROM facility_mapping m,facility_master f where m.facility_id=f.facility_id and m.sic='$qry[sic]'";
$sqlf_resultset=mysqli_query($conn,$sqlf);
$facility_qry=mysqli_fetch_array($sqlf_resultset);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>REGISTRATION</title>
  </head>
  <body>
    <h1 style="color:black; background-image: linear-gradient(lime,black); text-align: center;"><b>REGISTRATION FORM</b></h1>
    <form style="text-align: center;" id="form_id" enctype="multipart/form-data" action="update.php" method="POST" class="form">
      <div class="col-lg-6">
        <label for="image"><h4 style="color:lime"><b>STUDENTS'S PHOTO</b></h4></label>
        <input type="file" name="student_photo" id="student_photo" required>
      </div>
      <div class="form-row">
        <div class="col-lg-3">
          <input type="text" class="form-control" placeholder="FIRST NAME" value="<?php echo $qry['first_name']?>" name=first_name required>
        </div>
        <div class="col-lg-3">
          <input type="text" class="form-control" placeholder="LAST NAME" value="<?php echo $qry['last_name']?>" name=last_name required>
        </div>
      </div><br>
      <div class="form-row">
        <div class="col-lg-3">
          <input type="number" class="form-control" placeholder="AGE" value="<?php echo $qry['age']?>" name=age required>
        </div>
        <div class="col-lg-3">
          <input type="text" class="form-control" placeholder="SEX" id="sholder" value="<?php echo $qry['sex']?>" name=sex required>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="inlineRadio1" value="<?php echo $qry['sex']?>"
            onclick="get_sex1()">
            <label class="form-check-label" for="inlineRadio1">Male</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="inlineRadio2" value="<?php echo $qry['sex']?>"
            onclick="get_sex2()">
            <label class="form-check-label" for="inlineRadio2">Female</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="inlineRadio3" value="<?php echo $qry['sex']?>"
            onclick="get_sex3()">
            <label class="form-check-label" for="inlineRadio3">Other</label>
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-lg-3">
          <input type="text" class="form-control" placeholder="CATEGORY" id="cholder" value="<?php echo $qry['category']?>" name=category required>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="inlineRadio1p" name=category value="<?php echo $qry['category']?>"
            onclick="get_cat1()">
            <label class="form-check-label" for="inlineRadio1p">General</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="inlineRadio2p" name=category value="<?php echo $qry['category']?>"
            onclick="get_cat2()">
            <label class="form-check-label" for="inlineRadio2p">OBC</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="inlineRadio3p" name=category value="<?php echo $qry['category']?>"
            onclick="get_cat3()">
            <label class="form-check-label" for="inlineRadio3p">SC/ST</label>
          </div>
        </div>
        <div class="col-lg-3">
          <input type="text" class="form-control" placeholder="FATHER'S NAME" value="<?php echo $qry['father_name']?>" name=father_name required>
        </div>
      </div>
      <div class="form-row">
        <div class="col-lg-3">
          <input type="text" class="form-control" placeholder="MOTHER'S NAME" value="<?php echo $qry['mother_name']?>" name=mother_name required>
        </div>
        <div class="col-lg-3">
          <input type="email" class="form-control" placeholder="E-MAIL" value="<?php echo $qry['email_id']?>" name=email_id required>
        </div>
      </div>
      <br>
      <div class="form-row">
        <div class="col-lg-3">
          <input type="tel" class="form-control" placeholder="CONTACT NO." value="<?php echo $qry['contact']?>" name=contact required>
        </div>
        <div class="col-lg-3">
          <input type="text" class="form-control" placeholder="ADDRESS" value="<?php echo $qry['address']?>" name=address required>
        </div>
      </div><br>
      <div class="form-row">
        <div class="col-lg-3">
          <input type="text" class="form-control" placeholder="CITY" value="<?php echo $qry['city']?>" name=city required>
        </div><br>
        <div class="col-lg-3">
          <input type="text" class="form-control" placeholder="STATE" value="<?php echo $qry['state']?>" name=state required> 
        </div>
      </div><br>
      <div class="form-row">
        <div class="col-lg-3">
          <input type="text" class="form-control" placeholder="PIN" value="<?php echo $qry['pin_code']?>" name=pin_code required>
        </div><br>
        <div class="col-lg-3">
          <input type="tel" class="form-control" placeholder="SIC NO." value="<?php echo $qry['sic']?>" name=sic required>
        </div>
      </div><br>
      <div class="form-row">
        <div class="col-lg-3">
          <input type="text" class="form-control" placeholder="SEMESTER" name=sem value="<?php echo $qry['sem']?>" required>
        </div>
        <div class="col-lg-3">
          <input type="text" class="form-control" placeholder="BRANCH" name=sem value="<?php echo $qry['branch']?>" required>
        </div>
        <!--<div class="col-lg-3">
          <label style="color: lime;" for="validationCustom"><h4>BRANCH</h4></label>
          <select class="custom-select" id="validationCustom" name="branch" value="<?php echo $qry['branch']?>" required>
            <option selected disabled value="">Select</option>
            <option>CSE</option>
            <option>ECE</option>
            <option>EEE</option>
            <option>EIE</option>
          </select>
          <div class="invalid-feedback">
            Please select a valid Branch
          </div>
        </div>-->
      </div>
      <div class="form-row">
        <div class="col-lg-3">
          <label><h4 style="color:lime">FACILITIES REQUESTED</h4></label>
          <br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="facility[]" id="inlineCheckbox1" value="<?php echo $facility_qry['facility_name']?>">
            <label class="form-check-label" for="inlineCheckbox1">Hostel</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="facility[]" id="inlineCheckbox2" value="<?php echo $facility_qry['facility_name']?>">
            <label class="form-check-label" for="inlineCheckbox2">Canteen</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="facility[]" id="inlineCheckbox3" value="<?php echo $facility_qry['facility_name']?>">
            <label class="form-check-label" for="inlineCheckbox3">Tech-Lab</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="facility[]" id="inlineCheckbox4" value="<?php echo $facility_qry['facility_name']?>">
            <label class="form-check-label" for="inlineCheckbox4">Bus</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="facility[]" id="inlineCheckbox5" value="<?php echo $facility_qry['facility_name']?>">
            <label class="form-check-label" for="inlineCheckbox5">None</label>
          </div>
        </div>
        <div class="col-lg-3"><br><br>
          <button type="reset" class="btn btn-primary">Reset</button>
          <button class="btn btn-primary" type="submit">Submit</button>
        </div>
      </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <script>
  function get_sex1(){
      var s1=$("#inlineRadio1").val();
      $("#sholder").val(s1);
  }
  function get_sex2(){
      var s2=$("#inlineRadio2").val();
      $("#sholder").val(s2);
  }
  function get_sex3(){
      var s3=$("#inlineRadio3").val();
      $("#sholder").val(s3);
  }
  function get_cat1(){
      var c1=$("#inlineRadio1p").val();
      $("#cholder").val(c1);
  }
  function get_cat2(){
      var c2=$("#inlineRadio2p").val();
      $("#cholder").val(c2);
  }
  function get_cat3(){
      var c3=$("#inlineRadio3p").val();
      $("#cholder").val(c3);
  }
  </script>
</body>
</html>