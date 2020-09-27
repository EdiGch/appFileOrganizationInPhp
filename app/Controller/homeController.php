<?php

class  homeController extends Controller
{
    public function index($id = '', $name = ''){
        //echo 'I am in ' . __CLASS__ . ' Method' . __METHOD__ . '<br>';
           
        $this->view('home\index', [
            'id' => 10,
            'name' => 'Tom',
        ]);

        // echo '<pre>';
        // var_dump($this);
        // echo '</pre>';
        
        $this->view->render();
    }

    public function aboutUs(){

        //echo 'I am in ' . __CLASS__ . ' Method' . __METHOD__ . '<br>';
          
        $this->view('home\aboutUs', [
            'id' => 10,
            'name' => 'Tom',
        ]);
        
        $this->view->render();
    }
}
