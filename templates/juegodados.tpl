
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1 contenedor fondodados">
                  <h1 class="textojuego">Juego de Dados</h1>
                      <div class="row">
                      <div class="col-lg-4 col-lg-offset-4">
                          <div><img src="" alt=""></div>
                          <div class="input-group">
                              <span class="input-group-btn">
                                  <button class="btn btn-default" onclick="tirarVarios()" type="button">Go!</button>
                              </span>
                              <input id="cantDados" type="text" class="form-control" placeholder="Cantidad de Tiradas">
                          </div>
                      </div>
                  </div>
                  <div>
                      <h1 class="textojuego">Dados</h1>
                      <p>
                          <img id="dado1" src="images/dados/dado1.png"/>
                      </p>
                      <p>
                          <img id="dado2" src="images/dados/dado1.png"/>
                      </p>
                  </div>
                  <h3 class="textojuego">Valores de Tiradas:</h3>
                  <input type="text" id="ValoresTiradas">
                  <h3 class="textojuego">Suma Mayor:</h3>
                  <div id="margenbot"><input type="text" id="SumaMayor"></div>
              </div>
          </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/Juego.js"></script>
