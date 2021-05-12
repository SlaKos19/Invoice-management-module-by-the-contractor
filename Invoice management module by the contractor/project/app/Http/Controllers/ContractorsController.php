<?php

namespace App\Http\Controllers;

use App\Contractor;

// use App\invoices;
use Illuminate\Http\Request;

class ContractorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contractors = Contractor::all();
        return view('contractors.list_invoices', compact('contractors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contractors.form_invoices');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'surname' => 'required|min:5',
            'address' => 'required|min:20',
            'nip' => 'required|digits:10'
        ]);


        $contractor = new Contractor();

        
        $contractor->name = $request->name;
        $contractor->surname = $request->surname;
        $contractor->address = $request->address;
        $contractor->nip = $request->nip;

        $contractor ->save();

        return redirect()->route('contractors.index')->with('message','Kontrahent dodana poprawnie');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contractor = Contractor::with('invoices')->where('id', $id)->firstOrFail();

        return view('contractors.contractor', compact('contractor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contractor = Contractor::find($id);

        return view('contractors.edit_invoices',compact('contractor'));
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
        $contractor = Contractor::find($id);

        
        $contractor->name = $request->name;
        $contractor->surname = $request->surname;
        $contractor->address = $request->address;
        $contractor->nip = $request->nip;

        $contractor ->save();

        return redirect()->route('contractors.index')->with('message','Dane dodana poprawnie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contractor::destroy($id);

        return redirect()->route('contractors.index')->with('message','Klient została usunięta');
    }
}
