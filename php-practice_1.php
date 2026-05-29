<?php
// Q1 変数と文字列

$name = '髙木';
echo '私の名前は「' . $name . '」です。';


// Q2 四則演算
//①
$x = 5;
$y = 4;
var_dump($x * $y); 

//②
$x = 5;
$y = 4;
var_dump(($x * $y) / 2); 

// Q3 日付操作
echo '現在時刻は' . date('Y年m月d日 H時i分s秒') . 'です。';

// Q4 条件分岐-1 if文
$device = 'windows';
if ($device == 'windows') {
    echo '使用OSは、windowsです';
} else{
if ($device == 'mac') {
    echo '使用OSは、macです';
} else {
    echo 'どちらでもありません';
}
}

// Q5 条件分岐-2 三項演算子
$age = 25;
$message = ($age > 18) ? '成人です。' : '子供です。';

echo $message;

// Q6 配列
$kanto = ['a', 'b', 'c', '栃木県', '千葉県'];

echo $kanto[3] . 'と' . $kanto[4] . 'は関東地方の都道府県です。';


// Q7 連想配列-1
$kanto = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
];

foreach ($kanto as $capital) {
    echo $capital . "\n";
}

// Q8 連想配列-2


// Q9 連想配列-3


// Q10 関数-1


// Q11 関数-2


// Q12 関数とif文


// Q13 関数とswitch文


?>