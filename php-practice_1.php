<?php
// Q1 変数と文字列
$name = '佐々木';
  echo '私の名前は' . $name . 'です。';

// Q2 四則演算
$num = 5 * 4;
$division = $num /2;
  echo $num . "\n" . $division;

// Q3 日付操作
echo '現在時刻は' . date("Y/m/d H:i:s") . 'です。';

// Q4 条件分岐-1 if文
$device = 'windows';
if ($device === 'windows'){
  echo '使用OSは、windowsです。';
}else{
  if ($device === 'mac'){
    echo '使用OSは、macです。';
  }else{
    echo 'どちらでもありません。';
  }
}
// Q5 条件分岐-2 三項演算子
$age = 20;
$message = ($age > 18)? '成人です。' :'未成年です。';
  echo $message;

// Q6 配列
$japan = ['東京都','埼玉県','栃木県','千葉県','群馬県','茨城県','神奈川県'];
  echo $japan[2] . 'と' . $japan[3] . 'は関東地方の都道府県です。';

// Q7 連想配列-1
$japan = ['東京都'=> '新宿区','神奈川県'=> '横浜市','千葉県'=> '千葉市','埼玉県'=> 'さいたま市','栃木県'=> '宇都宮市','群馬県'=> '前橋市','茨城県'=> '水戸市'];
  foreach($japan as $value){
    echo $value ."\n";
  }

// Q8 連想配列-2
$japan = ['東京都'=> '新宿区','神奈川県'=> '横浜市','千葉県'=> '千葉市','埼玉県'=> 'さいたま市','栃木県'=> '宇都宮市','群馬県'=> '前橋市','茨城県'=> '水戸市'];
$target = '埼玉県';
if (isset($japan[$target])) {
    echo $target . "の県庁所在地は" . $japan[$target] . "です。";
} else {}

// Q9 連想配列-3
$japan = ['東京都'=> '新宿区','神奈川県'=> '横浜市','千葉県'=> '千葉市','埼玉県'=> 'さいたま市','栃木県'=> '宇都宮市','群馬県'=> '前橋市','茨城県'=> '水戸市'];
$japan['愛知県'] = '名古屋市';
$japan['大阪府'] = '大阪市';
  foreach($japan as $pref => $city){
     $targets = ['東京都', '神奈川県', '千葉県', '埼玉県', '栃木県', '群馬県', '茨城県'];
      if (in_array($pref, $targets)) {
        echo $pref . 'の県庁所在地は' . $city . 'です' ."\n";
      }else{
        $nexttarget = ['愛知県', '大阪府'];
        echo $pref . 'は関東地方ではありません。' ."\n";
      }
  }

// Q10 関数-1
function hello($name)
{
  echo $name . 'さん、こんにちは。';
}
  hello('安藤');

// Q11 関数-2
function calcTaxInPrice($price)
{
  $taxInPrice = $price * 1.1;
  return $taxInPrice;
}
  $price = 1000;
  $taxInPrice = calcTaxInPrice($price);
    echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。';


// Q12 関数とif文
function distinguishNum($num){
  if ($num % 2 === 0){
    echo $num . 'は偶数です。';
  }else{
    echo $num . 'は奇数です。';
  }
}
distinguishNum(11);

// Q13 関数とswitch文
function evaluateGrade($grade){
  switch($grade){
    case '成績A';
    case '成績B':
      return '合格です。';
      break;
    case '成績C':
      return '合格ですが追加課題があります。';
      break;
    case '成績D':
      return '不合格です。';
      break;
    default:
      return '判定不明です。講師に問い合わせてください。';
      break;      
  }
}
echo evaluateGrade('成績A') . "\n";
echo evaluateGrade('成績C');
?>