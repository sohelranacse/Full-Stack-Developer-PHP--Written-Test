<?php
/*
******
* Author: Md. Sohel Rana
* Answer: 2
******
*/
$a = array (
      "key1" => 1,
      "key2" => array (
            "key3" => 1,
            "key4" => array (
                  "key5" => 4
            ),
      ),
);

function printDepth($data) {
    static  $depth=1;
    foreach($data as $key => $value){
        echo $key." ".$depth."<br/>";
        if(is_array($value))
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
