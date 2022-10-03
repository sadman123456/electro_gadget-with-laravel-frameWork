<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientListController extends Controller
{
    public function index()
    {
      $patients =Patient::all();

      return view('patientlist' , compact('patients'));
    }

    public function create()
    {

        return view ('addpatient');
    }

 

    public function store(Request $request)
    {
        $data=([
            'name'=> $request->name,
            'adress'=>$request->address,

            'email'=> $request->email,
            'phone'=>$request->number,

            'last_visited'=> $request->last_visited,
            'department'=>$request->department,
            'distict'=> $request->district


        ]);
        
        Patient::create($data);

        return redirect()
              ->route('patient.index')
              ->withMessage('Added Successfully!');
    
    }
    public function show($id)
    {
        $patients = Patient::find($id);

        return view ('viewpatient', compact('patients'));
    }


    public function edit($id)
    {
        $patients = Patient::find($id);

        return view ('editpatient', compact('patients'));
    }

    public function update(Request $request, $id)
    {
        $patients = Patient::find($id);

        $data=([
            'name'=> $request->name,
            'adress'=>$request->address,

            'email'=> $request->email,
            'phone'=>$request->number,

            'last_visited'=> $request->last_visited,
            'department'=>$request->department,
            'distict'=> $request->district


        ]);
        $patients->update($data);

        return redirect()
        ->route('patient.index')

        ->withMessage('Updated Successfully!');
    
    }

    public function destroy($id)
    {
        $patients = Patient::find($id);

        $patients->delete();


        return redirect()
        ->route('patient.index')

              ->withMessage('Deleted Successfully!');
    }
}
