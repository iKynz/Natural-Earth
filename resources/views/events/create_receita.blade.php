@extends('layout.main')
@section('title','Pagina Home')

@section('content')
<div class="container">
    <section class="card lg-w-100 md-w-50 p-5 section-blur" style="margin: 0 auto;">
        <form action="/events/create_receita" method="POST" enctype="multipart/form-data" class="form-container">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    placeholder="Título da Receita" value="{{old('title')}}">
                <label for="title">Título da Receita</label>
                @error('title')
                <div class="alert alert-danger mt-3">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <textarea class=" @error('description') is-invalid @enderror form-control mb-3 sidebar"
                    name="description" id="description" placeholder="Descrição da receita"></textarea>
                <label for="floatingTextarea">Descrição</label>
                @error('description')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <textarea class=" @error('ingredientes') is-invalid @enderror form-control mb-3" name="ingredientes"
                    id="ingredientes" placeholder="Ingredientes"></textarea>
                @error('ingredientes')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <textarea class=" @error('preparo') is-invalid @enderror form-control mb-3" name="preparo" id="preparo"
                    placeholder="Modo de Preparo"></textarea>
                @error('preparo')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <textarea class=" @error('montagem') is-invalid @enderror form-control mb-3" name="montagem"
                    id="montagem" placeholder="Montagem"></textarea>
                @error('montagem')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <div class="input-group mb-3">

                    <input type="file" class="form-control" name='image' id="image">
                </div>
                @error('image')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn-search mt-3">Criar Receita</button>
        </form>
    </section>
</div>

<script>
const form = document.querySelectorAll('form')[1];
form.addEventListener('submit', (e) => {
    e.preventDefault();
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
            e.target.submit();
        }
    })
});
</script>

@endsection
