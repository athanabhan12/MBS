<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Printer;
use Illuminate\View\View;

class PrinterController extends Controller
{
    public function index() 
    {
        $printer = Printer::all();
        return view('admin/printer')->with('printer', $printer);
    }
    public function create()
    {
        return view('admin/tambah_printer');
    }
    public function store(Request $request)
    {
        $printer                                    = new Printer;
        $printer->nama_printer                      = $request->nama_printer;
        $printer->deskripsi                         = $request->deskripsi;
        $printer->fungsi                            = $request->fungsi;
        if($request->file('image')) {
            $printer['image'] = $request->file('image')->store('post-images');
        }
        $printer->save();

        return redirect('printer');
    }
    public function edit($id)
    {
        $printer = Printer::whereId($id)->first();
        // var_dump($printer);die;
        return view('admin/edit-printer')->with('printer', $printer);
    }
    public function update(Request $request, $id)
    {
        $printer                                    = Printer::find($id);
        $printer->nama_printer                      = $request->nama_printer;
        $printer->deskripsi                         = $request->deskripsi;
        $printer->fungsi                            = $request->fungsi;

        $printer->save();
       

        return redirect('printer');
    }
    public function hapus($id){
        $printer = Printer::find($id);
        $printer->delete();
        // var_dump($printer);die;
        return redirect('printer');
    }
    public function detail(string $id): View
    {
        $printer = Printer::findOrFail($id);
        return view('admin/detail_printer', compact('printer'));
    }
}
