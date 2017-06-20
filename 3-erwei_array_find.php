<?php
$arr=array(array(1,2,7,10),array(9,11,18,30),array(30,50,80,100));
//方法一 ddd
function find1($target, $array)
{
    // write code here
    foreach($array as  $k=>$v){
        foreach($v as $k1=>$v1){
            if($v1==$target){
                return true;
            }
        }
    }
    return false;
}
//方法二
function find($target, $array)
{
    $rows=count($array);
    $column=0;
    $columns=count($array[0]);
    //从左下角开始比较 ，注意边界值
    while($rows>0 && $column>=0 && $column<$columns){
        if ($array[$rows - 1][$column] == $target) {
            return true;
        } elseif ($array[$rows - 1][$column] > $target) {
            $rows --;
        } else {
            $column ++;
        }
    }
    return false;
}
find(10,$arr);
var_dump(find(0,$arr));