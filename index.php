<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        echo "<h1 style='color:blue'>W1 - kanyapat chitngen bit23 n0.9</h1>";
    ?>

    <form action="">
        <label For="">เลขแม่สูตรคูณ</label> <br>
        <input type="number" name="num" id="">

        <input type="submit" value="คำนวณ">
    </form>

    <?php
        if( isset( $_GET["num"] )){

           $num = $_GET["num"];

           echo "<h2> สูตรคูณแม่ ". $num ."</h2>";

           //. เริ่มต้น      สิ้นสุด    เพิ่มทีละ
           for($i = 1; $i <= 12; $i++ ){
                echo $i . "<br>" ;
           }
        }
    ?>
</body>
</html>