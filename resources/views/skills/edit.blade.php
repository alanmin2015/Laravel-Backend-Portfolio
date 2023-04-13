@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Skill</h2>

    <form method="post" action="/console/skills/edit/{{$skill->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{old('title',$skill->title)}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="level">Level:</label>
            <input type="number" name="level" id="level" value="{{old('level',$skill->level)}}" required>
            
            @if ($errors->first('level'))
                <br>
                <span class="w3-text-red">{{$errors->first('level')}}</span>
            @endif
        </div>


        <div class="w3-margin-bottom">
            <label for="learned_at">Learned At:</label>
            <input type="date" name="learned_at" id="learned_at" value="{{old('learned_at', \Carbon\Carbon::parse($skill->learned_at)->format('Y-m-d'))}}" required>
            
            @if ($errors->first('learned_at'))
                <br>
                <span class="w3-text-red">{{$errors->first('learned_at')}}</span>
            @endif
        </div>
       
        <button type="submit" class="w3-button w3-green">Edit Skill</button>

    </form>

    <a href="/console/skills/list">Back to Skill List</a>

</section>

@endsection