<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

class twitterController extends Controller
{
    public function main()
    {
      $tweets = DB::table('tweets')
        ->select('id', 'tweet')
        ->orderBy('id', 'desc')
        ->get();
        return view ('mainTwitter',[
          'tweets'=> $tweets
        ]);

    }

    public function store(Request $request)
    {
      $validator=Validator::make(
        [
          'tweet'=>request('tweet')
        ],
        [
          'tweet'=>'max:140|required'
        ]
        );

        if($validator->passes())
        {
          DB::table('tweets')->insert([
            'tweet'=>request('tweet')
          ]);
        return redirect('/')
        ->with('successStatus', 'Tweet successfully created!');
        }
        else {
          return redirect ('/')
          ->withErrors($validator);
        }
    }

    public function destroy($tweetID)
    {
      DB::table('tweets')
      ->where('id', '=', $tweetID)
      ->delete();

      return redirect('/')
        ->with('successStatus', 'Tweet was deleted successfully');
    }

    public function view($tweetID)
    {
      $tweets = DB::table('tweets')
      ->where('id', '=', $tweetID)
      ->get();
      return view('singleTweet', [
        'tweets'=> $tweets
      ]);
    }

}
