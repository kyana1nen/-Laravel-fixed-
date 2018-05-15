@extends("layout")
@section("body");
    <h1>Главная</h1> 
@endsection
@section("links");
    @foreach($results as $result)
        <li>
            <a href="posts/{{$result->id}}">
            
            {{$result->name}}</a>
        </li>
    @endforeach
@endsection