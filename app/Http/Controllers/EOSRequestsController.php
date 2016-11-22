<?php

namespace App\Http\Controllers;

use DB;
use App\EOSRequest;
use Illuminate\Http\Request;

class EOSRequestsController extends Controller
{
    public function index()
    {

      $eosrequests = EOSRequest::all();

      return view('requests.index', compact('eosrequests'));

    }

    public function show(EOSRequest $request)
    {
      return view('requests.show', compact('request'));
    }

    public function create()
    {
      return view('requests.edit');
    }

    public function store(Request $request)
    {
      // Make some dummy data for fields not filled
      $faker = \Faker\Factory::create();

      $request['needed_by'] = $faker->dateTimeThisDecade($max = 'now');
      $request['status'] = 0;
      $request['project_id'] = $faker->randomDigit;
      $request['user_id'] = $faker->uuid;
      $request['completion_date'] = $faker->dateTimeThisDecade($max = 'now');

      // Get uploaded file info
      if($request->file('stl'))
      {
        request()->file('stl')->store('stlFiles');
        $thisRequest = EOSRequest::find($request['id']);
        $thisRequest['stl'] = $request->file('stl')->path();
      }
      // Turn request object to array ... idk why I have to do this..
      EOSRequest::create($request->toArray());

      // Get all EOSRquests.. again
      $eosrequests = EOSRequest::all();

      return view('requests.index', compact('eosrequests'));
    }

}



// DB::table('eos_requests')->insert(['name' => '2waffle 2copter', 'description' => 'Its ANOTHER teflon waffle helicopter', 'dimX' => 2, 'dimY' => 2, 'dimZ' => 2, 'volume' => 8, 'cost' => 2.22, 'clean' => true, 'hinges' => true, 'threads' => true, 'number_of_parts' => 22, 'status' => 1, 'admin_notes' => 'still do not tell anyone', 'project_id' => 1, 'user_id' => 1, 'needed_by' => new DateTime, 'completion_date' => new DateTime, 'created_at' => new DateTime, 'updated_at' => new DateTime]);
