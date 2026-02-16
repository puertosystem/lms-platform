<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Lista de Usuarios</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo $baseUrl; ?>/admin">Inicio</a></li>
            <li class="breadcrumb-item active">Usuarios</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Usuarios Registrados</h3>
              <div class="card-tools">
                  <a href="<?php echo $baseUrl; ?>/admin/usuarios/crear" class="btn btn-primary btn-sm">
                      <i class="fas fa-plus"></i> Nuevo Usuario
                  </a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Juan Perez</td>
                    <td>juan@example.com</td>
                    <td><span class="badge badge-success">Estudiante</span></td>
                    <td>Activo</td>
                    <td>
                        <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#viewUserModal"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editUserModal"><i class="fas fa-edit"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Maria Lopez</td>
                    <td>maria@example.com</td>
                    <td><span class="badge badge-warning">Instructor</span></td>
                    <td>Activo</td>
                    <td>
                        <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#viewUserModal"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editUserModal"><i class="fas fa-edit"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Modal de Edición -->
<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editUserModalLabel">Editar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo $baseUrl; ?>/admin/usuarios/actualizar" method="POST" enctype="multipart/form-data">
          <div class="modal-body">
                <!-- Contenido del Formulario (Copiado de create.php) -->
                <h5 class="mb-3 text-muted">Información Personal</h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="edit_first_name">Nombres</label>
                            <input type="text" class="form-control" id="edit_first_name" name="first_name" placeholder="Ingrese nombres">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="edit_last_name">Apellidos</label>
                            <input type="text" class="form-control" id="edit_last_name" name="last_name" placeholder="Ingrese apellidos">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="edit_username">Usuario</label>
                            <input type="text" class="form-control" id="edit_username" name="username" placeholder="Nombre de usuario">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="edit_email">Email</label>
                            <input type="email" class="form-control" id="edit_email" name="email" placeholder="Correo electrónico">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="edit_password">Contraseña (Dejar en blanco para mantener actual)</label>
                            <input type="password" class="form-control" id="edit_password" name="password" placeholder="Nueva contraseña">
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="edit_role">Rol</label>
                            <select class="form-control" id="edit_role" name="role">
                                <option value="student">Estudiante</option>
                                <option value="instructor">Instructor</option>
                                <option value="admin">Administrador</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="edit_gender">Género</label>
                            <select class="form-control" id="edit_gender" name="gender">
                                <option value="">Seleccionar</option>
                                <option value="male">Masculino</option>
                                <option value="female">Femenino</option>
                                <option value="other">Otro</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="edit_birthdate">Cumpleaños</label>
                            <input type="date" class="form-control" id="edit_birthdate" name="birthdate">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="edit_phone">Teléfono Móvil</label>
                            <input type="text" class="form-control" id="edit_phone" name="phone" placeholder="+51 999 999 999">
                        </div>
                    </div>
                </div>

                <hr>
                <h5 class="mb-3 text-muted">Perfil Profesional y Social</h5>

                <div class="form-group">
                    <label for="edit_bio">Biografía</label>
                    <textarea class="form-control" id="edit_bio" name="bio" rows="3" placeholder="Breve biografía..."></textarea>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="edit_website">Sitio Web Personal</label>
                            <input type="url" class="form-control" id="edit_website" name="website" placeholder="https://...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="edit_linkedin">LinkedIn</label>
                            <input type="url" class="form-control" id="edit_linkedin" name="linkedin" placeholder="URL de perfil LinkedIn">
                        </div>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="edit_education_level">Nivel Educativo</label>
                            <select class="form-control" id="edit_education_level" name="education_level">
                                <option value="">Seleccionar</option>
                                <option value="highschool">Secundaria</option>
                                <option value="university">Universidad</option>
                                <option value="master">Maestría</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Estado Laboral</label>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="edit_has_experience" name="has_experience">
                                <label class="custom-control-label" for="edit_has_experience">Tiene experiencia</label>
                            </div>
                            <div class="custom-control custom-switch mt-2">
                                <input type="checkbox" class="custom-control-input" id="edit_is_working" name="is_working">
                                <label class="custom-control-label" for="edit_is_working">Actualmente trabajando</label>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <h5 class="mb-3 text-muted">Temas de Interés</h5>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="edit_interestAudio" name="interests[]" value="audiovisual">
                                <label class="custom-control-label" for="edit_interestAudio">Audiovisual</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="edit_interestFrontend" name="interests[]" value="frontend">
                                <label class="custom-control-label" for="edit_interestFrontend">Desarrollador Frontend</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="edit_interestBackend" name="interests[]" value="backend">
                                <label class="custom-control-label" for="edit_interestBackend">Desarrollador Backend</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="edit_interestDesign" name="interests[]" value="design">
                                <label class="custom-control-label" for="edit_interestDesign">Diseñador Gráfico</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="edit_interestUX" name="interests[]" value="ux">
                                <label class="custom-control-label" for="edit_interestUX">Diseño UX</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="edit_interestEnglish" name="interests[]" value="english">
                                <label class="custom-control-label" for="edit_interestEnglish">Inglés</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="edit_interestBusiness" name="interests[]" value="business">
                                <label class="custom-control-label" for="edit_interestBusiness">Negocios</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="edit_interestMarketing" name="interests[]" value="marketing">
                                <label class="custom-control-label" for="edit_interestMarketing">Marketing</label>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
          </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal de Visualización -->
<div class="modal fade" id="viewUserModal" tabindex="-1" role="dialog" aria-labelledby="viewUserModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewUserModalLabel">Detalles del Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <!-- Contenido de Visualización (Solo Lectura) -->
            <h5 class="mb-3 text-muted">Información Personal</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="view_first_name">Nombres</label>
                        <input type="text" class="form-control" id="view_first_name" disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="view_last_name">Apellidos</label>
                        <input type="text" class="form-control" id="view_last_name" disabled>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="view_username">Usuario</label>
                        <input type="text" class="form-control" id="view_username" disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="view_email">Email</label>
                        <input type="email" class="form-control" id="view_email" disabled>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                     <div class="form-group">
                        <label for="view_role">Rol</label>
                        <input type="text" class="form-control" id="view_role" disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="view_gender">Género</label>
                        <input type="text" class="form-control" id="view_gender" disabled>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="view_birthdate">Cumpleaños</label>
                        <input type="date" class="form-control" id="view_birthdate" disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="view_phone">Teléfono Móvil</label>
                        <input type="text" class="form-control" id="view_phone" disabled>
                    </div>
                </div>
            </div>

            <hr>
            <h5 class="mb-3 text-muted">Perfil Profesional y Social</h5>

            <div class="form-group">
                <label for="view_bio">Biografía</label>
                <textarea class="form-control" id="view_bio" rows="3" disabled></textarea>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="view_website">Sitio Web Personal</label>
                        <input type="url" class="form-control" id="view_website" disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="view_linkedin">LinkedIn</label>
                        <input type="url" class="form-control" id="view_linkedin" disabled>
                    </div>
                </div>
            </div>

             <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="view_education_level">Nivel Educativo</label>
                        <input type="text" class="form-control" id="view_education_level" disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Estado Laboral</label>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="view_has_experience" disabled>
                            <label class="custom-control-label" for="view_has_experience">Tiene experiencia</label>
                        </div>
                        <div class="custom-control custom-switch mt-2">
                            <input type="checkbox" class="custom-control-input" id="view_is_working" disabled>
                            <label class="custom-control-label" for="view_is_working">Actualmente trabajando</label>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <h5 class="mb-3 text-muted">Temas de Interés</h5>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="view_interestAudio" disabled>
                            <label class="custom-control-label" for="view_interestAudio">Audiovisual</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="view_interestFrontend" disabled>
                            <label class="custom-control-label" for="view_interestFrontend">Desarrollador Frontend</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="view_interestBackend" disabled>
                            <label class="custom-control-label" for="view_interestBackend">Desarrollador Backend</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="view_interestDesign" disabled>
                            <label class="custom-control-label" for="view_interestDesign">Diseñador Gráfico</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="view_interestUX" disabled>
                            <label class="custom-control-label" for="view_interestUX">Diseño UX</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="view_interestEnglish" disabled>
                            <label class="custom-control-label" for="view_interestEnglish">Inglés</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="view_interestBusiness" disabled>
                            <label class="custom-control-label" for="view_interestBusiness">Negocios</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="view_interestMarketing" disabled>
                            <label class="custom-control-label" for="view_interestMarketing">Marketing</label>
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
