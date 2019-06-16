<?php
/*
******
* Author: Md. Sohel Rana
* Answer: 2
******
*/
namespace App\Bongo;

class Node
{

    public $value;
    public $parent;

    public function __construct($value, $parent)
    {
        $this->value = $value;
        $this->parent = $parent;
    }

    public function lca($node1, $node2) {
        $path=array() ;
        $path2=array() ;
        $this->getParent($node1, $path);
        $this->getParent($node2, $path2);
        $result=max(array_unique(array_intersect($path,$path2)));
        print_r($result);
    }

    public function getParent($data, &$path) {
        if(is_object($data->parent))
        {
            array_push($path, $data->value);
            array_push($path, $data->parent->value);
            $this->getParent($data->parent,$path);
        }
    }


};


$node_1= new Node("1",NULL);
$node_2= new Node("2",$node_1);
$node_3= new Node("3",$node_1);
$node_4= new Node("4",$node_2);
$node_5= new Node("5",$node_2);
$node_6= new Node("6",$node_3);
$node_7= new Node("7",$node_3);
$node_8= new Node("8",$node_4);
$node_9= new Node("9",$node_4);


$node_9->lca($node_4,$node_8);


echo '<br/><br/>';

print_mem();

function print_mem()
{
   /* Currently used memory */
   $mem_usage = memory_get_usage();

   /* Peak memory usage */
   $mem_peak = memory_get_peak_usage();

   echo 'The script is using: <strong>' . round($mem_usage / 1024) . 'KB</strong> of memory.<br>';
   echo 'Peak usage: <strong>' . round($mem_peak / 1024) . 'KB</strong> of memory.<br><br>';
}

?>
