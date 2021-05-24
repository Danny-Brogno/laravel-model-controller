@extends("Layouts.main-layout")
@section("content")

<h1 class="otherPage">{{$movier_active -> title}}</h1>
<h2>Original Title: {{$movier_active -> original_title}}</h2>
<h2>Ranking: {{ $movier_active -> vote }}</h2>

@endsection
