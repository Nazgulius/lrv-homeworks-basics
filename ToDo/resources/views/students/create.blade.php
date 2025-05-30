<h1>Добавить студента в группу: {{ $group->title }}</h1>
<form method="POST" action="{{ route('students.store', $group) }}">
    @csrf
    <input type="text" name="name" placeholder="Имя" required>
    <input type="text" name="surname" placeholder="Фамилия" required>
    <button type="submit">Добавить студента</button>
</form>
<a href="{{ route('groups.show', $group) }}">Назад к группе</a>