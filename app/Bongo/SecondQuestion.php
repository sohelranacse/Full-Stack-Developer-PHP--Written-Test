<?php
/*
******
* Author: Md. Sohel Rana
* Answer: 2
******
*/
class Person {
   public function __construct($first_name, $last_name, $father)
   {
      $this->first_name = $first_name;
      $this->last_name = $last_name;
      $this->father = $father;
    }
}

$person_a = new Person("User", "1", NULL);
$person_b = new Person("User", "2", $person_a);

$a = array (
      "key1" => 1,
      "key2" => array (
            "key3" => 1,
            "key4" => array (
                  "key5" => 4,
                  "User" => $person_b,
            ),
      ),
);

function printDepth($data) {
    static  $depth=1;
    foreach($data as $key => $value){
        echo $key." ".$depth."<br/>";
        if(is_array($value) || is_object($value))
        {
            $depth++;
            printDepth($value);
        }
    }
}

function add($a, $b)
{
  return $a + $b;
}

printDepth($a);

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
