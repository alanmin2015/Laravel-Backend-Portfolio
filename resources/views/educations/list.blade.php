@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Educations</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>University</th>
            <th>Degree</th>
            <th>Program</th>
            <th>Finished At/Expected</th>
            <th></th>
            <th></th>

        </tr>
        <?php foreach($educations as $educations): ?>
            <tr>
                <td>{{$educations->university}}</td>
                <td>{{$educations->degree}}</td>
                <td>{{$educations->program}}</td>
                <td>{{$educations->finished_at}}</td>
                <td><a href="/console/educations/edit/{{$educations->id}}">Edit</a></td>
                <td><a href="/console/educations/delete/{{$educations->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/educations/add" class="w3-button w3-green">New Education</a>

</section>

@endsection