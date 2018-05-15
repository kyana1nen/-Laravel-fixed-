@extends("layout")
@section("body");
    @foreach($posts1 as $post1)
        <h1>
            {{$post1->title}}
        </h1>
        <p>
            {{ str_limit($post1->body, 600)}}
        </p>
        <a href="/post/{{$post1->id}}">Подробнее...</a>
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