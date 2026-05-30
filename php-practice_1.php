<?php
// Q1 変数と文字列

$name = '髙木';
echo '私の名前は「' . $name . '」です。';


// Q2 四則演算
$num = 5 * 4;

echo $num;
echo "\n";

echo $num / 2;


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
$kanto = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
];

foreach ($kanto as $prefecture => $capital) {
   if ($prefecture == '埼玉県') {
       echo($prefecture . 'の県庁所在地は、' . $capital . 'です。');
   }
}

// Q9 連想配列-3
$kanto = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市',
    '愛知県' => '名古屋市',
    '大阪府' => '大阪市'
];

foreach ($kanto as $prefecture => $capital) {

    if ($prefecture == '愛知県') {
        echo $prefecture . 'は関東地方ではありません。' . "\n";
    } else {

        if ($prefecture == '大阪府') {
            echo $prefecture . 'は関東地方ではありません。' . "\n";
        } else {
            echo $prefecture . 'の県庁所在地は、' . $capital . 'です。' . "\n";
        }

    }
}

// Q10 関数-1
function hello($name)
{
    return $name . 'さん、こんにちは。';
}

echo hello('金谷');
echo "\n";
echo hello('安藤');


// Q11 関数-2
function calcTaxInPrice($price)
{
    return $price * 1.1;
}

$price = 1000;

$taxInPrice = calcTaxInPrice($price);

echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。';


// Q12 関数とif文

function distinguishNum($num)
{
    if ($num % 2 == 0) {
        return $num . 'は偶数です。';
    } else {
        return $num . 'は奇数です。';
    }
}

echo distinguishNum(11);
echo "\n";
echo distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($grade)
{
    switch ($grade) {

        case 'A':
        case 'B':
            return '合格です。';

        case 'C':
            return '合格ですが追加課題があります。';

        case 'D':
            return '不合格です。';

        default:
            return '判定不明です。講師に問い合わせてください。';
    }
}

echo evaluateGrade('A');
echo "\n";
echo evaluateGrade('X');

?>