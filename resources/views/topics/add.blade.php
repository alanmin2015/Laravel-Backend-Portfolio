@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Topic</h2>

    <form method="POST" action="/console/topics/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{old('title')}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="created_at">Created At:</label>
            <input type="date" name="created_at" id="created_at" value="{{old('created_at')}}" required>
            
            @if ($errors->first('created_at'))
                <br>
                <span class="w3-text-red">{{$errors->first('created_at')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="updated_at">Updated At:</label>
            <input type="date" name="updated_at" id="updated_at" value="{{old('updated_at')}}" required>
            
            @if ($errors->first('updated_at'))
                <br>
                <span class="w3-text-red">{{$errors->first('updated_at')}}</span>
            @endif
        </div>
        <button type="submit" class="w3-button w3-green">Add Entry</button>

    </form>

    <a href="/console/topics/list">Back to Topic List</a>

</section>

@endsection