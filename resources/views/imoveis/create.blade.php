@extends('layouts.app')
@section('content')

<form method="POST" action="/store">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="mb-3">
  <label  class="form-label">Título</label>
  <input type="text" name="titulo" class="form-control"  placeholder="digite o titulo do imóvel">
</div>
<div class="mb-3">
  <label  class="form-label">Descrição do Imóvel</label>
  <textarea class="form-control" name="descricao" rows="3"></textarea>
</div>
<div class="mb-3">
<button type="submit" class="btn btn-success">Salvar</button>
</div>
</form>

@endsection
