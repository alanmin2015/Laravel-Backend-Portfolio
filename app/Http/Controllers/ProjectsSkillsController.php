<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectSkill;

class ProjectsSkillsController extends Controller
{
    public function list()
    {
        $projectSkills = ProjectSkill::all();

        return view('projectsSkills.list', ['projectsSkills' => $projectSkills]);
    }
    public function addForm()
    {
        return view('projectsSkills.add');
    }
    public function add()
    {
    
        $attributes = request()->validate([
            'project_id' => 'required',
            'skill_id'=>'required',
        ]);
    
        $projectSkills = new ProjectSkill();
        $projectSkills->project_id = $attributes['project_id'];
        $projectSkills->skill_id = $attributes['skill_id'];
    
       
        $projectSkills->save();
    
        return redirect('/console/projectsSkills/list')
            ->with('message', 'Project_Skill has been added!');
    }
    
    public function editForm(ProjectSkill $projectSkill)
        {
            return view('projectsSkills.edit', [
                'projectSkill' => $projectSkill,
            ]);
        }
    
        public function edit(ProjectSkill $projectSkill)
        {
    
            $attributes = request()->validate([
                'project_id' => 'required',
                'skill_id'=>'required',
            ]);
            $projectSkill->project_id = $attributes['project_id'];
            $projectSkill->skill_id = $attributes['skill_id'];
            $projectSkill->save();
    
    
            return redirect('/console/projectsSkills/list')
            ->with('message', 'Project_Skill has been updated!');
        }
        public function delete(ProjectSkill $projectSkill)
        {
            $projectSkill->delete();
            
            return redirect('/console/projectsSkills/list')
                ->with('message', 'Project_Skill has been deleted!');        
        }
}
