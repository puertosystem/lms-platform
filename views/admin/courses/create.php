<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Crear Curso</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo $baseUrl; ?>/admin">Inicio</a></li>
            <li class="breadcrumb-item"><a href="<?php echo $baseUrl; ?>/admin/cursos">Gestión de Cursos</a></li>
            <li class="breadcrumb-item active">Crear Curso</li>
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
              <h3 class="card-title">Datos del Curso</h3>
            </div>
            <form action="<?php echo $baseUrl; ?>/admin/cursos/guardar" method="POST" enctype="multipart/form-data">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="course_type">Tipo de curso</label>
                      <select class="form-control" id="course_type" name="course_type">
                        <option value="">Seleccionar</option>
                        <option value="diplomado">Diplomado</option>
                        <option value="taller">Taller</option>
                        <option value="seminario">Seminario</option>
                        <option value="curso">Curso</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="level">Nivel</label>
                      <select class="form-control" id="level" name="level">
                        <option value="">Seleccionar</option>
                        <option value="basico">Básico</option>
                        <option value="intermedio">Intermedio</option>
                        <option value="avanzado">Avanzado</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="modality">Modalidad</label>
                      <select class="form-control" id="modality" name="modality">
                        <option value="">Seleccionar</option>
                        <option value="presencial">Presencial</option>
                        <option value="virtual">Virtual</option>
                        <option value="mixta">Mixta</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group">
                      <label for="name">Nombre del curso</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Nombre del curso">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="cover_image">Imagen portada</label>
                      <input type="file" class="form-control-file" id="cover_image" name="cover_image">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="description">Descripción</label>
                  <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="whatsapp_url">URL del grupo de WhatsApp</label>
                      <input type="url" class="form-control" id="whatsapp_url" name="whatsapp_url" placeholder="https://chat.whatsapp.com/...">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="start_date">Fecha de inicio</label>
                      <input type="date" class="form-control" id="start_date" name="start_date">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="end_date">Fecha fin</label>
                      <input type="date" class="form-control" id="end_date" name="end_date">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="credits">Créditos académicos</label>
                      <input type="number" step="1" class="form-control" id="credits" name="credits" placeholder="0">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="hours">Horas académicas</label>
                      <input type="number" step="1" class="form-control" id="hours" name="hours" placeholder="0">
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Guardar Curso</button>
                <a href="<?php echo $baseUrl; ?>/admin/cursos" class="btn btn-default float-right">Cancelar</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
