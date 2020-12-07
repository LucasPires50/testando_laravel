@extends('layouts.padrao')

@section('titulo', 'Lista de produtos')

@section('conteudo')

    <!-- Example row of columns -->
    <div class="row">
<div class="col-md-12">
      
    <form name="add" id="add" method="post" action="{{route('salvar-produtos')}}">

    @csrf

    <div class="form-group">
    <label for="nompro">Produto:</label>
    <input type="text" class="form-control" id="nompro" name="nompro"  placeholder="nome do produto">
    </div>
    <div class="form-group">
    <label for="estpro">Estoque do produto:</label>
    <input type="number" class="form-control" id="estpro" name="estpro"     placeholder="quantidade em estoque">
    </div>

    <button type="submit" class="btn btn-primary" >Salvar</button>

    <button type="submit" class="btn btn-primary" ><a  style='color:white' href="{{ route('lista-produtos') }}">Voltar</a></button>
</form>

      </div>
    </div>

@endsection