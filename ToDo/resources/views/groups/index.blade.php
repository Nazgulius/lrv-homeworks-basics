<h1>Все группы</h1>
<a href="{{ route('groups.create') }}">Создать новую группу</a>
<ul>
@foreach($groups as $group)
  <li>
    <a href="{{ route('groups.show', $group) }}">{{ $group->name }}</a>
  </li>
@endforeach
</ul>