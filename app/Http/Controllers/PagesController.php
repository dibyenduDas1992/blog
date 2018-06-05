<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {
    public function getIndex(){
        return view('pages.welcome');
    }
    
    public function getAbout(){
        $name = 'myblog.com';
        return view('pages.about')->with('name',$name);
    }
    
    public function getContact(){
        return view('pages.contact');
    }
}
