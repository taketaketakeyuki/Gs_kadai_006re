<?php
// POSTを受け取る
$name = $_POST['name'];
$mail = $_POST['mail'];
$Universalism1 =  (int) $_POST['Universalism1'];
$Universalism2 =  (int) $_POST['Universalism2'];
$Universalism3 =  (int) $_POST['Universalism3'];
$Goodintentions1 = $_POST['Goodintentions1'];
$Goodintentions2 = $_POST['Goodintentions2'];
$Goodintentions3 = $_POST['Goodintentions3'];
$Harmony1 = $_POST['Harmony1'];
$Harmony2 = $_POST['Harmony2'];
$Harmony3 = $_POST['Harmony3'];
$tradition1 = $_POST['tradition1'];
$tradition2 = $_POST['tradition2'];
$tradition3 = $_POST['tradition3'];
$safety1 = $_POST['safety1'];
$safety2 = $_POST['safety2'];
$safety3 = $_POST['safety3'];
$power1 = $_POST['power1'];
$power2 = $_POST['power2'];
$power3 = $_POST['power3'];
$Achievement1 = $_POST['Achievement1'];
$Achievement2 = $_POST['Achievement2'];
$Achievement3 = $_POST['Achievement3'];
$pleasure1 = $_POST['pleasure1'];
$pleasure2 = $_POST['pleasure2'];
$pleasure3 = $_POST['pleasure3'];
$Stimulation1 = $_POST['Stimulation1'];
$Stimulation2 = $_POST['Stimulation2'];
$Stimulation3 = $_POST['Stimulation3'];
$Selfdetermination1 = $_POST['Selfdetermination1'];
$Selfdetermination2 = $_POST['Selfdetermination2'];
$Selfdetermination3 = $_POST['Selfdetermination3'];


$Universalism = $Universalism1 + $Universalism2 + $Universalism3;
$Goodintentions = $Goodintentions1 + $Goodintentions2 + $Goodintentions3;
$Harmony = $Harmony1 + $Harmony2 + $Harmony3;
$tradition = $tradition1 + $tradition2 + $tradition3;
$safety = $safety1 + $safety2 + $safety3;
$power = $power1 + $power2 + $power3;
$Achievement = $Achievement1 + $Achievement2 + $Achievement3; 
$pleasure = $pleasure1 + $pleasure2 + $pleasure3;
$Stimulation = $Stimulation1 + $Stimulation2 + $Stimulation3;
$Selfdetermination = $Selfdetermination1 + $Selfdetermination2 + $Selfdetermination3;

// //write
// $name = $_POST['name'];
// $birthPlace = $_POST['birthPlace'];
// // 記入時間
// $time = date('Y/m/d H:i:s');
// // aモードのファイルオープン
// $file = fopen('data/data.txt', 'a');
// // ファイルに書き込み
// fwrite($file, $time . $name . $birthPlace . "\n");
// // ファイルに保存
// fclose($file);


//jpgraph


?>



<html>

<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>
    <li>お名前：<?= ($name) ?></li>
    <li>EMAIL：<?= ($mail) ?></li>
    <li>あなたの結果</li>
    <?php
    print '<img src="graph.php?U=' . $Universalism . '&G=' . $Goodintentions . '&H=' . $Harmony . '&T=' . $tradition . '&Sa=' . $safety . '&Po=' . $power . '&A=' . $Achievement . '&Pl=' . $pleasure . '&St=' . $Stimulation . '&Se=' . $Selfdetermination . '">'.$title.'</a><br />';     
    ?>
    <li>Universalism:普遍主義</li>
    <li>Goodintentions:善意</li>
    <li>Harmony:調和</li>
    <li>tradition:伝統</li>
    <li>safety:安全</li>
    <li>power:権力</li>
    <li>Achievement:達成</li>
    <li>pleasure:快楽</li>
    <li>Stimulation:刺激</li>
    <li>Selfdetermination:自己決定</li>
    
    <p>この価値観サーベイは、異文化心理学者の「シャローム・シュワルツ」によって特定された、文化間に共通する（世界中に存在する）10の価値観を測定するものです。価値観について自己認識を持つことは、日々の仕事を通じて何の価値に対しどのように充実させるかを考えたり、自分の決断のバイアスや他人の判断を理解したりすることに役立ちます。</p>
    <p>シュワルツは、この図において自分が強く価値を感じている項目に隣り合った部分には価値を感じ、対極の位置にあるものには感じづらいということ、所謂「直行性」があることを突き止めています。この調査結果はどのくらいあなたの価値観を示していますか？そして、日々の仕事の中で表れているものでしょうか。</p>
    <p>“適切な”人事を行うために、「パフォーマンス」と自社のビジネス戦略・プロセスを知ることが非常に重要となりますが、その第一歩は人、即ち自分・経営陣・事業部トップ・現場社員を理解することから始まります。原理原則に基づきつつ、自分を含めた関わる人の価値観を尊重し、各々の環境でご活躍されることを祈念いたします。</p>


    <ul>
        <li><a href="post.php">もういちど！.php</a></li>
    </ul>
</body>

</html>
