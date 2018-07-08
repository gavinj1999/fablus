<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Slack;
use Abraham\TwitterOAuth\TwitterOAuth;

class CustomCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'custom:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test a scheduled Slack Notification';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      $settings = array(
      'oauth_access_token' => "1012272607419359232-QcUrGvg41VZRZPW0fozzGLQa4QC8KK",
      'oauth_access_token_secret' => "S7lbfxu2f5QIyEsjEg0mFHnpDZkM85FTveZuag5r38151",
      'consumer_key' => "PlKfqNitz8sDlKAYYmRX6jtAC",
      'consumer_secret' => "q1Di5PeMqfVPyWdbREJpu0YgskuG0ydyTvmDUdlAMLRYcs7d5q"
        );
      $ck = $settings['consumer_key'];

      $cs = $settings['consumer_secret'];

      $at = $settings['oauth_access_token'];

      $ats = $settings['oauth_access_token_secret'];


      $connection = new TwitterOAuth($ck, $cs, $at, $ats);

      $media1 = $connection->upload('media/upload', ['media' => 'http://placehold.it/333x444']);
      $media2 = $connection->upload('media/upload', ['media' => 'http://placehold.it/666x333']);
      $parameters = [
          'status' => 'woof woof woof',
          'media_ids' => implode(',', [$media1->media_id_string, $media2->media_id_string])
      ];
      $result = $connection->get('search/tweets', ['q'=> '#engbel']);

      $returnText = $result['statuses'];


      Slack::send(json_encode($returnText));
    }
}
