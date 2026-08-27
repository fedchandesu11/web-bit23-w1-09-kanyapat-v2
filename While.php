<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        echo "<h1 style='color:blue'>W1 - kanyapat chitngen bit23 09</h1>";
    ?>

    <a href="index.php">for Loop</a>

    <form action="">
        <label For="">เลขแม่สูตรคูณ</label> <br>
        <input type="number" name="num" id="">

        <input type="submit" value="คำนวณ">
    </form>

    <?php
        if( isset( $_GET["num"] )){

           $num = $_GET["num"];

           echo "<h2> สูตรคูณแม่ ". $num ."</h2>";

           $i = 1;
           while($i <= 12){
                echo $num . " x " . $i . " = " . $num * $i . "<br>" ;
                $i++;
           }
        }
    ?>
    <style>
    body{
        font-family: Arial, sans-serif;
        background:#f5f7fa;
        margin:40px;
        color:#333;
    }

    h1{
        text-align:center;
        letter-spacing:2px;
        margin-bottom:20px;
    }

    a{
        display:inline-block;
        text-decoration:none;
        background:#2563eb;
        color:white;
        padding:8px 16px;
        border-radius:6px;
        margin-bottom:20px;
    }

    a:hover{
        background:#1d4ed8;
    }

    form{
        background:white;
        padding:20px;
        border-radius:10px;
        box-shadow:0 2px 8px rgba(0,0,0,0.08);
        max-width:320px;
        margin-bottom:20px;
    }

    label{
        font-weight:bold;
    }

    input[type="number"]{
        width:100%;
        padding:8px;
        margin:10px 0;
        border:1px solid #ccc;
        border-radius:6px;
        box-sizing:border-box;
    }

    input[type="submit"]{
        background:#2563eb;
        color:white;
        border:none;
        padding:8px 16px;
        border-radius:6px;
        cursor:pointer;
    }

    input[type="submit"]:hover{
        background:#1d4ed8;
    }

    h2{
        color:#1e40af;
        border-bottom:2px solid #dbeafe;
        padding-bottom:5px;
        max-width:320px;
    }

    br{
        line-height:1.8;
    }
</style>
</body>
</html>
