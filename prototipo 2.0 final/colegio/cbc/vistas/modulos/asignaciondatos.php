
<div class="content-wrapper">

  <section class="content-header">

    <h1>

      Asignar Grupos

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Asignar Grupos</li>


    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">



      </div>

      <div class="box-body">

      <table class="table table-bordered table-striped dt-responsive tablas" width="100%">

        <thead>

        <tr>

          <th style="width:10px">#</th>
          <th>Matricula</th>
          <th>Nombres</th>
          <th>Apellido_Paterno</th>
          <th>Apellido_Materno</th>
          <th>Nivel</th>
          <th>Grado</th>
          <th>Grupo</th>
          <th>Genero</th>

          <th>Estatus</th>
          <th>Acciones</th>

        </tr>

        </thead>

        <tbody>

        <?php

          $item = null;
          $valor = null;

          $asignacion = ControladorAsignacionDatos::ctrMostrarAsignacion($item, $valor);

          foreach ($asignacion as $key => $value ) {

            echo ' <tr>

                    <td>'.($key+1).'</td>
                    <td class="text-uppercase">'.$value["Matricula"].'</td>
                    <td class="text-uppercase">'.$value["Nombres"].'</td>
                    <td class="text-uppercase">'.$value["Apellido_Paterno"].'</td>
                    <td class="text-uppercase">'.$value["Apellido_Materno"].'</td>
                    <td class="text-uppercase">'.$value["Nivel"].'</td>
                    <td class="text-uppercase">'.$value["Grado"].'</td>
                    <td class="text-uppercase">'.$value["Grupo"].'</td>
                    <td class="text-uppercase">'.$value["genero"].'</td>

                    <td class="text-uppercase">'.$value["Estatus"].'</td>

                    <td>


                    <div class="btn-group">

                    <button class="btn btn-warning btnEditarAsignacion" data-toggle="modal" data-target="#modalEditarAsignacion" idAsignacion="'.$value["Id"].'"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger btnEliminarAsignacion" idAsignacion="'.$value["Id"].'"><i class="fa fa-times"></i></button>

                  </div>
                    </td>

                  </tr>';
          }

        ?>

        </tbody>

      </table>

      </div>

    </div>

  </section>

</div>


<!--=====================================
MODAL ASIGNACION DE GRUPO EDITAR GRUPO
======================================-->

<div id="modalEditarAsignacion" class="modal fade " role="dialog">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Datos del alumno</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

           <!-- ENTRADA PARA EL NOMBRE -->
					 <p>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Datos del alumno
  </a>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
		<p>DATOS PERSONALES<p/>
		<div class="form-group row">

			 <div class="col-xs-4">
						 <label>Nombre</label>
					 <div class="input-group">

						 <span class="input-group-addon"><i class="fa fa-user"></i></span>

						 <input type="text" class="form-control input-sm" name="editarNombre" id="editarNombre">

						 <input type="hidden"  name="idAsignacion" id="idAsignacion" required>

					 </div>

			 </div>



			 <div class="col-xs-4">
						 <label>Apellido Paterno</label>
					 <div class="input-group">

						 <span class="input-group-addon"><i class="fa fa-user"></i></span>

						 <input type="text" class="form-control input-sm" name="editarAPaterno" id="editarAPaterno" >

					 </div>

			 </div>


			 <div class="col-xs-4">
						 <label>Apellido Materno</label>
					 <div class="input-group">

						 <span class="input-group-addon"><i class="fa fa-user"></i></span>

						 <input type="text" class="form-control input-sm" name="editarAMaterno" id="editarAMaterno">

					 </div>

			 </div>

			 <div class="form-group">
				 <div class="col-xs-4">
									 <label> Asigna el Genero</label>
											 <div class="input-group">

													 <span class="input-group-addon"><i class="fa fa-users"></i></span>

													 <select class="form-control input-sm" name="editargenero">

															 <option value="" id="editargenero"></option>

															 <option value="Hombre">Hombre</option>

															 <option value="Mujer">Mujer</option>


													 </select>
													 </div>

											 </div>

			 </div>  <!-- FIN DEL ESTADO DEL ASPIRANTE-->

			 <div class="col-xs-4">
						 <label>Curp</label>
					 <div class="input-group">

						 <span class="input-group-addon"><i class="fa fa-user"></i></span>

						 <input type="text" class="form-control input-sm" name="editarCurp" id="editarCurp" >

					 </div>

			 </div>

		 </div>
  </div>
</div>



						<p>DATOS DEL PAPA<p/>
							<a class="btn btn-primary" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapse">
						    Datos del alumno
						  </a>
						</p>
						<div class="collapse" id="collapse">
						  <div class="card card-body">
								<p>DATOS PERSONALES<p/>
								Hola
						</div>
						<p>DATOS DEL MADRE<p/>



          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar</button>

        </div>

      <?php

          $editarAsignacion = new ControladorAsignacionDatos();
          $editarAsignacion -> ctrEditarAsignacion();

        ?>

      </form>

    </div>

  </div>

</div>



<?php

  $borrarAsignacion = new ControladorAsignacionDatos();
  $borrarAsignacion -> ctrBorrarAsignacion();

?>
