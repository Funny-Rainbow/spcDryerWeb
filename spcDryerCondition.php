<?php
    $fileArr = array("1l","1r","2l","2r","3l","3r");
    foreach ($fileArr as $dryer){
        $textFileName = "password_".$dryer.".txt";
        // $fp = fopen($textFileName, "r") or die("读取数据失败");
        $textContent = file($textFileName);
        
        $dryerNum = $textContent[0];
        $dryerCondition = $textContent[1];

        echo $textFileName."<br>";
        echo $dryerNum."<br>";
        echo $dryerCondition."<br><br>";
    }
?>