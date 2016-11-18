<?php

namespace App\Http\Controllers;

use DB;
use App\EOSRequest;
use Illuminate\Http\Request;

class EOSRequestsController extends Controller
{
    public function index()
    {

      $requests = EOSRequest::all();

      return view('requests.index', compact('requests'));

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
      $faker = \Faker\Factory::create();

      $request['needed_by'] = $faker->dateTimeThisDecade($max = 'now');
      $request['status'] = rand(0,3);

      EOSRequest::create($request->toArray());

      return view('requests.index');
      // return $request->description;
    }

}



// DB::table('eos_requests')->insert(['name' => '2waffle 2copter', 'description' => 'Its ANOTHER teflon waffle helicopter', 'dimX' => 2, 'dimY' => 2, 'dimZ' => 2, 'volume' => 8, 'cost' => 2.22, 'clean' => true, 'hinges' => true, 'threads' => true, 'number_of_parts' => 22, 'status' => 1, 'admin_notes' => 'still do not tell anyone', 'project_id' => 1, 'user_id' => 1, 'needed_by' => new DateTime, 'completion_date' => new DateTime, 'created_at' => new DateTime, 'updated_at' => new DateTime]);
