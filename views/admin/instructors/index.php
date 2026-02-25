<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Lista de Instructores</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo $baseUrl; ?>/admin/dashboard">Inicio</a></li>
            <li class="breadcrumb-item active">Instructores</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Instructores Registrados</h3>
              <div class="card-tools">
                <a href="<?php echo $baseUrl; ?>/admin/instructores/crear" class="btn btn-primary btn-sm">
                  <i class="fas fa-plus"></i> Nuevo Instructor
                </a>
              </div>
            </div>
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Profesión</th>
                    <th>Redes Sociales</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <img src="<?php echo $baseUrl; ?>/assets/images/blog/author-01.jpg" alt="Isabel Giovana Colan Rojas" class="img-circle img-size-50">
                    </td>
                    <td>Isabel Giovana Colan Rojas</td>
                    <td>Psicóloga Organizacional</td>
                    <td>
                      <a href="#" class="btn btn-sm btn-social-facebook" title="Facebook">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                      <a href="#" class="btn btn-sm btn-social-twitter" title="Twitter">
                        <i class="fab fa-twitter"></i>
                      </a>
                      <a href="https://www.linkedin.com/" target="_blank" class="btn btn-sm btn-social-linkedin" title="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                      </a>
                      <a href="#" class="btn btn-sm btn-social-instagram" title="Instagram">
                        <i class="fab fa-instagram"></i>
                      </a>
                    </td>
                    <td>
                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editInstructorModal" title="Editar">
                        <i class="fas fa-pencil-alt"></i>
                      </button>
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#viewInstructorModal" title="Ver">
                        <i class="fas fa-eye"></i>
                      </button>
                      <button type="button" class="btn btn-danger btn-sm btn-delete-instructor" title="Eliminar">
                        <i class="fas fa-trash"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="<?php echo $baseUrl; ?>/assets/admin/dist/img/user1-128x128.jpg" alt="Edward Norton" class="img-circle img-size-50" onerror="this.src='<?php echo $baseUrl; ?>/assets/images/blog/author-01.jpg'">
                    </td>
                    <td>Edward Norton</td>
                    <td>Founder & CEO</td>
                    <td>
                      <a href="#" class="btn btn-sm btn-social-facebook" title="Facebook">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                      <a href="#" class="btn btn-sm btn-social-twitter" title="Twitter">
                        <i class="fab fa-twitter"></i>
                      </a>
                      <a href="https://www.linkedin.com/" target="_blank" class="btn btn-sm btn-social-linkedin" title="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                      </a>
                      <a href="#" class="btn btn-sm btn-social-instagram" title="Instagram">
                        <i class="fab fa-instagram"></i>
                      </a>
                    </td>
                    <td>
                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editInstructorModal" title="Editar">
                        <i class="fas fa-pencil-alt"></i>
                      </button>
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#viewInstructorModal" title="Ver">
                        <i class="fas fa-eye"></i>
                      </button>
                      <button type="button" class="btn btn-danger btn-sm btn-delete-instructor" title="Eliminar">
                        <i class="fas fa-trash"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Modal de Edición -->
<div class="modal fade" id="editInstructorModal" tabindex="-1" role="dialog" aria-labelledby="editInstructorModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editInstructorModalLabel">Editar Instructor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo $baseUrl; ?>/admin/instructores/actualizar" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group text-center">
                  <label for="edit_photo" class="d-block">Foto</label>
                  <div class="border border-dashed rounded mx-auto mb-2 d-flex align-items-center justify-content-center bg-light instructor-photo-upload-container">
                    <img src="<?php echo $baseUrl; ?>/assets/images/blog/author-01.jpg" id="preview_edit_photo" class="img-fluid" style="max-height: 100%; max-width: 100%;">
                  </div>
                  <input type="file" id="edit_photo" name="photo" accept=".jpg,.jpeg,.png" class="form-control-file text-center">
                </div>
              </div>
              <div class="col-md-8">
                <div class="form-group">
                  <label for="edit_full_name">Nombres y apellidos</label>
                  <input type="text" class="form-control" id="edit_full_name" name="full_name" value="Isabel Giovana Colan Rojas">
                </div>
                <div class="form-group">
                  <label for="edit_profession">Profesión</label>
                  <input type="text" class="form-control" id="edit_profession" name="profession" value="Psicóloga Organizacional">
                </div>
                <div class="form-group">
                  <label for="edit_headline">Titular profesional</label>
                  <input type="text" class="form-control" id="edit_headline" name="headline" value="Especialista en RRHH y Desarrollo de Talento">
                </div>
              </div>
            </div>

            <div class="form-group">
                <label for="edit_bio">Descripción</label>
                <textarea class="form-control" id="edit_bio" name="bio" rows="4">Experta en psicología organizacional con más de 10 años de experiencia en gestión del talento humano.</textarea>
            </div>

            <h5 class="mt-4 mb-3 text-muted">Redes sociales</h5>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="edit_social_facebook">URL Facebook</label>
                  <input type="url" class="form-control" id="edit_social_facebook" name="social_facebook" placeholder="https://www.facebook.com/usuario">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="edit_social_twitter">URL Twitter</label>
                  <input type="url" class="form-control" id="edit_social_twitter" name="social_twitter" placeholder="https://twitter.com/usuario">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="edit_social_linkedin">URL LinkedIn</label>
                  <input type="url" class="form-control" id="edit_social_linkedin" name="social_linkedin" value="https://www.linkedin.com/">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="edit_social_instagram">URL Instagram</label>
                  <input type="url" class="form-control" id="edit_social_instagram" name="social_instagram" placeholder="https://www.instagram.com/usuario">
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
<div class="modal fade" id="viewInstructorModal" tabindex="-1" role="dialog" aria-labelledby="viewInstructorModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewInstructorModalLabel">Detalles del Instructor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="row">
              <div class="col-md-4">
                <div class="text-center mb-3">
                  <img src="<?php echo $baseUrl; ?>/assets/images/blog/author-01.jpg" id="view_photo" class="img-fluid rounded shadow-sm instructor-view-photo">
                </div>
              </div>
              <div class="col-md-8">
                <h3 id="view_full_name" class="text-primary">Isabel Giovana Colan Rojas</h3>
                <h5 id="view_profession" class="text-muted">Psicóloga Organizacional</h5>
                <p id="view_headline" class="font-italic">Especialista en RRHH y Desarrollo de Talento</p>
                <hr>
                <label>Biografía:</label>
                <p id="view_bio">Experta en psicología organizacional con más de 10 años de experiencia en gestión del talento humano.</p>
              </div>
            </div>

            <h5 class="mt-4 mb-3 text-muted">Redes Sociales</h5>
            <div class="row">
                <div class="col-md-3 mb-2">
                    <a href="#" id="view_social_facebook" class="btn btn-block btn-social btn-social-facebook" target="_blank">
                        <i class="fab fa-facebook-f mr-2"></i> Facebook
                    </a>
                </div>
                <div class="col-md-3 mb-2">
                    <a href="#" id="view_social_twitter" class="btn btn-block btn-social btn-social-twitter" target="_blank">
                        <i class="fab fa-twitter mr-2"></i> Twitter
                    </a>
                </div>
                <div class="col-md-3 mb-2">
                    <a href="#" id="view_social_linkedin" class="btn btn-block btn-social btn-social-linkedin" target="_blank">
                        <i class="fab fa-linkedin-in mr-2"></i> LinkedIn
                    </a>
                </div>
                <div class="col-md-3 mb-2">
                    <a href="#" id="view_social_instagram" class="btn btn-block btn-social btn-social-instagram" target="_blank">
                        <i class="fab fa-instagram mr-2"></i> Instagram
                    </a>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal de Eliminación -->
<div class="modal fade" id="deleteInstructorModal" tabindex="-1" role="dialog" aria-labelledby="deleteInstructorModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteInstructorModalLabel">Eliminar Instructor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Estás seguro de que deseas eliminar este instructor?</p>
        <p class="text-danger"><small>Esta acción no se puede deshacer.</small></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Eliminar</button>
      </div>
    </div>
  </div>
</div>

<link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/admin/custom/css/instructors.css">
<script src="<?php echo $baseUrl; ?>/assets/admin/custom/js/instructors.js"></script>

