<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use App\Controller\AppController;

/**
 * Description of HelloController
 *
 * @author yasufumi
 */
class HelloController extends AppController
 {
        public function index() 
        {
            $str=$this->request->data('text1');
            if($str !=null){
                $this->set('message','you typed: '.$str);
            } else {
                $this->set('message','please enter');
            }
            
        }
        
        /*
        public function index($a="",$b="") 
        {
            $this->autoRender = false;
            echo "<html><head></head><body>";
            echo "<h1> Hello!</h1>";
            echo "<p> これ は、 サンプル で 作成 し た ページ です。 </p>";
            echo "パラメータA:".$a."<br>";
            echo "パラメータB:".$b."<br>";
            echo "</body></html>";
        }
         */
        
        public function test() 
        {
            $this->autoRender = false;
            echo "<html><head></head><body>";
            echo "<h1> Hello!</h1>";
            echo "<p> test ページ です。 </p>";
            echo "</body></html>";
            
            $this->setAction('err');
            
            return;
        }
        
        public function err() 
        { 
            $this->autoRender = false;
            echo "<html><head></head><body>";
            echo "<h1> Hello!</h1>";
            echo "<p> パラメータ が あり ませ ん でし た。 </p>";
            echo "</body></html>";
        }
}
