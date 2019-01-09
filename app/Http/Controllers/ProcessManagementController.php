<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProcessManagement;
use App\Documentation;
use App\Implementation;
use App\Audit;
use App\Assessment;
use App\Payment;
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
        $auditid = $this->audit($management_id,$request);
        $assessment = $this->assessment($management_id,$request);
        $payment = $this->payment($management_id,$request);
    }

    /** 
     *  Store data in 
     *  documentation table
    */

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

    /** 
     *  Store data in 
     * implementation table
    */

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

   /** 
     *  Store data in 
     * internal Audit table
    */

    private function audit($management_id,$data)
    {

        $audit =  new Audit();
        $audit->order_id = $management_id;
        $audit->int_audit_plnd_date = $data->int_audit_plnd_date;
        $audit->int_audit_actual_date = $data->int_audit_actual_date;
        $audit->int_audit_comment = $data->int_audit_comment;
        $audit->adequacy_audit_plnd_date = $data->adequacy_audit_plnd_date;
        $audit->adequacy_audit_actual_date = $data->adequacy_audit_actual_date;
        $audit->adequacy_audit_comment = $data->adequacy_audit_comment;
        $audit->application_plnd_dt = $data->application_plnd_dt;
        $audit->application_actual_dt = $data->application_actual_dt;
        $audit->application_comment = $data->application_comment;
      
        //dd($internalaudit);
        $audit->save();
    }

     /** 
     *  Store data in 
     * assessment table
    */

    private function assessment($management_id,$data)
    {

        $assessment =  new Assessment();
        $assessment->order_id = $management_id;
        $assessment->pre_assmnt_plnd_date = $data->pre_assmnt_plnd_date;
        $assessment->pre_assmt_actual_date = $data->pre_assmt_actual_date;
        $assessment->pre_assmt_comment = $data->pre_assmt_comment;
        $assessment->final_assmt__plnd_date = $data->final_assmt__plnd_date;
        $assessment->final_assmt_actual_date = $data->final_assmt_actual_date;
        $assessment->final_assmt_comment = $data->final_assmt_comment;
      
        //dd($internalaudit);
        $assessment->save();
    }

    
     /** 
     *  Store data in 
     * payment table
    */

    private function payment($management_id,$data)
    {

        $payment =  new Payment();
        $payment->order_id = $management_id;
        $payment->adv_plnd_dt = $data->adv_plnd_dt;
        $payment->adv_act_dt = $data->adv_act_dt;
        $payment->adv_remark = $data->adv_remark;
        $payment->first_instal_plnd_dt = $data->first_instal_plnd_dt;
        $payment->first_instal_act_dt = $data->first_instal_act_dt;
        $payment->first_instal_remark = $data->first_instal_remark;
        $payment->sec_instal_pl_dt = $data->sec_instal_pl_dt;
        $payment->sec_instal_act_dt = $data->sec_instal_act_dt;
        $payment->sec_instal_remark = $data->sec_instal_remark;
        $payment->third_instal_pl_dt = $data->third_instal_pl_dt;
        $payment->third_instal_act_dt = $data->third_instal_act_dt;
        $payment->third_instal_remark = $data->third_instal_remark;
        $payment->final_pay_pl_dt = $data->final_pay_pl_dt;
        $payment->final_pay_act_dt = $data->final_pay_act_dt;
        $payment->final_pay_remark = $data->final_pay_remark;
      
        //dd($internalaudit);
        $payment->save();
    }





     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($management_id)
    {
       
    }

}
