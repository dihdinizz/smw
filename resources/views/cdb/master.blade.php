@extends ('layout.master')

@section ('content')
  <style>
    body{
      background-image: url('/img/about/about-pattern.jpg')!important;
    }
  </style>

  <section id="clube-de-beneficios">
    <div class="container">
      @yield ('cdb-content')
    </div>
  </section>
@endsection