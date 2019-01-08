<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProcessManagement;
use App\Documentation;
use App\Implementation;
use DB;

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
        $management_id = $processmanagement->id;
        $documentid = $this->document($management_id,$request);
        $implementationid = $this->implementation($management_id,$request);
    }

   private function document($management_id,$data)
    {
        $document =  new Documentation();
        $document->order_id = $management_id;
        $document->sop_planned_date = $data->sop_planned_date;
        $document->sop_actual_date = $data->sop_actual_date;
        $document->sop_comment = $data->sop_comment;
        $document->qm_planned_date = $data->qm_planned_date;
        $document->qm_actual_date = $data->qm_actual_date;
        $document->qm_comment = $data->qm_comment;
        $document->pm_planned_date = $data->pm_planned_date;
        $document->pm_actual_date = $data->pm_actual_date;
        $document->pm_comment = $data->pm_comment;
        $document->formo_planned_date = $data->formo_planned_date;
        $document->formo_actual_date = $data->formo_actual_date ;
        $document->formo_comment = $data->formo_comment;
        //dd($document);
        $document->save();
    }



    private function implementation($management_id,$data)
    {

        $implementation =  new Implementation();
        $implementation->order_id = $management_id;
        $implementation->traning_planned_date = $data->traning_planned_date;
        $implementation->traning_actual_date = $data->traning_actual_date;
        $implementation->traning_comment = $data->traning_comment;
        $implementation->implementation_planned_date = $data->implementation_planned_date;
        $implementation->implementation_actual_date = $data->implementation_actual_date;
        $implementation->implementation_comment = $data->implementation_comment;
      
        //dd($implementation);
        $implementation->save();
    }

}
