<?php
if( isset($_POST['login']) ){
   header("location:https://api.whatsapp.com/send/?phone=98".$_POST['tel']);
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
    <title>Connect to WhatsApp</title>
</head>
<body class="p-3 mb-2 bg-warning text-white" style="margin: 40px; border-radius: 20px ; border-radius: 20px ">
<div id="main">
<div class="p-3 mb-2 bg-info text-white"  >
    <form class="form-inline" method="post" >
  <div class="form-group mb-2">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="input" class="sr-only">Enter the phone number I will connect you to WhatsApp</label>
</br></br><input type="number" name="tel" class="form-control" id="input" placeholder="Example : 9189323230 " required>
  </div>
  </br><center><button name="login" type="submit" class="btn btn-light"> Let's go </button></center>
</form>
    </div>
</div>
</body>
</div>
</html>