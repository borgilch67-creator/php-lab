<?php
date_default_timezone_set("Asia/Ulaanbaatar");
// 1. Индекстэй массив
$courses = ["Web", "Database", "AI"];
$courses[] = "Mobile"; // төгсгөлд нэмэх
array_push($courses, "Security"); // мөн төгсгөлд нэмэх
// 2. Холбоост (associative) массив
$student = [
 "name" => "Болд",
 "age" => 20,
 "course" => "Web"
];
// 3. Олон хэмжээст массив
$students = [
 ["name" => "Болд", "age" => 20, "scores" => [85, 90, 78]],
 ["name" => "Сараа", "age" => 21, "scores" => [92, 88, 95]],
 ["name" => "Тэмүүжин", "age" => 19, "scores" => [60, 65, 70]],
 ["name" => "Боргил", "age" => 18, "scores" => [100, 100, 100]]
];
$textToExplode = "HTML,CSS,PHP";
$explodedArray = explode(",", $textToExplode);
?>
<!DOCTYPE html>
<html lang="mn">
<head>
 <meta charset="UTF-8">
 <title>Массив ба функц</title>
</head>
<?php
 // ---------- Алхам 7 ----------
 define("PASS_SCORE", 70);
 const SCHOOL = "Шинэ Монгол Технологийн Коллеж";
 function calculateAverage(array $scores): float
 {
 return round(array_sum($scores) / count($scores), 1);
 }
 function getStatus(float $average): string
 {
 return $average >= PASS_SCORE ? "Тэнцсэн" : "Тэнцээгүй";
 }
 // Хувьсагчийн хүрээ (scope)
 $counter = 0;
 function addVisit(): void
 {
 global $counter;
 $counter++;
 }
 function countCalls(): int
 {
 static $calls = 0;
 $calls++;
 return $calls;
 }
 addVisit();
 addVisit();
 echo "<p>counter = $counter</p>";
 countCalls();
 countCalls();
 echo "<p>countCalls() дуудсан тоо: " . countCalls() . "</p>";
 // for давталт
 echo "<p>do: ";
 for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
 }
 echo "</p>";
 // while давталт
 $n = 10;
 while ($n > 0) {
 echo "<p>while: $n</p>";
 $n--;
 }
 ?>
 <h2><?php echo SCHOOL; ?>: оюутны дүн</h2>
 <table border="1" cellpadding="6">
 <tr>
 <th>#</th><th>Нэр</th><th>Дундаж</th><th>Төлөв</th><th>Үнэлгээ</th>
 </tr>
 <?php foreach ($students as $index => $s): ?>
 <?php $avg = calculateAverage($s["scores"]); ?>
 <tr>
 <td><?php echo $index + 1; ?></td>
 <td><?php echo $s["name"]; ?></td>
<td><?php echo $avg; ?></td>
 <td><?php echo getStatus($avg); ?></td>
   <td><?php echo $avg >= 90 ? "A" : ($avg >= 80 ? "B" : ($avg >= 70 ? "C" : ($avg >= 60 ? "D" : "F"))); ?></td>
 </tr>
 <?php endforeach; ?>
 </table>

<body>
 <h2>Массив</h2>
 <p>Эхний хичээл: <?php echo $courses[0]; ?></p>
 <p>Хичээлийн тоо: <?php echo count($courses); ?></p>
 <p><?php echo $student["name"] . " " . $student["age"] . " настай"; ?></p>
 <p>Хоёр дахь оюутан: <?php echo $students[1]["name"]; ?></p>
 <p>Дөрөв дэх оюутан: <?php echo $students[3]["name"] . " " . $students[3]["age"] . " настай"; ?></p>
 <h2>Built-in функц</h2>
 <?php
 $text = "php is fun";
 echo "<p>" . strtoupper($text) . "</p>";
 echo "<p>" . ucwords($text) . "</p>";
 echo "<p>" . str_replace("fun", "easy", $text) . "</p>";
 echo "<p>strlen: " . strlen($text) . "</p>";
 echo "<p>mb_strlen: " . mb_strlen("Сараа") . "</p>";
 echo "<p>" . implode(", ", $courses) . "</p>";
 $hasAI = in_array("AI", $courses) ? "Тийм" : "Үгүй";
 echo "<p>AI байгаа юу: " . $hasAI . "</p>";
 echo "<p>Дундаж: " . round(array_sum([85, 90, 78]) / 3, 1) . "</p>";
 echo "<p>Өнөөдөр: " . date("Y-m-d H:i") . "</p>";
 sort($courses);
 echo "<pre>";
 print_r($courses);
 echo "</pre>";
 ?>
</body>
</html>