<?php
use PHPUnit\Framework\TestCase;
require_once (dirname(__FILE__)).'../post_controller.php';

class post_test extends TestCase{

public function testPostCreate(){
        
         $response = createPost("title","hello world");
         $this->assertTrue($response);

     }

     public function testPostUpdate(){
        
         $response = updatePost("5", "updated title", "updated body");
         $this->assertTrue($response);
     }

     public function testPostDelete(){
        
         $response = deletePost("5");
         $this->assertTrue($response);
     }

     public function testSinglePost(){

         $response = getSinglePost("15");
         $this->assertArrayHasKey('id', $response);
     }

     public function testSinglePostQuery(){

         $response = getSinglePost("15");
         $this->assertTrue($response);
     }

     public function testGetAllPosts(){
         $response = getPosts();
         $this->assertIsArray($response);
     }

    public function testIfFileExists(){
        $this->assertFileExists('../post_controller.php');
    }

    public function testIfPostClassExists(){
        $this->assertFileExists('../classes/post_class.php');
    }
}