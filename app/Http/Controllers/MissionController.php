<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:mission-create|mission-read|mission-update|mission-delete|mission-approve|mission-reject', ['only' => ['index','show']]);
         $this->middleware('permission:mission-create', ['only' => ['create','store']]);
         $this->middleware('permission:mission-update', ['only' => ['edit','update']]);
         $this->middleware('permission:mission-delete', ['only' => ['destroy']]);
         $this->middleware('permission:mission-approve', ['only' => ['approve']]);
         $this->middleware('permission:mission-reject', ['only' => ['reject']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $missions = Mission::latest()->paginate(7);

        return view('missions.index',compact('missions'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('missions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        Mission::create($request->all());

        return redirect()->route('missions.index')
                        ->with('success','Mission created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function show(Mission $mission): View
    {
        return view('missions.show',compact('mission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function edit(Mission $mission): View
    {
        return view('missions.edit',compact('mission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Mission  $request
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mission $mission): RedirectResponse
    {
         request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $mission->update($request->all());

        return redirect()->route('missions.index')
                        ->with('success','Mission updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mission $mission): RedirectResponse
    {
        $mission->delete();

        return redirect()->route('missions.index')
                        ->with('success','Mission deleted successfully');
    }

    /**
     * Approve the specified resource.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function approve(Mission $mission): RedirectResponse
    {
        $mission->state = 'Approved';

        return redirect()->route('missions.index')
                        ->with('success','Mission Approved');
    }

    /**
     * Reject the specified resource.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function reject(Mission $mission): RedirectResponse
    {

        return redirect()->route('missions.index')
                        ->with('success','Mission Rejected');
    }

}
