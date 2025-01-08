<?php
// Q1 変数と文字列
$name = '今岡';
echo '私の名前は'.$name . 'です。'

// Q2 四則演算
$num = 5 * 4;
echo "$num";
echo ($num/2)


// Q3 日付操作
echo "現在時刻は,". date("Y-m-d H:i:s") ."です。";

// Q4 条件分岐-1 if文
$device = 'mac';

if ($device === 'mac' || $device === 'windows') {
  echo "使用OSは、$device です。";
} else {
  echo 'どちらでもありません。'
};

// Q5 条件分岐-2 三項演算子
$age = 25;
$message = ($age > 18) ? '成人です。' : '未成年です。';

echo $message


// Q6 配列
$prefecture = ['埼玉県', '茨城県', '栃木県', '千葉県'];
echo "$prefecture[2]と$prefecture[3]関東地方の都道府県です。"

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
foreach ($kanto as $prefecture => $capital) {
  if ($prefecture === '埼玉県') {
    echo "$prefecture の県庁所在地は、$capital";
  }
}

// Q9 連想配列-3
$kanto['愛知県'] = '名古屋市'
$kanto['大阪府'] = '大阪市'

$kantoPrefecture = ['東京都', '神奈川県', '千葉県', '埼玉県', '栃木県', '群馬県', '茨城県']

foreach ($kanto as $prefecture => $capital) {
  if (in_array ($prefecture, $kantoPrefectures)) {
    echo $prefecture . 'の県庁所在地は、' . $capital . 'です. \n';
  } else {
    echo $prefecture . 'は関東地方ではありません.';
  }
}

// Q10 関数-1
function hello ($name)
{
  echo $name . 'さん, こんにちは'
}

hello('今岡')
hello('鈴木')

// Q11 関数-2
function calcTaxInPrice($price)
{
  $taxInPrice = $price * 1.10;
  return $taxInPrice;
}
$price = 1000;
$taxInPrice = calcTaxInPrice($price);

echo "税抜き価格: ¥" . $price . " の税込価格は ¥" . round($taxInPrice, 2) . " です。";
// Q12 関数とif文
function distinguishNum($number)
{
  if ($number % 2 === 0) {
    echo $number . 'は奇数です。'
  } else {
    echo $number . 'は偶数です。'
  }
}

distinguishNum(8)
distinguishNum(1)

// Q13 関数とswitch文

function evaluateGrade($grade)
{
  switch ($grade) {
    case 'A':
    case 'B':
      echo '合格です。';
      break;

    case 'C':
      echo '合格ですが追加課題があります。';
      break;

    case 'D':
      echo '不合格です。';
      break;

    default:
      echo '判定不明です。講師に問い合わせてください。';
      break;
  }
}

evaluateGrade('A')
?>
