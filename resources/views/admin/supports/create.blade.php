<h1>Cadastrando um novo assunto</h1>
<form action="{{ route('support.store') }}" method="POST">
    @csrf
    <input type="text" name="subject" placeholder="Assunto">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição"></textarea>
    <button type="submit">Salvar</button>
</form>
