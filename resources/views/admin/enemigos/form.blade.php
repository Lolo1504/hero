
@csrf

<div class="mb-3">
    <label for="Name" class="form-label">Nombre </label>
    <input type="text" class="form-control" id="Name" name="Name" @isset($Enemy) value = "{{$Enemy ->name }}" @endisset placeholder="Escribe el nombre del heroe">
  </div>
  <div class="mb-3">
    <label for="Hp" class="form-label">Vida </label>
    <input type="number" class="form-control" id="Hp" name="Hp" @isset($Enemy) value = "{{$Enemy ->hp }}" @endisset placeholder="Escribe la vida del heroe">
  </div>
  <div class="mb-3">
    <label for="atq" class="form-label">Ataque </label>
    <input type="number" class="form-control" id="atq" name="atq" @isset($Enemy) value = "{{$Enemy ->atq }}" @endisset placeholder="Escribe el ataque del heroe">
  </div>
  <div class="mb-3">
    <label for="def" class="form-label">Defensa </label>
    <input type="number" class="form-control" id="def" name="def" @isset($Enemy) value = "{{$Enemy ->def }}" @endisset placeholder="Escribe la defensa del heroe">
  </div>
  <div class="mb-3">
    <label for="Rxp" class="form-label">Recompensa de experiencia  </label>
    <input type="number" class="form-control" id="Rxp" name="Rxp" @isset($Enemy) value = "{{$Enemy ->Rxp }}" @endisset placeholder="Escribe la suerte del heroe">
  </div>
  <div class="mb-3">
    <label for="Rcoins" class="form-label">Recompensa de monedas </label>
    <input type="number" class="form-control" id="Rcoins" name="Rcoins" @isset($Enemy) value = "{{$Enemy ->Rcoins }}" @endisset placeholder="Escribe la cantidad de monedas del heroe">
  </div>
  <div class="mb-3">
    <label for="img_path">imagenes</label>
    <input type="file" name="img_path" id="img_path">
  </div>
  <input type="hidden" name="_token" value="{{ csrf_token() }}" />