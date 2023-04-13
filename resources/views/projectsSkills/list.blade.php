@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Projects_Skills</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Project ID</th>
            <th>Skill ID</th>
            <th></th>
            <th></th>

        </tr>
        <?php foreach($projectsSkills as $projectsSkills): ?>
            <tr>
                <td>{{$projectsSkills->project_id}}</td>
                <td>{{$projectsSkills->skill_id}}</td>
          
                <td><a href="/console/projectsSkills/edit/{{$projectsSkills->id}}">Edit</a></td>
                <td><a href="/console/projectsSkills/delete/{{$projectsSkills->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/projectsSkills/add" class="w3-button w3-green">New Project_Skill Relation</a>

</section>

@endsection