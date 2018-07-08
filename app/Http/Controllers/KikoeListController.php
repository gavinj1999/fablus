<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;
class KikoeListController extends Controller
{
    public function subscribe(Request $request){
      $email = $request['email'];
      Newsletter::subscribe($email);
    return('done');

    }
}
