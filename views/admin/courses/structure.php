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
                  <h5 class="mb-3">Temario del curso</h5>
                  <div id="curriculum_modules"></div>
                  <button type="button" id="add_section" class="btn btn-outline-primary btn-block mt-3">
                    <i class="fas fa-plus-circle mr-1"></i> Nuevo Módulo
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<style>
  .lesson-type-btn {
    min-height: 120px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    white-space: normal;
  }
  .lesson-type-btn > div {
    text-align: center;
    width: 100%;
  }
</style>

<div id="lesson_type_modal" class="d-none" style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);z-index:1050;overflow:auto;">
  <div class="d-flex justify-content-center align-items-start" style="min-height:100%;">
    <div class="bg-white rounded shadow-lg p-4 mt-5" style="max-width:720px;width:100%;">
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
          <div class="col-md-3 mb-3">
            <button type="button" class="btn btn-outline-secondary btn-block lesson-type-option lesson-type-btn" data-type="texto">
              <div class="mb-2"><i class="far fa-file-alt fa-2x text-primary"></i></div>
              <div>Lección de texto</div>
            </button>
          </div>
          <div class="col-md-3 mb-3">
            <button type="button" class="btn btn-outline-secondary btn-block lesson-type-option lesson-type-btn" data-type="pdf">
              <div class="mb-2"><i class="far fa-file-pdf fa-2x text-danger"></i></div>
              <div>Lección en PDF</div>
            </button>
          </div>
          <div class="col-md-3 mb-3">
            <button type="button" class="btn btn-outline-secondary btn-block lesson-type-option lesson-type-btn" data-type="video">
              <div class="mb-2"><i class="fas fa-video fa-2x text-primary"></i></div>
              <div>Lección en video</div>
            </button>
          </div>
          <div class="col-md-3 mb-3">
            <button type="button" class="btn btn-outline-secondary btn-block lesson-type-option lesson-type-btn" data-type="audio">
              <div class="mb-2"><i class="fas fa-volume-up fa-2x text-secondary"></i></div>
              <div>Lección de audio</div>
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <button type="button" class="btn btn-outline-secondary btn-block lesson-type-option lesson-type-btn" data-type="streaming">
              <div class="mb-2"><i class="fas fa-broadcast-tower fa-2x text-primary"></i></div>
              <div>Lección en streaming</div>
            </button>
          </div>
          <div class="col-md-3 mb-3">
            <button type="button" class="btn btn-outline-secondary btn-block lesson-type-option lesson-type-btn" data-type="zoom">
              <div class="mb-2"><i class="fas fa-video fa-2x text-secondary"></i></div>
              <div>Lección de Zoom</div>
            </button>
          </div>
          <div class="col-md-3 mb-3">
            <button type="button" class="btn btn-outline-secondary btn-block lesson-type-option lesson-type-btn" data-type="google_meet">
              <div class="mb-2"><i class="fas fa-video fa-2x text-success"></i></div>
              <div>Lección de Google Meet</div>
            </button>
          </div>
        </div>
      </div>
      <div>
        <h6 class="text-uppercase text-muted mb-2">Estudiantes de examen</h6>
        <div class="row">
          <div class="col-md-3 mb-3">
            <button type="button" class="btn btn-outline-secondary btn-block lesson-type-option lesson-type-btn" data-type="cuestionario">
              <div class="mb-2"><i class="fas fa-check-circle fa-2x text-primary"></i></div>
              <div>Cuestionario</div>
            </button>
          </div>
          <div class="col-md-3 mb-3">
            <button type="button" class="btn btn-outline-secondary btn-block lesson-type-option lesson-type-btn" data-type="asignacion">
              <div class="mb-2"><i class="fas fa-clipboard fa-2x text-secondary"></i></div>
              <div>Asignación</div>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var searchInput = document.getElementById('course_search');
    var select = document.getElementById('course_id');
    if (searchInput && select) {
      var originalOptions = Array.prototype.slice.call(select.options);
      searchInput.addEventListener('input', function() {
        var term = this.value.toLowerCase();
        select.innerHTML = '';
        originalOptions.forEach(function(opt) {
          if (!term || opt.text.toLowerCase().indexOf(term) !== -1 || opt.value === '') {
            select.appendChild(opt);
          }
        });
      });
    }

    var modulesContainer = document.getElementById('curriculum_modules');
    var addSectionButton = document.getElementById('add_section');
    var moduleCounter = 0;
    var lessonTypeModal = document.getElementById('lesson_type_modal');
    var lessonTypeClose = document.getElementById('lesson_type_close');
    var currentLessonsContainer = null;
    var lessonTypeOptions = document.querySelectorAll('.lesson-type-option');

    function openLessonTypeModal(container) {
      currentLessonsContainer = container;
      if (lessonTypeModal) {
        lessonTypeModal.classList.remove('d-none');
      }
    }

    function closeLessonTypeModal() {
      if (lessonTypeModal) {
        lessonTypeModal.classList.add('d-none');
      }
      currentLessonsContainer = null;
    }

    function createLessonRow(targetContainer, lessonType) {
      if (!targetContainer) return;
      var lessonWrapper = document.createElement('div');
      lessonWrapper.className = 'd-flex align-items-center mb-2 pl-4';
      lessonWrapper.dataset.lessonType = lessonType || '';

      var bullet = document.createElement('span');
      bullet.className = 'mr-2 text-warning';
      bullet.innerHTML = '<i class="fas fa-play-circle"></i>';

      var lessonInput = document.createElement('input');
      lessonInput.type = 'text';
      lessonInput.className = 'form-control form-control-sm';
      lessonInput.placeholder = 'Nueva lección o clase';

      var deleteBtn = document.createElement('button');
      deleteBtn.type = 'button';
      deleteBtn.className = 'btn btn-sm btn-light text-danger ml-2';
      deleteBtn.innerHTML = '<i class="fas fa-trash-alt"></i>';

      lessonWrapper.appendChild(bullet);
      lessonWrapper.appendChild(lessonInput);
      lessonWrapper.appendChild(deleteBtn);
      targetContainer.appendChild(lessonWrapper);

      deleteBtn.addEventListener('click', function() {
        targetContainer.removeChild(lessonWrapper);
      });
    }

    if (lessonTypeClose) {
      lessonTypeClose.addEventListener('click', function() {
        closeLessonTypeModal();
      });
    }

    if (lessonTypeModal) {
      lessonTypeModal.addEventListener('click', function(e) {
        if (e.target === lessonTypeModal) {
          closeLessonTypeModal();
        }
      });
    }

    lessonTypeOptions.forEach(function(btn) {
      btn.addEventListener('click', function() {
        var lessonType = this.getAttribute('data-type') || '';
        if (currentLessonsContainer) {
          createLessonRow(currentLessonsContainer, lessonType);
        }
        closeLessonTypeModal();
      });
    });

    function createSection() {
      if (!modulesContainer) return;
      moduleCounter++;

      var wrapper = document.createElement('div');
      wrapper.className = 'border rounded p-3 mb-3 bg-white';

      var header = document.createElement('div');
      header.className = 'd-flex justify-content-between align-items-center mb-2';

      var left = document.createElement('div');
      left.className = 'd-flex align-items-center flex-grow-1';

      var handle = document.createElement('span');
      handle.className = 'mr-2 text-muted';
      handle.innerHTML = '<i class="fas fa-grip-vertical"></i>';

      var titleInput = document.createElement('input');
      titleInput.type = 'text';
      titleInput.className = 'form-control form-control-sm';
      titleInput.placeholder = 'Módulo ' + moduleCounter;

      left.appendChild(handle);
      left.appendChild(titleInput);

      var toggleBtn = document.createElement('button');
      toggleBtn.type = 'button';
      toggleBtn.className = 'btn btn-sm btn-light ml-2';
      toggleBtn.innerHTML = '<i class="fas fa-chevron-up"></i>';

      header.appendChild(left);
      header.appendChild(toggleBtn);

      var body = document.createElement('div');
      body.className = 'mt-2';

      var lessonsContainer = document.createElement('div');
      lessonsContainer.className = 'mb-2';

      var buttonsRow = document.createElement('div');
      buttonsRow.className = 'd-flex';

      var addLessonBtn = document.createElement('button');
      addLessonBtn.type = 'button';
      addLessonBtn.className = 'btn btn-primary btn-sm flex-fill';
      addLessonBtn.innerHTML = '<i class="fas fa-plus-circle mr-1"></i> Añadir Lección o Clase';

      buttonsRow.appendChild(addLessonBtn);

      body.appendChild(lessonsContainer);
      body.appendChild(buttonsRow);

      wrapper.appendChild(header);
      wrapper.appendChild(body);
      modulesContainer.appendChild(wrapper);

      toggleBtn.addEventListener('click', function() {
        var isHidden = body.style.display === 'none';
        body.style.display = isHidden ? '' : 'none';
        toggleBtn.innerHTML = isHidden ? '<i class="fas fa-chevron-up"></i>' : '<i class="fas fa-chevron-down"></i>';
      });

      addLessonBtn.addEventListener('click', function() {
        openLessonTypeModal(lessonsContainer);
      });
    }

    if (addSectionButton && modulesContainer) {
      addSectionButton.addEventListener('click', function() {
        createSection();
      });
    }
  });
</script>
