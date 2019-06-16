<?php
/*
******
* Author: Md. Sohel Rana
* Answer: 2
******
*/
class ThirdQuestionTest extends PHPUnit\Framework\TestCase
{

  /** @test */
  public function that_we_can_check_is_not_the_ancestor_of_two_nodes()
  {

      require 'app/Bongo/ThirdQuestion.php';

      $node_1= new App\Bongo\Node("1",NULL);
      $node_2= new App\Bongo\Node("2",$node_1);
      $node_3= new App\Bongo\Node("3",$node_1);
      $node_4= new App\Bongo\Node("4",$node_2);
      $node_5= new App\Bongo\Node("5",$node_2);
      $node_6= new App\Bongo\Node("6",$node_3);
      $node_7= new App\Bongo\Node("7",$node_3);
      $node_8= new App\Bongo\Node("8",$node_4);
      $node_9= new App\Bongo\Node("9",$node_4);

      $this->assertNotEquals($node_9->lca($node_6,$node_7), 2);
      
      $this->assertNotEquals($node_9->lca($node_3,$node_7), 4);

      $this->assertNotEquals($node_9->lca($node_8,$node_9), 5);

      $this->assertNotEquals($node_9->lca($node_2,$node_4), 3);
  }

}


?>
