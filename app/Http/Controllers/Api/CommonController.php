<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Model\Activity;
use App\Model\Client;
use App\Model\Type;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function index()
    {
    }
    public function getAllClients()
    {
        $clients = Client::all();
        return $clients;
    }
    public function createClient(Request $request)
    {
        $new = new Client();
        $new->name = $request->name;
        $new->ssn = $request->ssn;
        $new->birth_date = $request->birth_date;
        $new->gender = $request->gender;
        $new->save();

        return $new->id;
    }
    public function createActivity(Request $request)
    {
        $new = new Activity();
        $new->company_name = $request->company_name;
        $new->entry_date = $request->entry_date;
        $new->exit_date = $request->exit_date;
        $new->type = $request->type;
        $new->client_id = $request->client_id;
        $new->save();

        return $new;
    }
    public function getClientById($id)
    {
        $client = Client::find($id);
        return $client;
    }
    public function getActivitiesByClientId($id)
    {
        $activities = Activity::where('client_id', $id)->get();
        return $activities;
    }
    public function deleteClientById($id)
    {
        $client = Client::find($id);
        $client->delete();
        return $id;
    }
    public function getAllTypes()
    {
        $activities = Type::all();
        return $activities;
    }
    public function updateClient(Request $request, $id)
    {
        Client::where('id', $id)->update(['name' => $request->name, 'ssn' => $request->ssn, 'birth_date' => $request->birth_date, 'gender' => $request->gender]);
        return $request;

    }
    public function deleteActivityById($id)
    {
        $activity = Activity::find($id);
        $activity->delete();
        return $id;
    }
    public function updateActivity(Request $request, $id)
    {
        Activity::where('id', $id)->update(['company_name' => $request->company_name, 'entry_date' => $request->entry_date, 'exit_date' => $request->exit_date, 'type' => $request->type]);
        return $request;
    }
    public function getActivityById($id)
    {
        $activity = Activity::find($id);
        return $activity;
    }

}
