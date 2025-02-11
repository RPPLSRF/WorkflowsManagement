<?php

namespace App\Http\Controllers;

use App\Models\Left;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class leftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:left-create|left-read|left-update|left-delete|left-approve|left-reject', ['only' => ['index','show']]);
         $this->middleware('permission:left-create', ['only' => ['create','store']]);
         $this->middleware('permission:left-update', ['only' => ['edit','update']]);
         $this->middleware('permission:left-delete', ['only' => ['destroy']]);
         $this->middleware('permission:left-approve', ['only' => ['approve']]);
         $this->middleware('permission:left-reject', ['only' => ['reject']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $lefts = Left::latest()->paginate(7);

        return view('lefts.index',compact('lefts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('lefts.create');
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

        Left::create($request->all());

        return redirect()->route('lefts.index')
                        ->with('success','Leave created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Left  $left
     * @return \Illuminate\Http\Response
     */
    public function show(Left $left): View
    {
        return view('lefts.show',compact('left'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Left  $left
     * @return \Illuminate\Http\Response
     */
    public function edit(Left $left): View
    {
        return view('lefts.edit',compact('left'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Left  $request
     * @param  \App\Left  $left
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Left $left): RedirectResponse
    {
         request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $left->update($request->all());

        return redirect()->route('lefts.index')
                        ->with('success','left updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Left  $left
     * @return \Illuminate\Http\Response
     */
    public function destroy(Left $left): RedirectResponse
    {
        $left->delete();

        return redirect()->route('lefts.index')
                        ->with('success','left deleted successfully');
    }

    /**
     * Approve the specified resource.
     *
     * @param  \App\Left  $left
     * @return \Illuminate\Http\Response
     */
    public function approve(Left $left): RedirectResponse
    {

        return redirect()->route('lefts.index')
                        ->with('success','Leave Approved');
    }

    /**
     * Reject the specified resource.
     *
     * @param  \App\Left  $left
     * @return \Illuminate\Http\Response
     */
    public function reject(Left $left): RedirectResponse
    {

        return redirect()->route('lefts.index')
                        ->with('success','Leave Rejected');
    }

}
