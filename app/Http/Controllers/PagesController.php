<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index() {
       $title = "Laravel'e hoş geldiniz";
       # Method-1 ) pass parameter from controller to view using compact()
       # return view('pages.index',compact('title'));

       # Method-2 ) pass parameter from controller to view using with()
       # return view('pages.index')->with('title',$title);
       
      return view('pages.index')->with('title',$title);
    }

   public function about() {
        $title = "Laravel'e Kimler Gelmiş";
        return view('pages.about')->with('title',$title);
    }
    
   public function services() {
       $data = array(
           'title'    => 'Servisler',
           'services' => ['Anasayfa','Urunler', 'Hakkında', 'Profil', 'Siparişleerim'],
           'item_href'=> ['/','/urunler','/about','/profile','/orders']
       );
        return view('pages.services')->with($data);
    }

   public function contact() {
        return view('pages.contact');
    }    

}
