<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class mailcontroller extends Controller
{
public function send()
 {

    Mail::send(['text'=>'mail'],['name','sarthak'],function($message)
    {
$message->to('yaseen.nayyar1997@gmail.com','to yaseen.nayyar1997')->subject('Test Email');
$message->from('yaseen.nayyar1997@gmail.com','yaseen.nayyar1997');

    });

 }
}

