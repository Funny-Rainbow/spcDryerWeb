<?php
    $dryerNum = $_POST["dryerNum"];//继承提交的数据
    $dryerCondition = $_POST["dryerCondition"];
    $fileNum = $dryerNum;
    $textFileName = "password_".$fileNum.".txt";//指定文件
    $arr = array($dryerNum,"\n",$dryerCondition);//创建数组便于写入

    $fp = fopen($textFileName, "w") or die("写入失败");//将数组写入文件
    fputs($fp,$arr[0]);
    fputs($fp,$arr[1]);
    fputs($fp,$arr[2]);
    echo "数据已写入到"."(".$textFileName.")"."<br>";//打印写入结果
    echo "dryerNum:".$dryerNum."<br>";
    echo "dryerCondition:".$dryerCondition;
    fclose($fp)//关闭文件节省资源
?>