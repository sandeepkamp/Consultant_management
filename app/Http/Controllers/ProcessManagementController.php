<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProcessManagement;

class ProcessManagementController extends Controller
{


  /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('processmanagement.create');
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
            'customer_id' => 'required',
            'iso_product_id' => 'required',
            'agency_id' => 'required',
            'order_no' => 'required',
            'order_amount' => 'required',
            'order_date' => 'required',
        ];

        $this->validate($request, $rules);

        $data = $request->all();
        $processmanagement = ProcessManagement::create($data);
          //dd($processmanagement);
        return redirect()->route('processmanagement.show', ['id'=> $processmanagement->id]);

    }

}
