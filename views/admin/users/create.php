<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Crear Nuevo Usuario</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo $baseUrl; ?>/admin">Inicio</a></li>
            <li class="breadcrumb-item"><a href="<?php echo $baseUrl; ?>/admin/usuarios">Usuarios</a></li>
            <li class="breadcrumb-item active">Crear</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Datos del Usuario</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="<?php echo $baseUrl; ?>/admin/usuarios/guardar" method="POST" enctype="multipart/form-data">
              <div class="card-body">
                
                <h5 class="mb-3 text-muted">Información Personal</h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first_name">Nombres</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Ingrese nombres">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="last_name">Apellidos</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Ingrese apellidos">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="username">Usuario</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="role">Rol</label>
                            <select class="form-control" id="role" name="role">
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
                            <label for="gender">Género</label>
                            <select class="form-control" id="gender" name="gender">
                                <option value="">Seleccionar</option>
                                <option value="male">Masculino</option>
                                <option value="female">Femenino</option>
                                <option value="other">Otro</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="birthdate">Cumpleaños</label>
                            <input type="date" class="form-control" id="birthdate" name="birthdate">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="phone">Teléfono Móvil</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="+51 999 999 999">
                        </div>
                    </div>
                </div>

                <hr>
                <h5 class="mb-3 text-muted">Perfil Profesional y Social</h5>

                <div class="form-group">
                    <label for="bio">Biografía</label>
                    <textarea class="form-control" id="bio" name="bio" rows="3" placeholder="Breve biografía..."></textarea>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="website">Sitio Web Personal</label>
                            <input type="url" class="form-control" id="website" name="website" placeholder="https://...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="linkedin">LinkedIn</label>
                            <input type="url" class="form-control" id="linkedin" name="linkedin" placeholder="URL de perfil LinkedIn">
                        </div>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="education_level">Nivel Educativo</label>
                            <select class="form-control" id="education_level" name="education_level">
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
                                <input type="checkbox" class="custom-control-input" id="has_experience" name="has_experience">
                                <label class="custom-control-label" for="has_experience">Tiene experiencia</label>
                            </div>
                            <div class="custom-control custom-switch mt-2">
                                <input type="checkbox" class="custom-control-input" id="is_working" name="is_working">
                                <label class="custom-control-label" for="is_working">Actualmente trabajando</label>
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
                                <input class="custom-control-input" type="checkbox" id="interestAudio" name="interests[]" value="audiovisual">
                                <label class="custom-control-label" for="interestAudio">Audiovisual</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="interestFrontend" name="interests[]" value="frontend">
                                <label class="custom-control-label" for="interestFrontend">Desarrollador Frontend</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="interestBackend" name="interests[]" value="backend">
                                <label class="custom-control-label" for="interestBackend">Desarrollador Backend</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="interestDesign" name="interests[]" value="design">
                                <label class="custom-control-label" for="interestDesign">Diseñador Gráfico</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="interestUX" name="interests[]" value="ux">
                                <label class="custom-control-label" for="interestUX">Diseño UX</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="interestEnglish" name="interests[]" value="english">
                                <label class="custom-control-label" for="interestEnglish">Inglés</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="interestBusiness" name="interests[]" value="business">
                                <label class="custom-control-label" for="interestBusiness">Negocios</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="interestMarketing" name="interests[]" value="marketing">
                                <label class="custom-control-label" for="interestMarketing">Marketing</label>
                            </div>
                        </div>
                    </div>
                </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Guardar Usuario</button>
                <a href="<?php echo $baseUrl; ?>/admin/usuarios" class="btn btn-default float-right">Cancelar</a>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
</div>
