@extends("Layouts.main-layout")

@section("content")

  <section>

    <div class="container">

      <ul>
        @foreach ($movies as $elem)
        <li>
          <a href="{{ route('singleFilm', $elem -> id)}}">
            {{ $elem -> id }}
            {{ $elem -> title }}
          </a>
        </li>
        @endforeach
      </ul>
    </div>

  </section>
@endsection
