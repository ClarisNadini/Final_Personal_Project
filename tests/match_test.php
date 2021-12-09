<?php
use PHPUnit\Framework\TestCase;
include_once (dirname(__FILE__)).'../classes/post_class.php';

class match_test extends TestCase{
     public function testFailure(): void
     {
         $this->assertArrayHasKey('hello', ['foo' => 'baz']);
     }

     public function testSame(){
         $string1 = 'testing';
         $string3 = 'Testing';
         $this->assertSame($string1, $string3);
     }

     public function testEquals(){
         $this->assertEquals(4, 3+5);
     }

    public function testIsObject()
    {
        $post = new Post;
        $this->assertIsObject($post);

    }
}