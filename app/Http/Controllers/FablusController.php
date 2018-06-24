<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Site;
use App\Enquiry;
use Mail;
use App\Mail\FablusEnquiry;
use Auth;

class FablusController extends Controller
{
    public function index(){


      $domain = $this->siteDetails();

      return view('fablus.home')
      ->with('domain', $domain);
    }

    public function email(Request $request){

      $site =  Site::where('name', $_SERVER['HTTP_HOST'])->first();
      $enq = new Enquiry;
      $enq->name = $request['name'];
      $enq->email = $request['email'];
      $enq->phone = $request['phone'];
      $enq->message = $request['message'];
      $enq->save();

      Mail::to('gavinj2006@gmail.com')->send(new FablusEnquiry($request, $site));

      return redirect('/');
    }


    public function siteDetails(){
      $site = $_SERVER['HTTP_HOST'];
      $domain = Site::where('name', $_SERVER['HTTP_HOST'])->first();
      $domainName = $domain->name;

      return($domain);
    }
}
