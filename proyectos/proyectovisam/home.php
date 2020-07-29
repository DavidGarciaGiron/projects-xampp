<div class="row">
    <div class="col-md-2">
      <div id="sidebar">
      <ul>
        <li>
          <br>
          <img src="images/perfil.png" alt="Logo Fazt" class="perfil" style="width: 200px;">
          <br><br>
          <h4>Usuario: <?= $user['username'] ?></h3>
          <h6>Email: <?= $user['email'] ?></h4>
          <br>
        </li>
        <li>
          <a class="nav-link dropdown-toggle" href="#" class="sidebar-text">Home</a></li>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropright">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Monitoreo
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="nav-link dropdown-item" href="#">Participativo</a>
                <a class="nav-link dropdown-item" href="#">Obligatorio</a>
            </li>
            </ul>
              <li><a class="nav-link dropdown-toggle" href="#" class="sidebar-text">Consumo</a></li>
              <li><a class="nav-link dropdown-toggle" href="#" class="sidebar-text">Eventos</a></li>
              <li><a class="nav-link dropdown-toggle" href="#" class="sidebar-text">Indicadores</a></li>
              <li><a class="nav-link dropdown-toggle" href="#" class="sidebar-text">Tiempo Real</a></li>
              <li><a class="nav-link dropdown-toggle" href="#" class="sidebar-text">Maqueta 3D</a></li>
              <li><a class="nav-link dropdown-toggle" href="#" class="sidebar-text">Reparte Hídrico</a></li>
              <li><a class="nav-link dropdown-toggle" href="#" class="sidebar-text">Servicios de ANA</a></li>
              <br><br><br><br><br>
              <li>
              <a 
                href="//visan.maps.arcgis.com/apps/Embed/index.html?webmap=e23278b0934d4bffa8c88f223df0515b&extent=-78.7035,-6.7644,-78.6401,-6.7274&home=true&zoom=true&scale=true&search=true&searchextent=true&details=true&legendlayers=true&active_panel=details&basemap_toggle=true&alt_basemap=topo&disable_scroll=true&theme=dark" 
                target="_blank"
                > Fullscream 
              </a>
              </li>
              <li>
                <a class="dropdown-item" href="logout.php" style="color: red">Cerrar Sesion</a>
              </li>
            </ul>
      </div>
      
      </div>
      <div class="col" style="margin: 50px">
          <h3>Datos Generales</h3>
          <hr>
          <div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
              Ingresar Datos Generales
            </button>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable2">
             Ver Mapa - Esri
            </button>

            <br><br>

            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Nombre de Unidad</th>
                  <th>Nombre de Punto</th>
                  <th>Fuente</th>
                  <th>Autorizacion</th>
                  <th>Periodo de Vigencia</th>
                  <th>Inicio de Inicio</th>
                  <th>Caudal (m3/d) Aprobado</th>
                  <th>Volumen (m3) Total Aprobado</th>
                </tr>
              </thead>
              <tbody>

                <?php
                  foreach($result as $fila):
                ?>
                  <tr>
                    <td><?php echo $fila['name_unit']; ?></td>
                    <td><?php echo $fila['name_point']; ?></td>
                    <td><?php echo $fila['source']; ?></td>
                    <td><?php echo $fila['authorization']; ?></td>
                    <td><?php echo $fila['surveillance_period']; ?></td>
                    <td><?php echo $fila['start']; ?></td>
                    <td><?php echo $fila['flow']; ?></td>
                    <td><?php echo $fila['volume']; ?></td>
                  </tr>
                <?php
                  endforeach
                ?>
              
              </tbody>
            </table>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Registra Nuevos Datos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  
                  <form action="index.php" method="post">
                      <div class="form-group">
                      <input type="text" class="form-control form-control-sm" name="name_unit" placeholder="Nombre de Unidad" require>
                      </div>
                      <div class="form-group">
                      <input type="text" class="form-control form-control-sm" name="name_point" placeholder="Nombre de Punto" require>
                      </div>
                      <div class="form-group">
                      <input type="text" class="form-control form-control-sm" name="source" placeholder="Fuente" require>
                      </div>
                      <div class="form-group">
                      <input type="text" class="form-control form-control-sm" name="authorization" placeholder="Autorizacion" require>
                      </div>
                      <div class="form-group">
                      <input type="text" class="form-control form-control-sm" name="surveillance_period" placeholder="Periodo de Vigencia" require>
                      </div>
                      <div class="form-group">
                      <input type="text" class="form-control form-control-sm" name="start" placeholder="Inicio de Inicio" require>
                      </div>
                      <div class="form-group">
                      <input type="text" class="form-control form-control-sm" name="flow" placeholder="Caudal (m3/d) Aprobado" require>
                      </div>
                      <div class="form-group">
                      <input type="text" class="form-control form-control-sm" name="volume" placeholder="Volumen (m3) Total Aprobado" require>
                      </div>
                      <button type="submit" class="btn btn-info btn-block">INSERTAR</button>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="exampleModalScrollable2" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Registra Nuevos Datos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <iframe style="                                
                              width: 100%;
                              height: 850px;" 
                          frameborder="0" 
                          scrolling="no" 
                          marginheight="0" 
                          marginwidth="0" 
                          title="WMAP_OBSERVATORIO_THY_ESC" 
                          src="//visan.maps.arcgis.com/apps/Embed/index.html?webmap=e23278b0934d4bffa8c88f223df0515b&extent=-78.7035,-6.7644,-78.6401,-6.7274&home=true&zoom=true&previewImage=true&scale=true&search=true&searchextent=true&details=true&legendlayers=true&active_panel=details&basemap_toggle=true&alt_basemap=topo&disable_scroll=true&theme=dark">
                  </iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>

      </div>
  </div>