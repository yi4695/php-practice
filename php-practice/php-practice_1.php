<?php
// Q1 変数と文字列
$name = '田畑';
echo '私の名前は「' . $name . '」です。';


// Q2 四則演算
$num = 5*4;
echo "$num\n";

$num /= 2;
echo $num;


// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');

$today = date('Y\年m\月d\日 H\時i\分s\秒');
echo '現在時刻は、' . $today . 'です。';


// Q4 条件分岐-1 if文
$device = 'windows';

if ($device === 'windows' || $device === 'mac') {
    echo '使用OSは、' . $device . 'です。';
} else {
    echo 'どちらでもありません。';
}


// Q5 条件分岐-2 三項演算子
$age = 26;
$message = ($age > 17) ? '成人です。' : '未成年です。';

echo $message;


// Q6 配列
$kanto = ['茨城県', '栃木県', '群馬県', '埼玉県', '千葉県', '東京都', '神奈川県'];
echo $kanto[3] . 'と' . $kanto[4] . 'は関東地方の都道府県です。';


// Q7 連想配列-1
$kanto = [
  '茨城県' => '水戸市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '埼玉県' => 'さいたま市',
  '千葉県' => '千葉市',
  '東京都' => '新宿区',
  '神奈川県' => '横浜市'
];

foreach ($kanto as $city => $kencho) {
  echo "$kencho \n";
}


// Q8 連想配列-2
$kanto = [
  '茨城県' => '水戸市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '埼玉県' => 'さいたま市',
  '千葉県' => '千葉市',
  '東京都' => '新宿区',
  '神奈川県' => '横浜市'
];

foreach ($kanto as $city => $kencho) {
    if ($city === '埼玉県') {
        echo "$city の県庁所在地は、 $kencho です。";
        break; // レビュー時に追記 ※break入れないと7回実行される
    }
}


// Q9 連想配列-3
$kanto = [
  '茨城県' => '水戸市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '埼玉県' => 'さいたま市',
  '千葉県' => '千葉市',
  '東京都' => '新宿区',
  '神奈川県' => '横浜市'
];

$kanto['愛知県'] = '名古屋市';
$kanto['大阪府'] = '大阪市';

foreach ($kanto as $city => $kencho) {
  if ($city !== '愛知県' && $city !== '大阪府') {
      echo "$city の県庁所在地は、 $kencho です。\n";
  } else {
      echo "$city は関東地方ではありません。\n";
  }
}


// Q10 関数-1
// 定義
function hello($name)
{
    return "$name さん、こんにちは。\n";
}

// 実行
echo hello('金谷');
echo hello('安藤');


// Q11 関数-2
function calcTaxInPrice($taxOutPrice) // 仮引数
{
    return $taxOutPrice * 1.1;
}

$price = 1000;
$taxInPrice = calcTaxInPrice($price); // 実引数

echo "$price 円の商品の税込み価格は $taxInPrice 円です。";


// Q12 関数とif文
function distinguishNum($num)
{
    if ($num % 2 == 0) {
        return "$num は偶数です。\n";
    } else {
        return "$num は奇数です。\n";
    }
}

echo distinguishNum(11);
echo distinguishNum(24);


// Q13 関数とswitch文
function evaluateGrade($score)
{
    switch ($score) {
        case 'A':
        case 'B':
            return "合格です。\n";
            // echo "aaaa"; は表示されない
            // break; はreturnを使うときは不要
        
        case 'C':
            return "合格ですが追加課題があります。\n";
            // break;
        
        case 'D':
            return "不合格です。\n";
            // break;
        
        default:
            return "判定不明です。講師に問い合わせてください。\n";
            // break;
    }
}

echo evaluateGrade('A');
echo evaluateGrade('N');
?>