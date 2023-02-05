<?php
$insert=false;
if(isset($_POST['name'])){
    $server="localhost";
    $username="root";
    $password="";
   
    $con = mysqli_connect($server,$username,$password);
    if(!$con){
        die("connection to this database failed due to :". mysqli_connect_error());

    }
    // echo "sucess connecting to db";
     $name=$_POST['name'];
     $email=$_POST['email'];
     $gstno=$_POST['gstno'];
     $pno=$_POST['pno'];
     $ino=$_POST['ino'];
     $idate=$_POST['idate'];
     $tv=$_POST['tv'];
     $toi=$_POST['toi'];
     $gr=$_POST['gr'];

     $sql="INSERT INTO `gst`.`gstform` (`name`, `email`, `phonenumber`, `gstno`, `invoice no`, `invoice date`, `taxable value`, `type of invoice`, `gst rate`, `dt`) VALUES ('$name', '$email', '$pno', '$gstno', '$ino', '$idate', '$tv', '$toi','$gr', current_timestamp());";
    //  echo $sql;
     if($con->query($sql)==true){
      $insert=true;
        //  echo "sucessfully inserted";
     }
     else{
        //  echo "error :  $sql <br> $con->error"; 
     }
    $con->close();
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>IT return Registraion form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #eee;
      }
      body {
      background-image:url(bg.jpg) ;
 
      background-size: cover;
      }
      h1, h2 {
      text-transform: uppercase;
      font-weight: 400;
      }
      h2 {
      margin: 0 0 0 8px;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 25px;
      background: rgba(0, 0, 0, 0.5); 
      }
      .left-part, form {
      padding: 25px;
      }
      .left-part {
      text-align: center;
      }
      .fa-graduation-cap {
      font-size: 72px;
      }
      form {
      background: rgba(0, 0, 0, 0.7); 
      }
      .title {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      }
      .info {
      display: flex;
      flex-direction: column;
      }
      input, select {
      padding: 5px;
      margin-bottom: 30px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      }
      option:focus {
      border: none;
      }
      option {
      background: black; 
      border: none;
      }
      .checkbox input {
      margin: 0 10px 0 0;
      vertical-align: middle;
      }
      .checkbox a {
      color: #26a9e0;
      }
      .checkbox a:hover {
      color: #85d6de;
      }
      .btn-item, button {
      padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px; 
      border: none;
      background: #26a9e0; 
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      color: #fff;
      }
      .btn-item {
      display: inline-block;
      margin: 20px 5px 0;
      }
      button {
      width: 100%;
      }
      button:hover, .btn-item:hover {
      background: #85d6de;
      }
      @media (min-width: 568px) {
      html, body {
      height: 100%;
      }
      .main-block {
      flex-direction: row;
      height: calc(100% - 50px);
      }
      .left-part, form {
      flex: 1;
      height: auto;
      }
      }
 
    </style>
  </head>
  <body>
    <div class="main-block">
      <div class="left-part">
        <div class="logo"><img src="logo.gif" alt="dollar"></div>
        
     


        <h1>Welcome to IT return form</h1>
        <p>Money matters provides one stop solution to all your taxation and money related query .</p>
    
        <div class="btn-group">
          <a class="btn-item" href="">Learn Investment</a>
          <a class="btn-item" href="">Our Newsletter</a>
        </div>
      </div>
      <form action="index.php" method="post">
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Register here</h2>
         
        </div>
        <div class="info">

      <input class="fname" type="text" name="name" placeholder="Full name">
          <input type="text" name="email" placeholder="Email">

          <input type="text" name="pno" placeholder="Phone number">
          <input  type="text" name="gstno" placeholder="Gst no. or pan no.">
          <input type="text" name="ino" placeholder="Invoice No. if applicable">
            <input  type="date" name="idate" placeholder="Invoice date">
           <input type="text"  name="tv" placeholder="Taxable amount">
          
          <select name="toi">
            <option value="types of invoice" selected>Type of invoice*</option>
            <option value="IT reaturn">IT return</option>
            <option value="standard invoice">Standard invoice</option>
            <option value="taxinvoice">Tax invoice</option>
            <option value="einvoice">E-invoice</option>
            <option value="performa">Performa</option>
            <option value="commercial">Commercial</option>
            <option value="bill of supply">Bill o supply</option>
            <option value="timesheets">Timesheets</option>
          </select>
           <select name="gr">
            <option value="course-type" selected>Tax group*</option>
            <option value="5%">5%</option>
            <option value="12%">12%</option>
            <option value="18%">18%</option>
            <option value="28%">28%</option>
          </select>
        </div>
        <div class="checkbox">
          <input type="checkbox" name="checkbox"><span>I agree to the <a href="https://www.w3docs.com/privacy-policy">Privacy Policy for money matters.</a></span>
        </div>
        <?php 
        if($insert==true){
          echo "Our Team will contact you soon";
          
        }
        ?>
        <button class="btn" type="Submit" >submit</button>

      </form>
    </div>
    <script>

  
  </body>
</html>