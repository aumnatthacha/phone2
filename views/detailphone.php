<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phone</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Link Bootstrap5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href=".css" type="text/css"/></head>

<body>

<br>
    <div class="w3-container w3-center">
        <h3>Detail Phone </h3>
            <img src="<?=$result['img']?>" alt="Avatar" style width="277.6" height="277.6"> <br>
            <span class="name">Name : <?=$result['name']?></span><br>
            <span class="name">Price : <?=$result['price']?></span>
    </div>
    <div  class="w3-container w3-center" >
            <span class="name">หน้าจอขนาด 6.56 นิ้ว</span> <br>
            <span class="name">Camera : <?=$result['camera']?></span><br>
            <span class="name">Battery : <?=$result['dattery']?></span><br>
            <span class="name">ลำโพงสเตอริโอคู่เสียงหนักแน่นทรงพลัง </span><br>

            <a href="index.php" class="w3-btn w3-red">Back</a>



</body>
</html>