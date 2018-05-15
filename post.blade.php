@extends("layout")
@section("body")
    @foreach($post as $result)
        <h1>
            {{$result->title}}
        </h1>
        <p>
            {{$result->body}}
        </p>
    @endforeach
@endsection
@section("links");
    @foreach($results as $result)
        <li>
            <a href="/posts/{{$result->id}}">
            
            {{$result->name}}</a>
        </li>
    @endforeach
@endsection