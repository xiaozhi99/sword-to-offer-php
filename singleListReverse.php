<?php
//测试修改
class Node{
    public $id;
    public $next=null;
    public function __construct($id){
        $this->id=$id;
    }
}

function addNode(&$first, $node){
    $cur=$first;
    while ($cur->next!=null){
        $cur=$cur->next;
    }
    $cur->next=$node;
}

function showNode($first){
    $cur=$first;
    while ($cur->next!=null){
        echo $cur->id;
        echo "<br>";
        $cur=$cur->next;
    }    
    echo $cur->id;
}

//反转
function reverseNode1(&$first){
    $cur=$first;
    $arr=array();
    while ($cur->next!=null){
        $arr[]=$cur->next->id;
        $cur=$cur->next;
    }
    return array_reverse($arr);
}

function reverseNode(&$first){
    $cur=$first;
    $pre=$first->next;
    while ($cur->next!=null){
        
        $cur->next=$cur->next->next;
        $pre=$cur;
    }
}

$first=new Node("");

$nodea=new Node("A");
$nodeb=new Node("B");
$nodec=new Node("C");
$noded=new Node("D");
$nodee=new Node("E");

addNode($first, $nodea);
addNode($first, $nodeb);
addNode($first, $nodec);
addNode($first, $noded);
addNode($first, $nodee);
showNode($first);

print_r(reverseNode1($first));
