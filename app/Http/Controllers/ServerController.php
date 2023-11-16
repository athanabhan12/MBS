<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Server;
use Illuminate\View\View;

class ServerController extends Controller
{
    public function index() 
    {
        $server = Server::all();
        return view('admin/server')->with('server', $server);
    }
    public function create()
    {
        return view('admin/tambah_server');
    }
    public function store(Request $request)
    {
        $server                                    = new Server;
        $server->nama_server                       = $request->nama_server;
        $server->deskripsi                         = $request->deskripsi;
        $server->fungsi                            = $request->fungsi;
        if($request->file('image')) {
            $server['image'] = $request->file('image')->store('post-images');
        }
        $server->save();

        return redirect('server');
    }
    public function edit($id)
    {
        $server = Server::whereId($id)->first();
        // var_dump($server);die;
        return view('admin/edit-server')->with('server', $server);
    }
    public function update(Request $request, $id)
    {
        $server                                    = Server::find($id);
        $server->nama_server                       = $request->nama_server;
        $server->deskripsi                         = $request->deskripsi;
        $server->fungsi                            = $request->fungsi;

        $server->save();
       

        return redirect('server');
    }
    public function hapus($id){
        $server = Server::find($id);
        $server->delete();
        // var_dump($server);die;
        return redirect('server');
    }
    public function detail(string $id): View
    {
        $server = Server::findOrFail($id);
        return view('admin/detail_server', compact('server'));
    }
}
