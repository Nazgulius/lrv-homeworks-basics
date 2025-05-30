<h1>Студент из группы {{ $group->title }} с номером: {{ $student->group_id }}</h1>
<h2>Фамилия {{ $student->surname }}</h2>
<h2>Имя {{ $student->name }}</h2>
<a href="{{ route('groups.show', $group) }}">Назад к группе</a>