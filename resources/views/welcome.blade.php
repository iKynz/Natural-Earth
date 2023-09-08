@extends('layout.main')
@section('title','Pagina Home')

@section('content')

<main>
    @if(Session::has('mensage'))
    <script>
    Swal.fire(
        '{{ Session::get("mensage") }}',
        '',
        'success'
    )
    </script>
    @endif
    <section class="w-100 d-flex flex-column justify-content-center align-items-center text-white fs-1">
        <h1 style="font-size: 1.5em;">Natural Terra</h1>
        <a href="/receitas" class="home-button">Receitas</a>
    </section>
</main>


@endsection
