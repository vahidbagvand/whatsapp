<?php

if( isset($_POST['login']) ){
if( !isset($_POST['username']) ){
$error = "شماره تلفن را وارد کنید.";
}else{
    
    header("location:https://api.whatsapp.com/send/?phone=98".$_POST['username']);
    //echo "<script>window.location.href=''</script>";

}
}
?>


<!doctype html>
<html lang="FA-IR">


<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title> رفتن به چت  واتساپ </title>
</head>



<body class="p-3 mb-2 bg-warning text-white" style="margin: 40px; border-radius: 20px ; border-radius: 20px ">

<div id="main">
<div class="p-3 mb-2 bg-info text-white"  >


    <form class="form-inline" dir="rtl" method="post" >
  <div class="form-group mb-2">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">شماره تلفن را بدون صفر وارد کنید</label>
</br></br><input type="text" name="username" class="form-control" id="inputPassword2" placeholder="مثال : 9189323230">
  </div>
  </br><center><button name="login" type="submit" class="btn btn-light">بزن بریم</button></center>


</form>
    </div>



</div>
<center>
<br>
<br>
تمامی حقوق مادی و معنوی این سایت متعلق به <a class="link-dark" href="https://vahid68i.ir/">وحید بگوند  </a> می باشد 
</center>

</body>

</div>
</html>