<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
 //1  
$price = 12.3456; 
$round2 = round($price, 2);
$round_up = ceil($price);
$round_down = floor($price);
echo "Կլորացրած (2 տասնորդական): $round2\n";
echo "Կլորացրած դեպի վեր: $round_up\n";
echo "Կլորացրած դեպի ներքև: $round_down\n";

//2
echo(rand(10,100)."<br>");
echo(mt_rand()/ mt_getrandmax()."<br>");
$a=[];
for($i=0;$i<5;$i++){
$a[$i]=rand(0,100);
echo($a[$i])."<br>";
}
$max=max($a);
$min=min($a);
echo "Մեծագույն թիվը՝ $max<br>";
echo "Փոքրագույն թիվը՝ $min<br>";


//3
$num1 = -15.7;
$num2 = 8.3;
echo(abs($num1)."<br>");
echo(abs($num2)."<br>");
echo("num1-ի քառակուսին է ".pow($num1,2)."<br>");
echo("num2-ի քառակուսի արմատն է ".pow($num2,0.5)."<br>");
echo("num1-ի num2 աստիճանն է ".pow($num1,$num2)."<br>");


//4
$text="    information   ";
echo (trim($text)."<br>");
echo (strtoupper($text)."<br>");
echo (strtolower($text)."<br>");
echo (strlen($text)."<br>");
echo (ucfirst($text)."<br>");

//5
$sentence = "I love JavaScript, JavaScript is great";
echo (str_replace("JavaScript", "PHP", $sentence)."<br>");

$pos = strpos($sentence, "JavaScript");
if ($pos !== false) {
    echo "The word JavaScript was found at position: $pos"."<br>";
} else {
    echo "The word JavaScript was NOT found in the sentence."."<br>";
}
$pos1 = strpos($sentence, "love");
if ($pos !== false) {
    echo "The word love was found in the sentence."."<br>";
} else {
    echo "The word love was NOT found in the sentence."."<br>";
}
$count = substr_count($sentence, "JavaScript");
echo ("The word JavaScript appears $count times."."<br>");

//6
$email = "user@example.com";
$parts = explode("@", $email);
print_r($parts);
echo "<br>";
$text = implode("at", $parts);
echo($text);
echo "<br>";
$substring = substr($email, -4);
echo $substring;

//7
function name($fullname) {
    $parts1 = explode(" ", $fullname);
    $initials = "";
    foreach ($parts1 as $part) {
        $initials .= ucfirst(substr($part, 0, 1));
    }

    return $initials;
}
echo name("Luiza Meliqbekyan")."<br>";

//8
$fruits=["apple","banana","pear","orange","plum"];
print_r($fruits);
echo "<br>";
echo ($fruits[1]."<br>");
$fruits[] = "cherry";
print_r($fruits);
echo "<br>";
array_unshift($fruits, "strawberry");
print_r($fruits);
array_pop($fruits);
echo "<br>";
echo "Number of fruits: " . count($fruits);

//9
$student = [
    "name" => "Lina Meliqyan",
    "age" => 20,
    "grade" => "A"
];
foreach ($student as $x => $y) {
  echo "$x <br>";}
foreach ($student as $x => $y) {
  echo "$y <br>";}

if (array_key_exists('age', $student)) {
    echo "The key 'age' exists in the array.";
} else {
    echo "The key 'age' does not exist in the array.";
}
$student["profession"] = "designer";
print_r($student);


//10
$numbers = [5, 12, 8, 130, 44, 3];
echo max($numbers)."<br>";
echo min($numbers)."<br>";
echo array_sum($numbers)."<br>";
$sum=[];
for($i=0;$i<count($numbers);$i++) {
   if($numbers[$i]%2==0){$sum[]=$numbers[$i];}
}
print_r($sum);
echo "<br>";

if (in_array(44, $numbers))
  {
  echo "Match found";
  }
else
  {
  echo "Match not found";
  }


//11
$fruits = ["apple", "banana"];
$veggies = ["carrot", "potato"];
sort($fruits);
$merged = array_merge($fruits, $veggies);
print_r($merged);
echo "<br>";
$reversed = array_reverse($merged);
print_r($reversed);
echo "<br>";
$result = implode(",", $reversed);
echo $result;

//12
$prices = [100, 200, 150, 300];
$with_vat = array_map(fn($p) => $p * 1.2, $prices);
$discounted = array_map(fn($p) => $p * 0.9, $with_vat);
$formatted = array_map(fn($p) => round($p) . " AMD", $discounted);

print_r($formatted);

//13
$students = [
    [
        "name" => "Ani",
        "grades" => [18, 19, 17]
    ],
    [
        "name" => "David",
        "grades" => [15, 16, 14]
    ],
    [
        "name" => "Mariam",
        "grades" => [20, 19, 18]
    ]
];
foreach ($students as &$student) {
    $avg = array_sum($student["grades"]) / count($student["grades"]);
    $student["average"] = $avg;
}
unset($student); 
$topStudent = null;
$highAvg = 0;
foreach ($students as $student) {
    if ($student["average"] > $highestAvg) {
        $highAvg = $student["average"];
        $topStudent = $student["name"];
    }
}
echo "Բոլոր ուսանողները: <br>";
foreach ($students as $student) {
    echo "- " . $student["name"] . "<br>";
}
echo " ($highAvg)\n";

//14
$keys = ["name", "age", "city"];
$values = ["John", 25, "Yerevan"];

$person = array_combine($keys, $values);

$person["country"] = "Armenia";
unset($person["age"]);

print_r($person);
   ?>
</body>
</html>