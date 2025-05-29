<h1>Создать новую группу</h1>
<form method="POST" action="{{ route('groups.store') }}">
  @csrf
  <input type="text" name="name" placeholder="Название группы" required>
  <button type="submit">Создать</button>
</form>
<a href="{{ route('groups.index') }}">Назад к списку групп</a>