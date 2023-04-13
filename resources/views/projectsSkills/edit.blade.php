@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Skill</h2>

    <form method="post" action="/console/projectsSkills/edit/{{$projectSkill->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="project_id">Project ID:</label>
            <input type="number" name="project_id" id="project_id" value="{{old('project_id',$projectSkill->project_id)}}" required>
            
            @if ($errors->first('project_id'))
                <br>
                <span class="w3-text-red">{{$errors->first('project_id')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="skill_id">Skill ID:</label>
            <input type="number" name="skill_id" id="skill_id" value="{{old('skill_id',$projectSkill->skill_id)}}" required>
            
            @if ($errors->first('skill_id'))
                <br>
                <span class="w3-text-red">{{$errors->first('skill_id')}}</span>
            @endif
        </div>


       
        <button type="submit" class="w3-button w3-green">Edit Project_Skill</button>

    </form>

    <a href="/console/projectsSkills/list">Back to Project_Skill List</a>


</section>

@endsection