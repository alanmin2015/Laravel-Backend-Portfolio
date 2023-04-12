@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Topic</h2>

    <form method="post" action="/console/topics/edit/{{$topic->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{old('title',$topic->title)}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>


        <div class="w3-margin-bottom">
            <label for="created_at">Created At:</label>
            <input type="date" name="created_at" id="created_at" value="{{old('created_at', \Carbon\Carbon::parse($topic->created_at)->format('Y-m-d'))}}" required>
            
            @if ($errors->first('learned_at'))
                <br>
                <span class="w3-text-red">{{$errors->first('created_at')}}</span>
            @endif
        </div>
       
        <button type="submit" class="w3-button w3-green">Edit Topic</button>

    </form>

    <a href="/console/topic/list">Back to Topic List</a>

</section>

@endsection