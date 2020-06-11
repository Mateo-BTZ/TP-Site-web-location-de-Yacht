<!doctype html>
<html lang="en">
<?php
include '../partials/head.php';
?>
<body>
    <div class="bg-img" style="width: 100%; height: 800px; background-repeat: no-repeat; background-size: cover;">
    <?php
    include '../partials/navbar.php';
    ?>
    
    <form action="" method="get" class="benotified">
    <h2 style="color: white; text-align: center; padding-top: 140px; font-family: 'Trebuchet MS', Helvetica, sans-serif;">Welcome on board</h2>
  <div class="form">
    <p style="color: white; padding-left: 300px; font-size: 25px; padding-top: 100px; font-family: 'Trebuchet MS', Helvetica, sans-serif;">I want to be notified</p> </br>
    <input type="text" name="address" id="address" placeholder="Enter your mail address" style="width: 400px; height: 40px;"></input>
     <a href="#0" class="btn btn--primary" style="height: 40px; width: 150px; box-shadow: 7px 5px 5px black; margin: 200; font-family: 'Trebuchet MS', Helvetica, sans-serif;">SEND</a> </br> </br> </br>
    <p style="color: white; padding-left: 370px; padding-top: 100px; font-family: 'Trebuchet MS', Helvetica, sans-serif;">Or sign up</p> </br>
    <a href="#0" class="btn " style="box-shadow: 7px 5px 5px black;font-family: 'Trebuchet MS', Helvetica, sans-serif; background-color: darkorange; color:black; height: 80px; width: 175px; margin-left: 330px;">Create an Account</a>
  </div>
    </div>
    <?php
    include '../partials/footer.php';
    ?>

</div>
<script src="assets/js/scripts.js"></script>
</body>
</html>