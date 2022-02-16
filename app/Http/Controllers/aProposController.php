<?php

namespace App\Http\Controllers;



class aProposController 
{
    public function aProposMain(){
        return view ('a-propos', [
      
            'equipe' => ['Bill', 'Ben', 'Jim' ],       
         ]);
    }
    public function aProposShow($user){
        return view ('a-propos-show', ['user' => $user,]);
    }
}
