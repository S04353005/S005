<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Web Programming">
    <meta name="author" content="S04353005">

    <title>hw1</title>
  </head>
  <body>
    <?php
       $str = "";
       if (isset($_GET["m"]) && $_GET["m"]!="") //判斷是否有輸入字串
          $str = $_GET["m"];
       else {
          echo "請輸入一段英文!";
          exit;
       }

       $sum = 0;  //英文字串數值總和
       $index = 0;  //字串中的index

       while($index < strlen($str)){  //跑字串每一個char
        $char = strtolower(substr($str,$index,1));  //取第index個char轉小寫
        $asc = ord($char);  //將char轉ascii code
        
        if($asc>=97 && $asc<=122){  //判斷是否為a-z
          $sum += $asc - 96;  //校正
          $index++; //next char
        }
        else{
          echo "Fail.";
          exit;
        }
       }

       echo $str.' = '.$sum;

     ?>


  </body> 
</html> 