  @section("nav-productos")
      <nav id="productos">
  <!-- MOBILE -->
  <!-- //////////////////////////////// -->
  <button class="navbar-toggler bars-productos" type="button" data-toggle="collapse" data-target="#criterios"
    aria-controls="criterios" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars"></i>
  </button>

  <div class="contenedor-buscador">
    <form action="paginas/auth.php" method="POST">
      <div class="input-group redimension-buscador">
        <input type="text" name="query" class="form-control" placeholder="Buscas un disco" aria-label="Buscar Disco"
          aria-describedby="button-addon2" />
        <div class="input-group-append">
          <button class="btn btn-outline-naranja" type="submit" id="button-addon2">
            Buscar
          </button>
        </div>
    </form>
  </div>
  </div>
  <div class="collapse navbar-collapse" id="criterios">
    <form action="paginas/auth.php" method="POST">
      <div id="criterios-div">
        <h3>Formato</h3>
        <div class="nav-producto-item">
          <input type="checkbox" name="formato" id="vinilo" value="vinilo" />
          <label for="vinilo">Vinilo</label>
        </div>
        <div class="nav-producto-item">
          <input type="checkbox" name="formato" id="cd" value="cd" />

          <label for="cd">Compact Disc</label>
        </div>
        <div class="nav-producto-item">
          <input type="checkbox" name="formato" id="cassette" value="cassette" />
          <label for="cassette">Cassette</label>
        </div>
        <h3>Genero</h3>

        <div class="nav-producto-item">
          <input type="checkbox" name="genre" value="rock" />
          <label for="rock">Rock</label>
        </div>
        <div class="nav-producto-item">
          <input type="checkbox" name="genre" value="pop" />

          <label for="pop">Pop</label>
        </div>
        <div class="nav-producto-item">
          <input type="checkbox" name="genre" value="classic" />
          <label for="classic">Clasica</label>
        </div>
        <h3>Decada</h3>

        <div class="nav-producto-item">
          <input type="checkbox" name="decada" value="2010" />
          <label for="2010">2010</label>
        </div>
        <div class="nav-producto-item">
          <input type="checkbox" name="decada" value="2000" />

          <label for="2000">2000</label>
        </div>
        <div class="nav-producto-item">
          <input type="checkbox" name="decada" value="1990" />
          <label for="1990">1990</label>
        </div>
      </div>
      <button type="submit" class="btn btn-naranja">Aplicar</button>
    </form>
  </div>

  <!-- //////////////////////////////// -->
  <!-- DESKTOP -->
  <!-- //////////////////////////////// -->

  <form action="paginas/auth.php" method="POST">
    <div class="container">
      <div class="row">
        <div class="col-4 nav-productos-item">
          <div class="dropdown ">
            <button class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenuButton"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Formato
            </button>
            <div class="dropdown-menu px-4 py-3">
              <div class="form-group">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="vinilo" name="formato" value="vinilo" />
                  <label class="form-check-label">
                    Vinilo
                  </label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="cd" value="cd" name="formato" />
                  <label class="form-check-label">
                    Compact Disc
                  </label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="cassette" name="formato" value="cassette" />
                  <label class="form-check-label">
                    Cassette
                  </label>
                </div>
              </div>
              <button type="submit" class="btn btn-naranja">Aplicar</button>
            </div>
          </div>
        </div>
        <div class="col-4 nav-productos-item">
          <div class="dropdown ">
            <button class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenuButton"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Generos
            </button>
            <div class="dropdown-menu px-4 py-3" aria-labelledby="dropdownMenuButton">
              <div class="form-group">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="rock" name="genero" value="rock" />
                  <label class="form-check-label">
                    Rock
                  </label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="pop" name="genero" value="pop" />
                  <label class="form-check-label">
                    Pop
                  </label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="clasica" name="genero" value="clasica" />
                  <label class="form-check-label">
                    Clasica
                  </label>
                </div>
              </div>
              <button type="submit" class="btn btn-naranja">Aplicar</button>
            </div>
          </div>
        </div>
        <div class="col-4 nav-productos-item">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenuButton"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Decada
            </button>
            <div class="dropdown-menu px-4 py-3" aria-labelledby="dropdownMenuButton">
              <div class="form-group">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="2010" name="decada" value="2010" />
                  <label class="form-check-label">
                    2010
                  </label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="2000" name="decada" value="2000" />
                  <label class="form-check-label">
                    2000
                  </label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="1990" name="decada" value="1990" />
                  <label class="form-check-label">
                    1990
                  </label>
                </div>
              </div>
              <button type="submit" class="btn btn-naranja">Aplicar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</nav>
@endsection