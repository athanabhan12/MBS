<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Tipe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //EDUCATION
    public function project_education(Request $request)
    {
        return view('admin/education', [
            'education' => Project::where('id_tipes', '1')->get(),
        ]);
    }
    public function create_education()
    {
         $project = Tipe::all();
         return view('admin/tambah_education', compact('project'));
    }
    public function store_education(Request $request)
    {
        $project                                    = new Project;
        $project->id_tipes                          = $request->id_tipes;
        $project->nama_klien                        = $request->nama_klien;
        $project->alamat_klien                      = $request->alamat_klien;
        $project->save();
         
        return redirect('education');
    }
    public function edit_education($id)
    {
        $project = Project::whereId($id)->first();
        // var_dump($cctv);die;
        return view('admin/edit-education')->with('project', $project);
    }
    public function update_education(Request $request, $id)
    {
        $project                                    = Project::find($id);
        $project->nama_klien                        = $request->nama_klien;
        $project->alamat_klien                      = $request->alamat_klien;

        $project->save();
        
        return redirect('education');
    }
    public function delete_education(Request $request, $id)
    {
        $project = Project::find($id);
        $project->delete();
        // var_dump($cctv);die;
        return redirect('education');
    }
    //FINANCE & BANKING
    public function project_fb(Request $request)
    {
        return view('admin/FB', [
            'fb' => Project::where('id_tipes', '2')->get(),
        ]);
    }
    public function create_fb()
    {
         $project = Tipe::all();
         return view('admin/tambah_fb', compact('project'));
    }
    public function store_fb(Request $request)
    {
        $project                                    = new Project;
        $project->id_tipes                          = $request->id_tipes;
        $project->nama_klien                        = $request->nama_klien;
        $project->alamat_klien                      = $request->alamat_klien;
        $project->save();
         
        return redirect('FB');
    }
    public function edit_fb($id)
    {
        $project = Project::whereId($id)->first();
        // var_dump($cctv);die;
        return view('admin/edit-fb')->with('project', $project);
    }
    public function update_fb(Request $request, $id)
    {
        $project                                    = Project::find($id);
        $project->nama_klien                        = $request->nama_klien;
        $project->alamat_klien                      = $request->alamat_klien;

        $project->save();
        
        return redirect('FB');
    }
    public function delete_fb(Request $request, $id)
    {
        $project = Project::find($id);
        $project->delete();
        // var_dump($cctv);die;
        return redirect('FB');
    }
    //GOVERMENT
    public function project_goverment(Request $request)
    {
        return view('admin/goverment', [
            'goverment' => Project::where('id_tipes', '3')->get(),
        ]);
    }
    public function create_goverment()
    {
         $project = Tipe::all();
         return view('admin/tambah_goverment', compact('project'));
    }
    public function store_goverment(Request $request)
    {
        $project                                    = new Project;
        $project->id_tipes                          = $request->id_tipes;
        $project->nama_klien                        = $request->nama_klien;
        $project->alamat_klien                      = $request->alamat_klien;
        $project->save();
         
        return redirect('goverment');
    }
    public function edit_goverment($id)
    {
        $project = Project::whereId($id)->first();
        // var_dump($cctv);die;
        return view('admin/edit-goverment')->with('project', $project);
    }
    public function update_goverment(Request $request, $id)
    {
        $project                                    = Project::find($id);
        $project->nama_klien                        = $request->nama_klien;
        $project->alamat_klien                      = $request->alamat_klien;

        $project->save();
        
        return redirect('goverment');
    }
    public function delete_goverment(Request $request, $id)
    {
        $project = Project::find($id);
        $project->delete();
        // var_dump($cctv);die;
        return redirect('goverment');
    }
    //NON GOVERMENT
    public function project_non_goverment(Request $request)
    {
        return view('admin/non_goverment', [
            'non_goverment' => Project::where('id_tipes', '4')->get(),
        ]);
    }
    public function create_non_goverment()
    {
         $project = Tipe::all();
         return view('admin/tambah_non_goverment', compact('project'));
    }
    public function store_non_goverment(Request $request)
    {
        $project                                    = new Project;
        $project->id_tipes                          = $request->id_tipes;
        $project->nama_klien                        = $request->nama_klien;
        $project->alamat_klien                      = $request->alamat_klien;
        $project->save();
         
        return redirect('non_goverment');
    }
    public function edit_non_goverment($id)
    {
        $project = Project::whereId($id)->first();
        // var_dump($cctv);die;
        return view('admin/edit-non_goverment')->with('project', $project);
    }
    public function update_non_goverment(Request $request, $id)
    {
        $project                                    = Project::find($id);
        $project->nama_klien                        = $request->nama_klien;
        $project->alamat_klien                      = $request->alamat_klien;

        $project->save();
        
        return redirect('non_goverment');
    }
    public function delete_non_goverment(Request $request, $id)
    {
        $project = Project::find($id);
        $project->delete();
        // var_dump($cctv);die;
        return redirect('non_goverment');
    }
    //HOSPITAL
    public function project_hospital(Request $request)
    {
        return view('admin/hospital', [
            'hospital' => Project::where('id_tipes', '5')->get(),
        ]);
    }
    public function create_hospital()
    {
         $project = Tipe::all();
         return view('admin/tambah_hospital', compact('project'));
    }
    public function store_hospital(Request $request)
    {
        $project                                    = new Project;
        $project->id_tipes                          = $request->id_tipes;
        $project->nama_klien                        = $request->nama_klien;
        $project->alamat_klien                      = $request->alamat_klien;
        $project->save();
         
        return redirect('hospital');
    }
    public function edit_hospital($id)
    {
        $project = Project::whereId($id)->first();
        return view('admin/edit-hospital')->with('project', $project);
    }
    public function update_hospital(Request $request, $id)
    {
        $project                                    = Project::find($id);
        $project->nama_klien                        = $request->nama_klien;
        $project->alamat_klien                      = $request->alamat_klien;

        $project->save();
        
        return redirect('hospital');
    }
    public function delete_hospital(Request $request, $id)
    {
        $project = Project::find($id);
        $project->delete();
        // var_dump($cctv);die;
        return redirect('hospital');
    }
}
