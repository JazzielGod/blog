<x-app-layout>

    <h1>Aqui se mostrara un formulario para crear un nuevo post</h1>

    <form action="/posts/{{ $post->id }}" method="POST">

        @csrf

        @method('PUT')


        <label>
            Titulo
            <input type="text" name="title" value="{{ $post->title }}">
        </label>
        <br> <br>
        <label>
            Categoria
            <input type="text" name="category" value="{{ $post->category }}">
        </label>
        <br> <br>

        <label>
            Contenido
            <textarea name="content">{{ $post->content }}</textarea>
        </label>

        <br> <br>

        <button type="submit">Actualizar post</button>

    </form>
    
</x-app-layout>