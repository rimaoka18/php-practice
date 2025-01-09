<?php
// Q1 tic-tac問題
for ($i = 1; $i < 100; $i++) {
  if ($i % 4 === 0 && $i % 5 === 0) {
    echo 'tic-tac' . "\n";
  }
  elseif ($i % 4 === 0) {
    echo 'tic' . "\n";
  }
  elseif ($i % 5 === 0) {
    echo 'tac' . "\n";
  }
  else {
    echo $i . "\n";
  }
}

// Q2 多次元連想配列
// たじげん はいれつ
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

// Q2-1
echo $personalInfos[1]['name'] . "の電話番号は" . $personalInfos[1]['tel'];

// Q2-2
foreach ($personalInfos as $index => $info) {
  echo $index + 1 . "番目の" . $info['name'] . "のメールアドレスは" . $info['mail'] . "で、電話番号は" . $info['tel'] . "です。" . "\n";
}

//Q2-3
$ageList = [25, 30, 18];

foreach ($personalInfos as $index => &$info) {
  $info['age'] = $ageList[$index];
}

unset($info);

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

    public function attend($language)
    {
        echo $this->studentName .  "は" . $language . "の授業に参加しました。学籍番号：" . $this->studentId;
    }
}

$ryo = new Student(7, '今岡');

echo "学籍番号" . $ryo->studentId . "の生徒は" . $ryo->studentName . "です。"

// Q4 オブジェクト-2

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
$date = new DateTime();

$date->modify('-1 month');
echo $date->format('Y-m-d');

$today = new DateTime();
$specificDate = new DateTime('1992-04-25');
$interval = $today->diff($specificDate);
echo "あの日から " . $interval->days . " 日経過しました。";
?>
