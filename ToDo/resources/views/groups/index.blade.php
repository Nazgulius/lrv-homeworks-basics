<h1>Все группы</h1>
<a href="{{ route('groups.create') }}">Создать новую группу</a>
<ul>
@foreach($groups as $group)
  <li>
    <a href="{{ route('groups.show', $group) }}">{{ $group->title }} - {{ $group->start_from }} - {{ $group->is_active }}</a>
  </li>
@endforeach
</ul>