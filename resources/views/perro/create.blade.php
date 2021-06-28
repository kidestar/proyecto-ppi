Formulario para crear un perro

<form action="{{ url('/perro') }}" method="post" enctype="multipart/form-data">
@csrf

<label for="Nombre"> Nombre </label>
<input type="text" name="Nombre" id="Nombre">
<br>
<label for="FechaIngreso"> Fecha Ingreso </label>
<input type="text" name="FechaIngreso" id="FechaIngreso">
<br>
<label for="Raza"> Raza </label>
<input type="text" name="Raza" id="Raza">
<br>
<label for="Edad"> Edad </label>
<input type="text" name="Edad" id="Edad">
<br>
<label for="Refugio"> Refugio </label>
<input type="text" name="Refugio" id="Refugio">
<br>
<label for="Foto"> Foto </label>
<input type="file" name="Foto" id="Foto">
<br>

<input type="submit" name="Enviar" id="Enviar">
<br>

</form>