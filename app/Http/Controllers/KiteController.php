<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp;

class KiteController extends Controller
{
  public $secretKey = 'd01d8a07b51548550d72c168efad89cfd4fe24a7';
  public $publicKey = 'ceb0d0bc57abc97455229a5816f9fa47391c8753';
  public $apiEndpoint = 'https://api.kite.ly';
  public $apiMethodPrint = '/v4.0/print/';
  public $headers = [
 'Authorization: ApiKey ceb0d0bc57abc97455229a5816f9fa47391c8753:d01d8a07b51548550d72c168efad89cfd4fe24a7'
  ];

    public function index()
    {


        $shipping_address = collect([

          'shipping_address'=>array(
            'recipient_name' => 'Gavin Jones',
            'address_line_1' => '57 Colleys Lane',
            'address_line_2' => 'Willaston',
            'city' => 'Nantwich',
            'county_state' => 'Cheshire',
            'postcode' => 'CW5 6NS',
            'country_code' => 'GBR'
          )
          ,
          'customer_email'=> 'gavinj2006@gmail.com',
          'customer_phone'=> '+44 (0)784297 1234',
          'customer_payment'=>array(
            'amount'=> 29.99,
            'currency'=>'USD'
          ),
          'jobs'=>array(
            ['assets'=> array('http://psps.s3.amazonaws.com/sdk_static/1.jpg'),
            'template_id'=>'i6_case'],
            ['assets' => array('http://psps.s3.amazonaws.com/sdk_static/2.jpg'),
            'template_id'=>'a1_poster'],
          ),

        ]);

          $dataString  = json_encode($shipping_address);

          $curl = curl_init($this->apiEndpoint.$this->apiMethodPrint);
          curl_setopt($curl, CURLOPT_HTTPHEADER, $this->headers);
          curl_setopt($curl, CURLOPT_POSTFIELDS, $dataString);
          curl_setopt($curl, CURLOPT_POST, 1);
          curl_exec($curl);


    }

    public function arrayTest(){

      $collection = collect();


while ($i <= 2 ){
  $collection->push([
      'shipping_address' =>
      [
        'recipient_name' => 'Bill Jones'.$i,
        'address_line_1' => '57 Colleys Lane',
        'address_line_2' => 'Willaston',
        'city' => 'Nantwich',
        'county_state' => 'Cheshire',
        'postcode' => 'CW5 6NS',
        'country_code' => 'GBR'
     ],
     'customer_email'=> 'gavinj2006@gmail.com',
     'customer_phone'=> '+44 (0)784297 1234',
     'customer_payment'=>[
       'amount'=> 29.99,
       'currency'=>'USD'
     ],
     'jobs'=>[
       ['assets'=> array('http://psps.s3.amazonaws.com/sdk_static/1.jpg'),
       'template_id'=>'i6_case'],
       ['assets' => array('http://psps.s3.amazonaws.com/sdk_static/2.jpg'),
       'template_id'=>'a1_poster'],
     ],

  ]);

  $i++;
}



      return($collection);

      $keys = $collection->keys();

      $keys->all();

      echo $collection;
    }

}
