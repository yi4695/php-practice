<?php
// Q1 tic-tac問題
echo "1から100までのカウントを開始します\n\n";

for ($i = 1; $i <= 100 ; $i++) {
    if ($i % 4 == 0 && $i % 5 == 0) {
        echo "tic-tac\n";
    } elseif ($i % 5 == 0) {
        echo "tac\n";
    } elseif ($i % 4 == 0) {
        echo "tic\n";
    } else {
        echo "$i\n";
    }
}


// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

// 問題1
echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';

// 問題2
foreach ($personalInfos as $key => $value) {
    echo $key + 1 . '番目の' . $value['name'] . 'のメールアドレスは' . $value['mail'] . 
    'で、電話番号は' . $value['tel'] . 'です。' . "\n";
}
// keyじゃなくてindexの方がわかりやすい

// 問題3
$ageList = [25, 30, 18];

foreach ($ageList as $key => $age) {
    $personalInfos[$key]['age'] = $age;
}
// keyじゃなくてindexの方がわかりやすい

var_dump($personalInfos);


// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$yamada = new Student(120, '山田');

echo '学籍番号' . $yamada->studentId .'番の生徒は'. $yamada->studentName . 'です。';


// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    // public function setProperty($id, $name)
    // {
    //     $this->studentId = $id;
    //     $this->studentName = $name;
    // }

    public function attend($class)
    {
        echo $this->studentName . 'は' . $class .
        'の授業に参加しました。学籍番号：' . $this->studentId;
    }
}

$yamada = new Student(120, '山田');
// $yamada->setProperty(120, '山田');
$yamada->attend('PHP');


// Q5 定義済みクラス
// 問題1
date_default_timezone_set('Asia/Tokyo');

$date = new DateTime();

$date->modify('-1 month');
echo $date->format('Y-m-d'); //まとめて書ける（メソッドチェーン）

// echo $date->modify('-1 month')->format('Y-m-d');

// 問題2
date_default_timezone_set('Asia/Tokyo');

$origin = new DateTimeImmutable('1992-04-25');
$target = new DateTimeImmutable();
$interval = $origin->diff($target);
echo 'あの日から' . $interval->format('%a') . '日経過しました。';

// 118と119をまとめて書くと↓
// echo 'あの日から' . $origin->diff($target)->format('%a') . '日経過しました。';
?>