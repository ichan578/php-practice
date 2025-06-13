<?php
// Q1 tic-tac問題
echo '1から100までのカウントを開始します' . "\n";

for($i = 1; $i <=100; $i++){
  if($i % 4 === 0 && $i % 5 === 0){
    echo 'tic-tac' . "\n";
  }elseif($i % 5 === 0){
    echo 'tac' . "\n";
  }elseif($i % 4 === 0){
    echo 'tic' . "\n";
  }else{
    echo $i . "\n";
  }

}


// Q2 多次元連想配列

//問題1
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

foreach($personalInfos as $info){
  if($info['name'] === 'Bさん'){
    echo $info['name'] . 'の電話番号は' . $info['tel'] . 'です。';
  }
}

//問題2
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

foreach($personalInfos as $info){
    echo $info['name'] . 'のメールアドレスは' . $info['mail'] . 'で、電話番号は' . $info['tel'] . 'です。' . "\n";
}

//問題3
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
$ageList = [25, 30, 18];

foreach($personalInfos as $i => &$y){
  $y['age'] = $ageList[$i];
}
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

$sasaki =  new Student(25,'佐々木');
  echo '学籍番号' . $sasaki -> studentId . '番の生徒は' . $sasaki -> studentName . 'です。';

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

    public function attend($subject)
    {
        echo $this -> studentName . 'は' . $subject . 'の授業に参加しました。学籍番号：' . $this -> studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス

//問題1

$day = new DateTime('2025-05-13');
echo $day ->format('Y年n月j日');

//問題2
$start = new DateTime('1992-04-25');
$end = new DateTime('2025-06-13');

$interval = $start->diff($end);
echo 'あの日から' . $interval -> days . '日経過しました。';
?>