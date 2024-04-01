
    @csrf

    <div class="mb-3">
        <label for="Name" class="form-label">Nombre </label>
        <input type="text" class="form-control" id="Name" name="Name" @isset($hero) value = "{{$hero ->name }}" @endisset placeholder="Escribe el nombre del heroe">
      </div>
      <div class="mb-3">
        <label for="Hp" class="form-label">Vida </label>
        <input type="number" class="form-control" id="Hp" name="Hp" @isset($hero) value = "{{$hero ->hp }}" @endisset placeholder="Escribe la vida del heroe">
      </div>
      <div class="mb-3">
        <label for="atq" class="form-label">Ataque </label>
        <input type="number" class="form-control" id="atq" name="atq" @isset($hero) value = "{{$hero ->atq }}" @endisset placeholder="Escribe el ataque del heroe">
      </div>
      <div class="mb-3">
        <label for="def" class="form-label">Defensa </label>
        <input type="number" class="form-control" id="def" name="def" @isset($hero) value = "{{$hero ->def }}" @endisset placeholder="Escribe la defensa del heroe">
      </div>
      <div class="mb-3">
        <label for="luck" class="form-label">Suerte </label>
        <input type="number" class="form-control" id="luck" name="luck" @isset($hero) value = "{{$hero ->luck }}" @endisset placeholder="Escribe la suerte del heroe">
      </div>
      <div class="mb-3">
        <label for="coins" class="form-label">Monedas </label>
        <input type="number" class="form-control" id="coins" name="coins" @isset($hero) value = "{{$hero ->coins }}" @endisset placeholder="Escribe la cantidad de monedas del heroe">
      </div>
  
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    

