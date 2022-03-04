<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hook;

class HookController extends Controller
{
    public function hook(Request $request){

        $input = !empty($request::capture()->toArray()['leads']['update'][0]) ?
            $request::capture()->toArray()['leads']['update'][0] :
            $request::capture()->toArray()['leads']['add'][0];


        // $lead_id = 334324234;
        // $status_id = 1111;
        // $pipeline_id = 120;

        // Hook::create([
        //     'lead_id' => $lead_id,
        //     'status_id' => $status_id,
        //     'pipeline_id' => $pipeline_id,
        // ]);
    }

    public function cron()
    {
        //$changes = Change::where('status', '!=', 'OK')->get();

        $ufee = $this->init();

        dd($ufee);
    }
}
