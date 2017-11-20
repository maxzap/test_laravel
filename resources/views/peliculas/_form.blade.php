<form action="{{route('crearPelicula')}}" id="agregarPelicula" name="agregarPelicula" method="POST">
  {{ csrf_field() }}

    <div>
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" value="{{old('title', $pelicula->title)}}"/>
    </div>
    <div>
        <label for="rating">Rating</label>
        <input type="text" name="rating" id="rating" value="{{old('rating', $pelicula->rating)}}"/>
    </div>
    <div>
        <label for="awards">Premios</label>
        <input type="text" name="awards" id="awards" value="{{old('awards', $pelicula->awards)}}"/>
    </div>
    <div>
        <label>Fecha de Estreno</label>
                          {{-- <select name="dia">
                              <option value="">Dia</option>
                              <?php for ($i=1; $i < 32; $i++) { ?>
                                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                              <?php } ?>
                          </select>
                          <select name="mes">
                              <option value="">Mes</option>
                              <?php for ($i=1; $i < 13; $i++) { ?>
                                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                              <?php } ?>
                          </select>
                          <select name="anio">
                              <option value="">Anio</option>
                              <?php for ($i=1900; $i < 2017; $i++) { ?>
                                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                              <?php } ?>
                          </select> --}}
        <br>
        <input type="date" name="release_date" value="{{ old('release_date, $pelicula->release_date')}}">
    </div>
    <input type="submit" value="Agregar Pelicula" name="submit"/>
</form>
