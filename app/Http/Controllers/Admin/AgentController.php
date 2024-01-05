<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AgentRequest;
use App\Models\Agent;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->ajax()) {
            $agents = Agent::with('location')->orderBy('name')->get();
            return DataTables::of($agents)
                ->addColumn('name', fn (Agent $agent) => view('components.admin.agent.image-row')->with('agent', $agent))
                ->addColumn('phone', fn (Agent $agent) => $agent->phone)
                ->addColumn('email', fn (Agent $agent) => $agent->email)
                ->addColumn('location', fn (Agent $agent) => $agent->location->name)
                ->addColumn('actions', fn (Agent $agent) => view('components.admin.agent.action-button')->with('agent', $agent))
                ->rawColumns(['name', 'actions'])
                ->make(true);
        }else{
            return view('pages.admin.agent.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locations = Location::orderBy('name')->get();

        return view('pages.admin.agent.create')->with('locations', $locations);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AgentRequest $request)
    {
        $fileName = '';
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $fileName = Str::of(now()->toDateString().'-'.$request->name)->slug().'.'.$file->getClientOriginalExtension();
            $file->storeAs('public/agents', $fileName);
        }
        Agent::create([
            'location_id' => $request->location_id,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'photo' => $fileName,
            'password' => Str::password(
                length: 10, numbers: false, symbols: false
            )
        ]);

        return redirect()->route('admin.agent.index')
            ->with('success', 'Data Agent berhasil diinput');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
