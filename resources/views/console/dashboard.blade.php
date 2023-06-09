@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <ul id="dashboard">
       
        <li><a href="/console/projects/list">Manage Projects</a></li>
        <li><a href="/console/skills/list">Manage Skills</a></li>
        <li><a href="/console/projectsSkills/list">Manage Projects_Skills</a></li>
        <li><a href="/console/educations/list">Manage Educations</a></li>
        <li><a href="/console/users/list">Manage Users</a></li>
        <li><a href="/console/entries/list">Manage Entry</a></li>
        <li><a href="/console/topics/list">Manage Topics</a></li>
        <li><a href="/console/types/list">Manage Types</a></li>
        <li><a href="/console/logout">Log Out</a></li>
    </ul>

</section>

@endsection
