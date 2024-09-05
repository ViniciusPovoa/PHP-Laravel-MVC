<x-layout title="Nova Serie">
    <form action="/series/salvar" method="post">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome">

        <button type="submit">Adiciona</button>
    </form>

</x-layout>