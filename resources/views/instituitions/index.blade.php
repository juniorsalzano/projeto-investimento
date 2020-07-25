@extends('templates.master')

@section('conteudo-view')

  @if(session('seccess'))
    <h3>{{ session('success')['messages'] }}</h3>
  @endif

  {!! Form::open(['route' => 'instituition.store', 'method' => 'post', 'class' => 'form-padrao']) !!}

    @include('templates.formulario.input',['label' => 'Nome', 'input' => 'name', 'attributes' => ['placeholder' => 'Nome']])
    @include('templates.formulario.submit', ['input' => 'Cadastrar'])

  {!! Form::close() !!}



  <table class="default-table">
    <thead>
      <tr>
        <th>#</th>
        <th>Nome da instituição</th>
        <th>Opções</th>
      </tr>
    </thead>
    <tbody>
      @foreach($instituitions as $inst)
      <tr>
        <td>{{ $inst->id }}</td>
        <td>{{ $inst->name }}</td>
        <td>
        {!! Form::open(['route' => ['instituition.destroy', $inst->id], 'method' => 'DELETE']) !!}
        {!! Form::submit('Remover') !!}
        {!! Form::close() !!}
        <a href="{{ route('instituition.show', $inst->id) }}">Detalhes</a>
        </td>
      </tr>
      @endforeach
    </tbody>
    
  </table>


@endsection