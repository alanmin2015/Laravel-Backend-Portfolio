@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Education</h2>

    <form method="POST" action="/console/educations/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">University:</label>
            <input type="text" name="university" id="university" value="{{old('university')}}" required>
            
            @if ($errors->first('university'))
                <br>
                <span class="w3-text-red">{{$errors->first('university')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="degree">Degree:</label>
            <input type="text" name="degree" id="degree" value="{{old('degree')}}" required>
            
            @if ($errors->first('degree'))
                <br>
                <span class="w3-text-red">{{$errors->first('degree')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="program">Program:</label>
            <input type="text" name="program" id="program" value="{{old('program')}}" required>
            
            @if ($errors->first('program'))
                <br>
                <span class="w3-text-red">{{$errors->first('program')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="finished_at">Finished At/Expected:</label>
            <input type="date" name="finished_at" id="finished_at" value="{{old('finished_at')}}" required>
            
            @if ($errors->first('finished_at'))
                <br>
                <span class="w3-text-red">{{$errors->first('finished_at')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Add Education</button>

    </form>

    <a href="/console/educations/list">Back to Education List</a>

</section>

@endsection