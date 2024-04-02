


@csrf

<div class="mb-3">
    <label for="Name" class="form-label">Nombre </label>
    <input type="text" class="form-control" id="Name" name="Name" @isset($item) value = "{{$item ->name }}" @endisset placeholder="Escribe el nombre del heroe">
  </div>
  <div class="mb-3">
      <label for="Hp" class="form-label">Vida </label>
      <input type="number" class="form-control" id="Hp" name="Hp" @isset($item) value = "{{$item ->hp }}"  @endisset placeholder="Escribe la vida del heroe">
  </div>
  <div class="mb-3">
    <label for="atq" class="form-label">Ataque </label>
    <input type="number" class="form-control" id="atq" name="atq" @isset($item) value = "{{$item ->atq }}" @endisset placeholder="Escribe el ataque del heroe">
  </div>
  <div class="mb-3">
    <label for="def" class="form-label">Defensa </label>
    <input type="number" class="form-control" id="def" name="def" @isset($item) value = "{{$item ->def }}" @endisset placeholder="Escribe la defensa del heroe">
  </div>
  <div class="mb-3">
    <label for="luck" class="form-label">Suerte </label>
    <input type="number" class="form-control" id="luck" name="luck" @isset($item) value = "{{$item ->luck }}" @endisset placeholder="Escribe la suerte del heroe">
  </div>
  <div class="mb-3">
    <label for="cost" class="form-label">Coste </label>
    <input type="number" class="form-control" id="cost" name="cost" @isset($item) value = "{{$item ->cost }}" @endisset placeholder="Escribe la cantidad de monedas del heroe">
  </div>
  <div class="mb-3">
    <label for="img_path">imagenes</label>
    <input type="file" name="img_path" id="img_path">
  </div>
  <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
