  <table class="default-table">
    <thead>
      <tr>
        <th>#</th>
        <th>Nome do Grupo</th>
        <th>Instituição</th>
        <th>Nome do Responsável</th>
        <th>Opções</th>
      </tr>  
    </thead>
    <tbody>
        @foreach($group_list as $group)
        <tr>
          <td> {{ $group->id }} </td>
          <td> {{ $group->name }} </td>
          <td> {{ $group->instituition->name }} </td>
          <td> {{ $group->user->name }}</td>
          <td>
            {{ Form::open() }}
              {{ Form::submit('Remover') }}
              <a href="{{ route('group.show', $group->id) }}">Detalhes</a>
            {{ Form::close() }}
          </td>
        </tr> 
        @endforeach
    </tbody>
  </table>
