<h1>Студент из группы: {{ $group->name }}</h1>
<a href="{{ route('groups.index') }}">Вернуться к списку групп</a>
<h2>Студенты:</h2>
<ul>
@foreach($students as $student)
  <li>
    <a href="{{ route('students.show', $student) }}">{{ $student->name }}</a>
  </li>
@endforeach
</ul>