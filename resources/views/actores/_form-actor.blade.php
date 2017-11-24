<label for="first_name">Nombre</label>
<input type="text" name="first_name" value="{{ old('first_name', $actor->first_name) }}">
<br><br>
<label for="last_name">Apellido</label>
<input type="text" name="last_name" value="{{ old('last_name', $actor->last_name) }}">
