<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;

class TopicsController extends Controller
{
    public function list()
{
    return view('topics.list', [
        'topics' => Topic::all()
    ]);
}
public function addForm()
{
    return view('topics.add');
}
public function add()
{

    $attributes = request()->validate([
        'title' => 'required',
        'created_at' => 'required',
        'updated_at' => 'required',
    
    ]);

    $topic = new Topic();
    $topic->title = $attributes['title'];
    $topic->created_at = $attributes['created_at'];
    $topic->updated_at = $attributes['updated_at'];
   
    $topic->save();

    return redirect('/console/topics/list')
        ->with('message', 'Topic has been added!');
}


public function editForm(Topic $topic)
    {
        return view('topics.edit', [
            'topic' => $topic,
        ]);
    }

    public function edit(Topic $topic)
    {

        $attributes = request()->validate([
        'title' => 'required',
        'created_at' => 'required',
      
        ]);

        $topic->title = $attributes['title'];
        $topic->created_at = $attributes['created_at'];
      
        $topic->save();

        return redirect('/console/topics/list')
        ->with('message', 'Topic has been added!');
    }
    public function delete(Topic $topic)
    {
        $topic->delete();
        
        return redirect('/console/topics/list')
            ->with('message', 'Topic has been deleted!');        
    }
}
