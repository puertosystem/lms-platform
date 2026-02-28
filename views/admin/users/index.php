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
          
          <div class="card card-primary card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
              <ul class="nav nav-tabs" id="users-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="students-tab" data-toggle="pill" href="#students" role="tab" aria-controls="students" aria-selected="true">
                    <i class="fas fa-user-graduate mr-1"></i> Clientes (Estudiantes)
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="instructors-tab" data-toggle="pill" href="#instructors" role="tab" aria-controls="instructors" aria-selected="false">
                    <i class="fas fa-chalkboard-teacher mr-1"></i> Profesores (Instructores)
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="admins-tab" data-toggle="pill" href="#admins" role="tab" aria-controls="admins" aria-selected="false">
                    <i class="fas fa-user-shield mr-1"></i> Usuarios Administrativos
                  </a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <div class="tab-content" id="users-tabs-content">
                
                <!-- Tab: Estudiantes -->
                <div class="tab-pane fade show active" id="students" role="tabpanel" aria-labelledby="students-tab">
                   <div class="d-flex justify-content-between mb-3 align-items-center">
                      <h4>Lista de Estudiantes</h4>
                      <div class="d-flex">
                        <div class="input-group input-group-sm mr-2" style="width: 250px;">
                          <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar estudiante...">
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                        <a href="<?php echo $baseUrl; ?>/admin/usuarios/crear?role=student" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> Nuevo Estudiante
                        </a>
                      </div>
                   </div>
                   <div class="table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Estudiante</th>
                          <th>Email</th>
                          <th>Cursos Inscritos</th>
                          <th>Estado</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Juan Perez</td>
                          <td>juan@example.com</td>
                          <td>3</td>
                          <td><span class="badge badge-success">Activo</span></td>
                          <td>
                              <button class="btn btn-info btn-sm btn-view-user" data-toggle="modal" data-target="#viewUserModal" data-id="1"><i class="fas fa-eye"></i></button>
                              <button class="btn btn-warning btn-sm btn-edit-user" data-toggle="modal" data-target="#editUserModal" data-id="1"><i class="fas fa-edit"></i></button>
                              <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Carlos Ruiz</td>
                          <td>carlos.ruiz@email.com</td>
                          <td>1</td>
                          <td><span class="badge badge-success">Activo</span></td>
                          <td>
                              <button class="btn btn-info btn-sm btn-view-user"><i class="fas fa-eye"></i></button>
                              <button class="btn btn-warning btn-sm btn-edit-user"><i class="fas fa-edit"></i></button>
                              <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>Ana Gomez</td>
                          <td>ana.gomez@email.com</td>
                          <td>5</td>
                          <td><span class="badge badge-warning">Pendiente</span></td>
                          <td>
                              <button class="btn btn-info btn-sm btn-view-user"><i class="fas fa-eye"></i></button>
                              <button class="btn btn-warning btn-sm btn-edit-user"><i class="fas fa-edit"></i></button>
                              <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>Luis Torres</td>
                          <td>luis.torres@email.com</td>
                          <td>2</td>
                          <td><span class="badge badge-danger">Inactivo</span></td>
                          <td>
                              <button class="btn btn-info btn-sm btn-view-user"><i class="fas fa-eye"></i></button>
                              <button class="btn btn-warning btn-sm btn-edit-user"><i class="fas fa-edit"></i></button>
                              <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>7</td>
                          <td>Sofia Mendez</td>
                          <td>sofia.m@email.com</td>
                          <td>4</td>
                          <td><span class="badge badge-success">Activo</span></td>
                          <td>
                              <button class="btn btn-info btn-sm btn-view-user"><i class="fas fa-eye"></i></button>
                              <button class="btn btn-warning btn-sm btn-edit-user"><i class="fas fa-edit"></i></button>
                              <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>12</td>
                          <td>Elena Blanco</td>
                          <td>elena.b@email.com</td>
                          <td>2</td>
                          <td><span class="badge badge-secondary">Inactivo</span></td>
                          <td>
                              <button class="btn btn-info btn-sm btn-view-user"><i class="fas fa-eye"></i></button>
                              <button class="btn btn-warning btn-sm btn-edit-user"><i class="fas fa-edit"></i></button>
                              <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>13</td>
                          <td>Pedro Sanchez</td>
                          <td>pedro.s@email.com</td>
                          <td>6</td>
                          <td><span class="badge badge-success">Activo</span></td>
                          <td>
                              <button class="btn btn-info btn-sm btn-view-user"><i class="fas fa-eye"></i></button>
                              <button class="btn btn-warning btn-sm btn-edit-user"><i class="fas fa-edit"></i></button>
                              <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>14</td>
                          <td>Clara Diaz</td>
                          <td>clara.d@email.com</td>
                          <td>1</td>
                          <td><span class="badge badge-warning">Pendiente</span></td>
                          <td>
                              <button class="btn btn-info btn-sm btn-view-user"><i class="fas fa-eye"></i></button>
                              <button class="btn btn-warning btn-sm btn-edit-user"><i class="fas fa-edit"></i></button>
                              <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>15</td>
                          <td>Miguel Angel</td>
                          <td>miguel.a@email.com</td>
                          <td>0</td>
                          <td><span class="badge badge-success">Activo</span></td>
                          <td>
                              <button class="btn btn-info btn-sm btn-view-user"><i class="fas fa-eye"></i></button>
                              <button class="btn btn-warning btn-sm btn-edit-user"><i class="fas fa-edit"></i></button>
                              <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>16</td>
                          <td>Patricia Vega</td>
                          <td>patricia.v@email.com</td>
                          <td>3</td>
                          <td><span class="badge badge-success">Activo</span></td>
                          <td>
                              <button class="btn btn-info btn-sm btn-view-user"><i class="fas fa-eye"></i></button>
                              <button class="btn btn-warning btn-sm btn-edit-user"><i class="fas fa-edit"></i></button>
                              <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                      <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                  </div>
                </div>
                
                <!-- Tab: Instructores -->
                <div class="tab-pane fade" id="instructors" role="tabpanel" aria-labelledby="instructors-tab">
                   <div class="d-flex justify-content-between mb-3 align-items-center">
                      <h4>Lista de Instructores</h4>
                      <div class="d-flex">
                        <div class="input-group input-group-sm mr-2" style="width: 250px;">
                          <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar instructor...">
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                        <a href="<?php echo $baseUrl; ?>/admin/usuarios/crear?role=instructor" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> Nuevo Instructor
                        </a>
                      </div>
                   </div>
                   <div class="table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Instructor</th>
                          <th>Email</th>
                          <th>Especialidad</th>
                          <th>Cursos Creados</th>
                          <th>Estado</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>2</td>
                          <td>Maria Lopez</td>
                          <td>maria@example.com</td>
                          <td>Desarrollo Web</td>
                          <td>5</td>
                          <td><span class="badge badge-success">Activo</span></td>
                          <td>
                              <button class="btn btn-info btn-sm btn-view-user" data-toggle="modal" data-target="#viewUserModal" data-id="2"><i class="fas fa-eye"></i></button>
                              <button class="btn btn-warning btn-sm btn-edit-user" data-toggle="modal" data-target="#editUserModal" data-id="2"><i class="fas fa-edit"></i></button>
                              <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>8</td>
                          <td>Roberto Diaz</td>
                          <td>roberto.d@email.com</td>
                          <td>Marketing Digital</td>
                          <td>2</td>
                          <td><span class="badge badge-success">Activo</span></td>
                          <td>
                              <button class="btn btn-info btn-sm btn-view-user"><i class="fas fa-eye"></i></button>
                              <button class="btn btn-warning btn-sm btn-edit-user"><i class="fas fa-edit"></i></button>
                              <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>9</td>
                          <td>Laura Castillo</td>
                          <td>laura.c@email.com</td>
                          <td>Diseño Gráfico</td>
                          <td>8</td>
                          <td><span class="badge badge-success">Activo</span></td>
                          <td>
                              <button class="btn btn-info btn-sm btn-view-user"><i class="fas fa-eye"></i></button>
                              <button class="btn btn-warning btn-sm btn-edit-user"><i class="fas fa-edit"></i></button>
                              <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>17</td>
                          <td>Daniel Romero</td>
                          <td>daniel.r@email.com</td>
                          <td>Desarrollo Mobile</td>
                          <td>3</td>
                          <td><span class="badge badge-success">Activo</span></td>
                          <td>
                              <button class="btn btn-info btn-sm btn-view-user"><i class="fas fa-eye"></i></button>
                              <button class="btn btn-warning btn-sm btn-edit-user"><i class="fas fa-edit"></i></button>
                              <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>18</td>
                          <td>Carmen Ruiz</td>
                          <td>carmen.r@email.com</td>
                          <td>Data Science</td>
                          <td>4</td>
                          <td><span class="badge badge-success">Activo</span></td>
                          <td>
                              <button class="btn btn-info btn-sm btn-view-user"><i class="fas fa-eye"></i></button>
                              <button class="btn btn-warning btn-sm btn-edit-user"><i class="fas fa-edit"></i></button>
                              <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>19</td>
                          <td>Alejandro Sanz</td>
                          <td>alejandro.s@email.com</td>
                          <td>DevOps</td>
                          <td>1</td>
                          <td><span class="badge badge-warning">Pendiente</span></td>
                          <td>
                              <button class="btn btn-info btn-sm btn-view-user"><i class="fas fa-eye"></i></button>
                              <button class="btn btn-warning btn-sm btn-edit-user"><i class="fas fa-edit"></i></button>
                              <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                      <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                  </div>
                </div>

                <!-- Tab: Administrativos -->
                <div class="tab-pane fade" id="admins" role="tabpanel" aria-labelledby="admins-tab">
                   <div class="d-flex justify-content-between mb-3 align-items-center">
                      <h4>Usuarios del Sistema</h4>
                      <div class="d-flex">
                        <div class="input-group input-group-sm mr-2" style="width: 250px;">
                          <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar admin...">
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                        <a href="<?php echo $baseUrl; ?>/admin/usuarios/crear?role=admin" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> Nuevo Admin
                        </a>
                      </div>
                   </div>
                   <div class="table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Usuario</th>
                          <th>Email</th>
                          <th>Rol</th>
                          <th>Último Acceso</th>
                          <th>Estado</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>3</td>
                          <td>Admin General</td>
                          <td>admin@lms.com</td>
                          <td><span class="badge badge-danger">Super Admin</span></td>
                          <td>Hace 2 horas</td>
                          <td><span class="badge badge-success">Activo</span></td>
                          <td>
                              <button class="btn btn-info btn-sm btn-view-user" data-toggle="modal" data-target="#viewUserModal" data-id="3"><i class="fas fa-eye"></i></button>
                              <button class="btn btn-warning btn-sm btn-edit-user" data-toggle="modal" data-target="#editUserModal" data-id="3"><i class="fas fa-edit"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>10</td>
                          <td>Soporte Técnico</td>
                          <td>soporte@lms.com</td>
                          <td><span class="badge badge-info">Soporte</span></td>
                          <td>Ayer</td>
                          <td><span class="badge badge-success">Activo</span></td>
                          <td>
                              <button class="btn btn-info btn-sm btn-view-user"><i class="fas fa-eye"></i></button>
                              <button class="btn btn-warning btn-sm btn-edit-user"><i class="fas fa-edit"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>11</td>
                          <td>Editor Blog</td>
                          <td>editor@lms.com</td>
                          <td><span class="badge badge-secondary">Editor</span></td>
                          <td>Hace 5 días</td>
                          <td><span class="badge badge-warning">Inactivo</span></td>
                          <td>
                              <button class="btn btn-info btn-sm btn-view-user"><i class="fas fa-eye"></i></button>
                              <button class="btn btn-warning btn-sm btn-edit-user"><i class="fas fa-edit"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>20</td>
                          <td>Gestor Pagos</td>
                          <td>pagos@lms.com</td>
                          <td><span class="badge badge-info">Finanzas</span></td>
                          <td>Hace 1 hora</td>
                          <td><span class="badge badge-success">Activo</span></td>
                          <td>
                              <button class="btn btn-info btn-sm btn-view-user"><i class="fas fa-eye"></i></button>
                              <button class="btn btn-warning btn-sm btn-edit-user"><i class="fas fa-edit"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>21</td>
                          <td>Auditor</td>
                          <td>auditor@lms.com</td>
                          <td><span class="badge badge-secondary">Auditoría</span></td>
                          <td>Hace 3 días</td>
                          <td><span class="badge badge-success">Activo</span></td>
                          <td>
                              <button class="btn btn-info btn-sm btn-view-user"><i class="fas fa-eye"></i></button>
                              <button class="btn btn-warning btn-sm btn-edit-user"><i class="fas fa-edit"></i></button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                      <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                  </div>
                </div>

              </div>
            </div>
            <!-- /.card -->
          </div>
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

<link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/admin/custom/css/users.css">
<script src="<?php echo $baseUrl; ?>/assets/admin/custom/js/users.js"></script>

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
