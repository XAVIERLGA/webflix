<?php

namespace App\Http\Controllers;



class PolitesseController 
{
    public function helloEveryone(){
        return view('hello', [
            'name' => 'joe',
            'numbers' => [1, 2, 3],
        ]);
      
    }
    public function goodBye(){
        return view('good-bye');
    }

    public function helloSomeone($name){
        return view ('hello'.[
            'name' => $name,
            'numbers' => [],
        ]);
    }
}
