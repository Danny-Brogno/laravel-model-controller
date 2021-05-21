@extends("Layouts.main-layout")
@section("content")

  {{$movier_active -> title}}
  {{$movier_active -> original_title}}
  {{ $movier_active -> vote }}

@endsection
