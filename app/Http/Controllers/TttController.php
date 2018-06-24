<?php

namespace App\Http\Controllers;

use App\Site;
use App\Portfolio;
use App\Service;
use Illuminate\Http\Request;

class TttController extends Controller
{
    public function index(){

      $domain = $this->siteDetails();

      $portfolio = Portfolio::where('site_id', $domain->id)->get();

      $services = Service::where('site_id', $domain->id)->where('front_page', 1)->get();

      return view('tintaktoe.index')
      ->with('domain', $domain)
      ->with('portfolio', $portfolio)
      ->with('services', $services);
    }

    public function siteDetails(){
      $site = $_SERVER['HTTP_HOST'];
      $domain = Site::where('name', $_SERVER['HTTP_HOST'])->first();
      $domainName = $domain->name;

      return($domain);
    }
}
