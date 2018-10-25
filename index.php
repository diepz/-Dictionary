<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            border: 1px solid black;
            width: 500px;
            height: 150px;
            margin: 0 auto;
            text-align: center;
        }
        button {
            background-color: blue;
        }
        button:hover{
            color: aqua;
        }
    </style>
    <title>Document</title>
</head>
<body>
<form method="post">
    <div><h1>Từ Điển Anh - Việt</h1></div>
    <span>
        <input type="text" placeholder="Nhập từ cần tìm" name="search">
        <button>Tìm</button>
    </span>
    <?php
    $dictioonary = array(
        "hello" =>"Xin chào",
        "i"=>"Tôi",
        "love"=>"Yêu",
        "you"=>"Em",
        "forever"=>"Mãi",
    );
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $searchword = $_POST["search"];
        $flag = 0;
        foreach ($dictioonary as $word => $description) {
            if($word == $searchword) {
                echo "<br> Từ: " .$word. ". <br/>Nghĩa của từ: " .$description;
                echo  "<br>";
                $flag = 1;

            }
        }
        if ($flag == 0) {
            echo "Không tìm từ cần tra.";
        }
    }
    ?>
</form>
</body>
</html>