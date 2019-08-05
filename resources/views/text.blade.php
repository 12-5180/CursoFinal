<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  
</head>
<body>
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5d42dae2003c1b0012ebc883&product=custom-share-buttons"></script>

    <?php 
     if(Auth::check() && Auth::user()->hasRole('employee')){
        echo"si";
     }else{
       echo"no";
     }
    
    ?>

</div>
</body>
</html>