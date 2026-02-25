<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Crear Instructor</h1>
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
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Datos del Instructor</h3>
            </div>
            <form action="<?php echo $baseUrl; ?>/admin/instructores/guardar" method="POST" enctype="multipart/form-data">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group text-center">
                      <label for="photo" class="d-block">Foto</label>
                      <div class="border border-dashed rounded mx-auto mb-2 d-flex align-items-center justify-content-center bg-light instructor-create-photo-preview">
                        <span class="text-muted">270 x 320</span>
                      </div>
                      <input type="file" id="photo" name="photo" accept=".jpg,.jpeg,.png" class="form-control-file">
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="form-group">
                      <label for="full_name">Nombres y apellidos</label>
                      <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Nombre completo del instructor">
                    </div>
                    <div class="form-group">
                      <label for="profession">Profesión</label>
                      <input type="text" class="form-control" id="profession" name="profession" placeholder="Ejemplo: Founder & CEO, Psicóloga Organizacional">
                    </div>
                    <div class="form-group">
                      <label for="headline">Titular profesional (estilo LinkedIn)</label>
                      <input type="text" class="form-control" id="headline" name="headline" placeholder="Resumen corto del perfil profesional">
                    </div>
                    <div class="form-group">
                      <label for="bio">Descripción</label>
                      <textarea class="form-control" id="bio" name="bio" rows="4" placeholder="Descripción detallada del instructor"></textarea>
                    </div>
                  </div>
                </div>

                <h5 class="mt-4 mb-3 text-muted">Redes sociales</h5>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="social_linkedin">URL LinkedIn</label>
                      <input type="url" class="form-control" id="social_linkedin" name="social_linkedin" placeholder="https://www.linkedin.com/in/usuario">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="social_facebook">URL Facebook</label>
                      <input type="url" class="form-control" id="social_facebook" name="social_facebook" placeholder="https://www.facebook.com/usuario">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="social_twitter">URL X/Twitter</label>
                      <input type="url" class="form-control" id="social_twitter" name="social_twitter" placeholder="https://twitter.com/usuario">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="social_youtube">URL YouTube</label>
                      <input type="url" class="form-control" id="social_youtube" name="social_youtube" placeholder="https://www.youtube.com/@canal">
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Guardar Instructor</button>
                <a href="<?php echo $baseUrl; ?>/admin/dashboard" class="btn btn-default float-right">Cancelar</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/admin/custom/css/instructors.css">

