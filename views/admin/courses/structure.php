<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Estructura del Curso</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo $baseUrl; ?>/admin">Inicio</a></li>
            <li class="breadcrumb-item"><a href="<?php echo $baseUrl; ?>/admin/cursos">Gestión de Cursos</a></li>
            <li class="breadcrumb-item active">Estructura</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Temario del Curso</h3>
            </div>
            <div class="card-body">
              <form action="#" method="POST" onsubmit="return false;">
                <div class="row mb-3">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="course_id">Curso</label>
                      <input type="text" class="form-control mb-2" id="course_search" placeholder="Escribe para buscar un curso">
                      <div class="row">
                        <div class="col-md-8 mb-2 mb-md-0">
                          <select class="form-control" id="course_id" name="course_id">
                            <option value="">Seleccionar curso</option>
                          </select>
                        </div>
                        <div class="col-md-4">
                          <button type="button" class="btn btn-default btn-block">Buscar curso</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <hr>

                <div class="mt-4">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="mb-0">Temario del curso</h5>
                    <button type="button" class="btn btn-primary btn-sm" id="save_curriculum">
                      <i class="fas fa-save mr-1"></i> Guardar temario
                    </button>
                  </div>
                  <div id="curriculum_modules"></div>
                  <button type="button" id="add_section" class="btn btn-outline-primary btn-block mt-3">
                    <i class="fas fa-plus-circle mr-1"></i> Nuevo Módulo
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Editor de lección o clase</h3>
            </div>
            <div class="card-body" id="lesson_editor_container">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/admin/custom/css/course-structure.css">

<div id="lesson_type_modal" class="d-none">
  <div class="d-flex justify-content-center align-items-start lesson-type-modal-wrapper">
    <div class="bg-white rounded shadow-lg p-4 mt-5 lesson-type-modal-content">
      <div class="d-flex justify-content-between align-items-start mb-3">
        <div>
          <h4 class="mb-1">Seleccione el tipo de lección</h4>
          <p class="mb-0 text-muted">Seleccione el tipo de material para continuar</p>
        </div>
        <button type="button" id="lesson_type_close" class="btn btn-sm btn-light">
          <i class="fas fa-times"></i>
        </button>
      </div>
      <div class="mb-4">
        <h6 class="text-uppercase text-muted mb-2">Contenido de aprendizaje</h6>
        <div class="row">
          <div class="col-md-4 mb-3">
            <button type="button" class="btn btn-outline-secondary btn-block lesson-type-option lesson-type-btn" data-type="texto">
              <div class="mb-2"><i class="far fa-file-alt fa-2x text-primary"></i></div>
              <div>Lección de texto</div>
            </button>
          </div>
          <div class="col-md-4 mb-3">
            <button type="button" class="btn btn-outline-secondary btn-block lesson-type-option lesson-type-btn" data-type="video">
              <div class="mb-2"><i class="fas fa-video fa-2x text-primary"></i></div>
              <div>Lección en video</div>
            </button>
          </div>
        </div>
      </div>
      <div>
        <h6 class="text-uppercase text-muted mb-2">Estudiantes de examen</h6>
        <div class="row">
          <div class="col-md-4 mb-3">
            <button type="button" class="btn btn-outline-secondary btn-block lesson-type-option lesson-type-btn" data-type="cuestionario">
              <div class="mb-2"><i class="fas fa-check-circle fa-2x text-primary"></i></div>
              <div>Cuestionario</div>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo $baseUrl; ?>/assets/admin/custom/js/course-structure.js"></script>
