<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Education;

class EducationsController extends Controller
{
    public function list()
    {
        return view('educations.list', [
            'educations' => Education::all()
        ]);
    }

    public function addForm()
{
    return view('educations.add');
}
public function add()
{

    $attributes = request()->validate([
        'university' => 'required',
        'degree'=>'required',
        'program'=>'required',
        'finished_at'=>'required',
    ]);

    $education = new Education();
    $education->university = $attributes['university'];
    $education->degree = $attributes['degree'];
    $education->program = $attributes['program'];
    $education->finished_at = $attributes['finished_at'];
   
    $education->save();

    return redirect('/console/educations/list')
        ->with('message', 'Education has been added!');
}

public function editForm(Education $education)
    {
        return view('educations.edit', [
            'education' => $education,
        ]);
    }

    public function edit(Education $education)
    {

        $attributes = request()->validate([
            'university' => 'required',
        'degree'=>'required',
        'program'=>'required',
        'finished_at'=>'required',
        ]);

        $education->university = $attributes['university'];
        $education->degree = $attributes['degree'];
        $education->program = $attributes['program'];
        $education->finished_at = $attributes['finished_at'];
      
        $education->save();

        return redirect('/console/educations/list')
        ->with('message', 'Education has been updated!');
    }
    public function delete(Education $education)
    {
        $education->delete();
        
        return redirect('/console/educations/list')
            ->with('message', 'Education has been deleted!');        
    }
}
