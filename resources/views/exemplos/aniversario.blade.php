<h1>Calcular Idade</h1>

@if(isset($idade))
    <p>Idade: {{ $idade }} anos</p>
@endif

<form method="POST" action="{{ route('aniversario') }}">
  @csrf
    <label>Data de Nascimento</label>
    <input type="text" id="data_nascimento" name="data_nascimento" placeholder="dd/mm/aaaa">
    <button type="submit">Calcular Idade</button>
</form>
