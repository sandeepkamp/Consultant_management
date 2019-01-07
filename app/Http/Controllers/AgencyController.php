<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agency;

class AgencyController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agency.index')->withCustomers(Agency::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agency.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $rules = [
            'agency_name' => 'required',
            'agency_phone_number' => 'required',
            'agency_email' => 'required',
            'city' => 'required',
            'state' => 'required',
            'street_name' => 'required',
            'pincode' => 'required',
        ];

        $this->validate($request, $rules);

        $data = $request->all();
        $agency = Agency::create($data);

        return redirect()->route('agency.show', ['id'=> $agency->id]);

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
        $customer = Customer::findOrFail($id);

        $this->validate($request, [
            'agency_name' => 'required',
            'agency_phone_number' => 'required',
            'agency_email' => 'required',
            'city' => 'required',
            'state' => 'required',
            'street_name' => 'required',
            'pincode' => 'required',
        ]);

        $customer->update($request->all());

        return redirect()->route('agency.show', ['id' => $agency->id]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agency = Agency::findOrFail($id);
        return view('agency.edit')->with('agency', $agency);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agency = Agency::findOrFail($id);
        // dd($cust_id);
        return view('agency.show')->with('agency', $agency);
    }

}
