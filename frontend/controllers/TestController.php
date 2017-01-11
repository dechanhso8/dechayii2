<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index'); // อยู่ใน folder >Views>test> file index.php
    }

    public function actionTest1() {
        //  echo "Test 1";
        $a = 4;
        $b = 8;
        $sum = $a + $b;
        $param=['sumab'=>$sum,'aa'=>$a,'bb'=>$b];
        //return $this->render('test1', ['aa' => $a, 'bb' => $b, 'sumab' => $sum]);
        // return $this->render('test1',array('aa'=>$a,'bb'=>$b,'sumab'=>$sum)); //**array
        return $this->render('test1', $param);
    }

    public function actionTest2() {
        echo "Test Array";
        return $this->render('test2');
    }
 public function actionTest3($name=null,$surname=null){
     
    // echo "Name is $name and surname is $surname ";
     $info ="Your name is $name $surname";
     return $this->render('test3',['info'=>$info]);
     
 }
}
