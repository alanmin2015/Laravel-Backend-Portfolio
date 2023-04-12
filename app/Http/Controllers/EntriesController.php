<?php

namespace App\Http\Controllers;

use App\Models\Entry;

use Illuminate\Http\Request;

class EntriesController extends Controller
{
    public function list(){
    return view('entries.list', [
        'entries' => Entry::all()
    ]);
}

public function addForm()
{
    return view('entries.add');
}
public function add()
{

    $attributes = request()->validate([
        'title' => 'required',
        'content' => 'required',
        'learned_at' => 'required',
        'created_at' => 'required',
        'updated_at' => 'required',
    
    ]);

    $entry = new Entry();
    $entry->title = $attributes['title'];
    $entry->content = $attributes['content'];
    $entry->learned_at = $attributes['learned_at'];
    $entry->created_at = $attributes['created_at'];
    $entry->updated_at = $attributes['updated_at'];
   
    $entry->save();

    return redirect('/console/entries/list')
        ->with('message', 'Entry has been added!');
}
public function editForm(Entry $entry)
    {
        return view('entries.edit', [
            'entry' => $entry,
        ]);
    }

    public function edit(Entry $entry)
    {

        $attributes = request()->validate([
            'title' => 'required',
        'content' => 'required',
        'learned_at' => 'required',
      
        ]);

        $entry->title = $attributes['title'];
        $entry->content = $attributes['content'];
        $entry->learned_at = $attributes['learned_at'];
      
        $entry->save();

        return redirect('/console/entries/list')
        ->with('message', 'Entry has been added!');
    }
    public function delete(Entry $entry)
    {
        $entry->delete();
        
        return redirect('/console/entries/list')
            ->with('message', 'Entry has been deleted!');        
    }
}
