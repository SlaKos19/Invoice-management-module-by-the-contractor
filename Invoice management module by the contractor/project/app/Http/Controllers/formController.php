<?php

namespace App\Http\Controllers;

use App\invoices;
use Illuminate\Http\Request;

class formController extends Controller
{
    public function index()
    {
        $invoices = Invoices::with('contractor')->get();
        return view('invoices.list_invoices' , ['invoices' => $invoices]);
    }
    public function create()
    {
        return view('invoices.form_invoices');
    }
    public function store(Request $request)
    {
        $invoice = new Invoices();

        $invoice->nip = $request->nip;
        $invoice->company = $request->company;
        $invoice->date = $request->date;
        $invoice->name = $request->name;
        $invoice->amount = $request->amount;
        $invoice->total = $request->total;
        $invoice-> contractor_id = $request->contractor;

        $invoice ->save();

        return redirect()->route('invoices.index')->with('message','Faktura dodana poprawnie');
    }

    public function edit($id)
    {
        $invoice = Invoices::find($id);

        return view('invoices.edit_invoices', ['invoice'=> $invoice]);


    }

    public function update($id,Request $request)
    {
        $invoice = Invoices::find($id);

        $invoice->nip = $request->nip;
        $invoice->company = $request->company;
        $invoice->date = $request->date;
        $invoice->name = $request->name;
        $invoice->amount = $request->amount;
        $invoice->total = $request->total;

        $invoice ->save();

        return redirect()->route('invoices.index')->with('message','Faktura zmieniona poprawnie');
    }

    public function delete($id)
    {
        Invoices::destroy($id);

        return redirect()->route('invoices.index')->with('message','Faktura została usunięta');


    }

}
