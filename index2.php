<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "hello world"."<br>";

function get_first_number(array $arr):int|float|null
{
    for($i=0;$i<count($arr);$i++)
    {
        if(is_numeric($arr[$i]))
            return $arr[$i];
    }
    return "no numbers";
}
function f1($str1,$str2)
{
    $char=substr($str1, -1);
    if($str1=="" | $str2=="")
    {
        echo "empty string <br>";
    }
    else {
        if (strpos($str2, $char) ) {
            echo "The string contains the character <br>";
        } else {
            echo "The string does not contain the character <br>";
        }
    }
}
f1("ad","ahaghsd ");
f1("aj","ahaghsd");
f1("","ahaghsd");

function f2(string $str1,string $str2):int {
return substr_count($str2, $str1);
}
 echo f2("see","i dont see you,see him see")."<br>";

function f3(array $arr):array {
    $arr2=[];
    for($i=0;$i<count($arr);$i++)
    {
        if(!is_numeric($arr[$i])) {
            $arr2[]=$arr[$i];
        }
       
    }
    return $arr2;
}

print_r(f3(["aaa",1,125,"aligator"]));
    ?>
</body>
</html>

