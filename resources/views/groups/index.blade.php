@extends('templates.master')

@section('conteudo-view')

  {!! Form::open(['route' => 'group.store', 'method' => 'post', 'class' => 'form-padrao']) !!}
  
    @include('templates.formulario.input', ['label' => 'Nome do Grupo', 'input' => 'name', 'attributes' => ['placeholder' => 'Nome do Grupo']])
    @include('templates.formulario.input', ['label' => 'User', 'input' => 'user_id', 'attributes' => ['placeholder' => 'User']])
    @include('templates.formulario.input', ['label' => 'Instituition', 'input' => 'instituition_id', 'attributes' => ['placeholder' => 'Instituition']])
    @include('templates.formulario.submit', ['input' => 'Cadastrar'])
    {!! Form::close() !!}
  

@endsection