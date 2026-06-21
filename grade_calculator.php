<?php 
    $students = [
      ['name' => '田中太郎', 'score' =>85], 
      ['name' => '佐藤花子', 'score' =>92] , 
      ['name' => '鈴木一郎', 'score' =>78] , 
      ['name' => '高橋美咲', 'score' =>65] , 
      ['name' => '伊藤健太', 'score' =>58] , 
    ];

    $pass_count = 0;
    $fail_count = 0;

    $total_score = 0;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>	http://localhost:8000/7-2-6_hands-on/practice/grade_calculator.php</title>
</head>
<body>
    <h1>成績判定システム</h1>
    <h2>【個別成績】</h2><br>

    <?php foreach ($students as $student) {
        if($student['score']>=90){
            $grade="A";
        }elseif ($student['score']>=80) {
            $grade="B";
        }elseif ($student['score']>=70) {
            $grade="C";
        }elseif ($student['score']>=60) {
            $grade="D";
        }else{
            $grade="F";
        }
        echo "<p>" . $student['name'] . ": " . $student['score'] . "点" . " - " . " 評価" . $grade . "</p>";
    } ?>

    <h2>【統計情報】</h2>
    <?php 
    foreach ($students as $student) {
        if ($student['score']>=60) {
            $pass_count++;
        }else{
            $fail_count++;
        }
        $total_score += $student['score'];
    }
    $average = $total_score / count($students);

    echo "<p>" . "合格者数: " . $pass_count . "人</p>";
    echo "<p>" . "不合格者数: " . $fail_count . "人</p>";
    echo "<p>" . "平均点: " . $average . "点</p>";
    ?>
    

</body>
</html>