<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FriendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $friends = \App\Models\Friend::paginate(25);
        return view('friends.index', ['friends' => $friends]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->user()->cannot('create', Friend::class)) {
            return redirect()->route('friends.index')->with('error', 'You do not have permissions');
        }
        $friend = new \App\Models\Friend;
        return view('friends.create', ['friend' => $friend]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // //getting the data from the request and validating it
        // $validatedData = $request->validate(
        //     [
        //         'first_name' => 'required',
        //         'last_name' => 'required',
        //         'age' => 'integer',
        //     ]
        // );

        //if the data is good, creating a new friend bit of data
        \App\Models\Friend::create($this->validateData($request));
        //Dump and die to check what's coming from the request
        // dd($request);

        //If it is successful we're gonna redirect them back to the main listing with a success message
        return redirect()->route('friends.index')->with('success', 'Friend was created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //findOrFail will 404 if something vanishes
        $friend = \App\Models\Friend::findOrFail($id);
        return view('friends.show', ['friend' => $friend]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $friend = \App\Models\Friend::findOrFail($id);
        return view('friends.edit', ['friend' => $friend]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //getting the data from the request and validating it

//if the data is good, creating a new friend bit of data find first -> then update
        \App\Models\Friend::find($id)->update($this->validateData($request));
//Dump and die to check what's coming from the request
// dd($request);

//If it is successful we're gonna redirect them back to the main listing with a success message
        return redirect()->route('friends.index')->with('success', 'Friend was updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Lookup the friend
        $friend = \App\Models\Friend::find($id);
        $friend->delete();

        return redirect()->route('friends.index')->with('success', 'Friend was successfully deleted');

    }

    //function to validate data
    private function validateData($request)
    {
        return $validatedData = $request->validate(
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'age' => 'integer',
            ]
        );

    }
}
