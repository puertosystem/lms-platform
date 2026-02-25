document.addEventListener('DOMContentLoaded', function() {
  var modulesContainer = document.getElementById('curriculum_modules');
  var addSectionButton = document.getElementById('add_section');
  var lessonEditorContainer = document.getElementById('lesson_editor_container');
  var quizCategories = [];
  var lessonTypeModal = document.getElementById('lesson_type_modal');
  var lessonTypeClose = document.getElementById('lesson_type_close');
  var currentLessonsContainer = null;
  var lessonTypeOptions = document.querySelectorAll('.lesson-type-option');

  // Filtro de cursos por texto (buscador)
  (function setupCourseSearch() {
    var searchInput = document.getElementById('course_search');
    var select = document.getElementById('course_id');
    if (!searchInput || !select) return;
    var originalOptions = Array.prototype.slice.call(select.options);
    searchInput.addEventListener('input', function() {
      var term = (this.value || '').toLowerCase();
      select.innerHTML = '';
      originalOptions.forEach(function(opt) {
        if (!term || (opt.text || '').toLowerCase().indexOf(term) !== -1 || opt.value === '') {
          select.appendChild(opt);
        }
      });
    });
  })();

  if (!modulesContainer || !addSectionButton) {
    return;
  }

  var moduleCounter = 0;

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
    var iconHtml = '<i class="fas fa-play-circle"></i>';
    switch (lessonType) {
      case 'texto':
        iconHtml = '<i class="far fa-file-alt text-primary"></i>';
        break;
      case 'video':
        iconHtml = '<i class="fas fa-video text-primary"></i>';
        break;
      case 'cuestionario':
        iconHtml = '<i class="fas fa-check-circle text-primary"></i>';
        break;
    }
    bullet.innerHTML = iconHtml;

    var lessonInput = document.createElement('input');
    lessonInput.type = 'text';
    lessonInput.className = 'form-control form-control-sm';
    lessonInput.placeholder = 'Nueva lección o clase';

    var editBtn = document.createElement('button');
    editBtn.type = 'button';
    editBtn.className = 'btn btn-sm btn-light text-secondary ml-2';
    editBtn.innerHTML = '<i class="fas fa-edit"></i>';

    var deleteBtn = document.createElement('button');
    deleteBtn.type = 'button';
    deleteBtn.className = 'btn btn-sm btn-light text-danger ml-1';
    deleteBtn.innerHTML = '<i class="fas fa-trash-alt"></i>';

    lessonWrapper.appendChild(bullet);
    lessonWrapper.appendChild(lessonInput);
    lessonWrapper.appendChild(editBtn);
    lessonWrapper.appendChild(deleteBtn);
    targetContainer.appendChild(lessonWrapper);

    editBtn.addEventListener('click', function() {
      var lt = lessonWrapper.dataset.lessonType || '';
      if (!lessonEditorContainer) {
        lessonInput.focus();
        lessonInput.select();
        return;
      }
      if (lt === 'texto') {
        renderTextLessonEditor(lessonWrapper, lessonInput);
      } else if (lt === 'video') {
        renderVideoLessonEditor(lessonWrapper, lessonInput);
      } else if (lt === 'cuestionario') {
        renderQuizLessonEditor(lessonWrapper, lessonInput);
      } else {
        lessonInput.focus();
        lessonInput.select();
      }
    });

    deleteBtn.addEventListener('click', function() {
      targetContainer.removeChild(lessonWrapper);
    });
  }

  function renderTextLessonEditor(lessonWrapper, lessonInput) {
    if (!lessonEditorContainer) return;
    var titleValue = lessonInput.value || '';

    lessonEditorContainer.innerHTML = ''
      + '<div class="mb-3 d-flex align-items-center">'
      + '  <span class="btn btn-default btn-sm mr-2"><i class="far fa-file-alt mr-1"></i> Text lesson</span>'
      + '  <input type="text" class="form-control form-control-sm" id="lesson_editor_title" placeholder="Nombre de la lección">'
      + '  <button type="button" class="btn btn-primary btn-sm ml-2" id="lesson_editor_save">Guardar</button>'
      + '</div>'
      + '<div class="mb-3">'
      + '  <ul class="nav nav-pills">'
      + '    <li class="nav-item"><a href="#" class="nav-link active" id="tab_text_lesson">Lección</a></li>'
      + '    <li class="nav-item"><a href="#" class="nav-link disabled">Q&A</a></li>'
      + '  </ul>'
      + '</div>'
      + '<div class="mb-3">'
      + '  <label for="lesson_editor_duration">Duración de la lección</label>'
      + '  <input type="text" class="form-control form-control-sm" id="lesson_editor_duration" placeholder="Ejemplo: 2h 45m">'
      + '</div>'
      + '<div class="mb-3">'
      + '  <label for="lesson_editor_content">Contenido de la lección</label>'
      + '  <textarea id="lesson_editor_content"></textarea>'
      + '</div>'
      + '<div class="mb-3">'
      + '  <label>Materiales de la lección</label>'
      + '  <div class="border rounded bg-light d-flex justify-content-center align-items-center" style="min-height:160px;">'
      + '    <div class="text-center">'
      + '      <p class="mb-3">Arrastra y suelta archivos aquí o selecciona desde tu equipo</p>'
      + '      <button type="button" class="btn btn-primary btn-sm">Buscar archivos</button>'
      + '    </div>'
      + '  </div>'
      + '</div>';

    var editorTitleInput = document.getElementById('lesson_editor_title');
    if (editorTitleInput) {
      editorTitleInput.value = titleValue;
      editorTitleInput.addEventListener('input', function() {
        lessonInput.value = this.value;
      });
    }

    var saveButton = document.getElementById('lesson_editor_save');
    if (saveButton) {
      saveButton.addEventListener('click', function() {
        lessonInput.value = editorTitleInput ? editorTitleInput.value : lessonInput.value;
      });
    }

    if (window.$ && $('#lesson_editor_content').summernote) {
      $('#lesson_editor_content').summernote({
        height: 260
      });
    }
  }

  function renderVideoLessonEditor(lessonWrapper, lessonInput) {
    if (!lessonEditorContainer) return;
    var titleValue = lessonInput.value || '';

    lessonEditorContainer.innerHTML = ''
      + '<div class="mb-3 d-flex align-items-center">'
      + '  <span class="btn btn-default btn-sm mr-2"><i class="fas fa-video mr-1"></i> Video lesson</span>'
      + '  <input type="text" class="form-control form-control-sm" id="lesson_editor_title" placeholder="Nombre de la lección">'
      + '  <button type="button" class="btn btn-primary btn-sm ml-2" id="lesson_editor_save">Guardar</button>'
      + '</div>'
      + '<div class="mb-3">'
      + '  <ul class="nav nav-pills">'
      + '    <li class="nav-item"><a href="#" class="nav-link active" id="tab_video_lesson">Lección</a></li>'
      + '    <li class="nav-item"><a href="#" class="nav-link disabled">Markers & Questions</a></li>'
      + '    <li class="nav-item"><a href="#" class="nav-link disabled">Q&A</a></li>'
      + '  </ul>'
      + '</div>'
      + '<div class="mb-3">'
      + '  <div class="form-group mb-1">'
      + '    <label for="video_source_type">Source type</label>'
      + '    <select class="form-control form-control-sm" id="video_source_type">'
      + '      <option value="">Select source</option>'
      + '      <option value="html">HTML (MP4)</option>'
      + '      <option value="youtube">YouTube</option>'
      + '      <option value="vimeo">Vimeo</option>'
      + '      <option value="external">External Link</option>'
      + '      <option value="embed">Embed</option>'
      + '      <option value="shortcode">Shortcode</option>'
      + '    </select>'
      + '  </div>'
      + '  <small class="text-danger d-block" id="video_source_required" style="display:none;">This field is required</small>'
      + '</div>'
      + '<div class="mb-3" id="video_source_fields"></div>'
      + '<div class="mb-3">'
      + '  <label for="lesson_editor_duration">Duración de la lección</label>'
      + '  <input type="text" class="form-control form-control-sm" id="lesson_editor_duration" placeholder="Ejemplo: 2h 45m">'
      + '</div>';

    var editorTitleInput = document.getElementById('lesson_editor_title');
    if (editorTitleInput) {
      editorTitleInput.value = titleValue;
      editorTitleInput.addEventListener('input', function() {
        lessonInput.value = this.value;
      });
    }

    var saveButton = document.getElementById('lesson_editor_save');
    if (saveButton) {
      saveButton.addEventListener('click', function() {
        if (editorTitleInput) {
          lessonInput.value = editorTitleInput.value;
        }
      });
    }

    var sourceSelect = document.getElementById('video_source_type');
    var sourceFieldsContainer = document.getElementById('video_source_fields');
    var sourceRequired = document.getElementById('video_source_required');

    function renderVideoSourceFields(type) {
      if (!sourceFieldsContainer) return;
      var html = '';
      if (!type) {
        sourceRequired.style.display = 'block';
        sourceFieldsContainer.innerHTML = '';
        return;
      }
      sourceRequired.style.display = 'none';
      if (type === 'html') {
        html = ''
          + '<div class="form-group">'
          + '  <label for="video_html_url">Video file URL (MP4)</label>'
          + '  <input type="text" class="form-control form-control-sm" id="video_html_url" placeholder="Enter MP4 video URL">'
          + '</div>';
      } else if (type === 'youtube') {
        html = ''
          + '<div class="form-group">'
          + '  <label for="video_youtube_url">YouTube video URL</label>'
          + '  <input type="text" class="form-control form-control-sm" id="video_youtube_url" placeholder="Enter YouTube video URL">'
          + '</div>';
      } else if (type === 'vimeo') {
        html = ''
          + '<div class="form-group">'
          + '  <label for="video_vimeo_url">Vimeo video URL</label>'
          + '  <input type="text" class="form-control form-control-sm" id="video_vimeo_url" placeholder="Enter Vimeo video URL">'
          + '</div>';
      } else if (type === 'external') {
        html = ''
          + '<div class="form-group">'
          + '  <label for="video_external_url">External video URL</label>'
          + '  <input type="text" class="form-control form-control-sm" id="video_external_url" placeholder="Enter external video URL">'
          + '</div>';
      } else if (type === 'embed') {
        html = ''
          + '<div class="form-group">'
          + '  <label for="video_embed_code">Embed iframe content</label>'
          + '  <textarea class="form-control form-control-sm" id="video_embed_code" rows="4" placeholder="Enter embed code"></textarea>'
          + '</div>';
      } else if (type === 'shortcode') {
        html = ''
          + '<div class="form-group">'
          + '  <label for="video_shortcode">Shortcode</label>'
          + '  <textarea class="form-control form-control-sm" id="video_shortcode" rows="3" placeholder="Enter shortcode"></textarea>'
          + '</div>';
      }
      sourceFieldsContainer.innerHTML = html;
    }

    if (sourceSelect) {
      sourceSelect.addEventListener('change', function() {
        renderVideoSourceFields(this.value);
      });
    }
  }

  function renderQuizLessonEditor(lessonWrapper, lessonInput) {
    if (!lessonEditorContainer) return;
    var titleValue = lessonInput.value || '';

    lessonEditorContainer.innerHTML = ''
      + '<div class="mb-3 d-flex align-items-center">'
      + '  <span class="btn btn-default btn-sm mr-2"><i class="fas fa-question-circle mr-1"></i> Cuestionario</span>'
      + '  <input type="text" class="form-control form-control-sm" id="lesson_editor_title" placeholder="Nombre del cuestionario">'
      + '  <button type="button" class="btn btn-primary btn-sm ml-2" id="lesson_editor_save">Guardar</button>'
      + '</div>'
      + '<div class="mb-3 d-flex justify-content-between align-items-center">'
      + '  <ul class="nav nav-pills">'
      + '    <li class="nav-item"><a href="#" class="nav-link active">Preguntas <span class="badge badge-secondary ml-1" id="quiz_question_count">0</span></a></li>'
      + '    <li class="nav-item"><a href="#" class="nav-link disabled">Ajustes</a></li>'
      + '    <li class="nav-item"><a href="#" class="nav-link disabled">Preguntas y respuestas</a></li>'
      + '  </ul>'
      + '  <div>'
      + '    <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fas fa-list-ul mr-1"></i> Biblioteca de preguntas</button>'
      + '  </div>'
      + '</div>'
      + '<div id="quiz_builder_zone" class="mb-3 p-3" style="border:2px dashed #e0e0e0; border-radius:6px;">'
      + '  <div class="btn-group mr-2" id="quiz_add_question_group">'
      + '    <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'
      + '      <i class="fas fa-plus mr-1"></i> Pregunta'
      + '    </button>'
      + '    <div class="dropdown-menu">'
      + '      <a class="dropdown-item quiz-add-question-type" href="#" data-type="single">Elección única</a>'
      + '      <a class="dropdown-item quiz-add-question-type" href="#" data-type="multiple">Opción múltiple</a>'
      + '      <a class="dropdown-item quiz-add-question-type" href="#" data-type="true_false">Verdadero-Falso</a>'
      + '    </div>'
      + '  </div>'
      + '  <button type="button" class="btn btn-success btn-sm mr-2" id="quiz_add_bank"><i class="fas fa-plus mr-1"></i> Banco de preguntas</button>'
      + '  <button type="button" class="btn btn-outline-secondary btn-sm" id="quiz_import_set"><i class="fas fa-file-import mr-1"></i> Importar juego de preguntas</button>'
      + '</div>'
      + '<div id="quiz_questions_container"></div>'
      + '<div class="text-right">'
      + '  <button type="button" class="btn btn-primary btn-sm">Guardar</button>'
      + '</div>';

    var editorTitleInput = document.getElementById('lesson_editor_title');
    if (editorTitleInput) {
      editorTitleInput.value = titleValue;
      editorTitleInput.addEventListener('input', function() {
        lessonInput.value = this.value;
      });
    }

    var saveButton = document.getElementById('lesson_editor_save');
    if (saveButton) {
      saveButton.addEventListener('click', function() {
        if (editorTitleInput) {
          lessonInput.value = editorTitleInput.value;
        }
      });
    }

    var questionCountBadge = document.getElementById('quiz_question_count');
    var quizZone = document.getElementById('quiz_builder_zone');
    var count = 0;
    if (quizZone && questionCountBadge) {
      var typeItems = quizZone.querySelectorAll('.quiz-add-question-type');
      typeItems.forEach(function(item) {
        item.addEventListener('click', function(e) {
          e.preventDefault();
          var type = this.getAttribute('data-type') || '';
          count++;
          questionCountBadge.textContent = String(count);
          createQuizQuestion(type, count);
        });
      });
    }
  }

  function updateQuizQuestionNumbers() {
    var list = document.querySelectorAll('#quiz_questions_container .card');
    list.forEach(function(c, i) {
      var t = c.querySelector('.card-header .card-title');
      if (t) t.textContent = 'Pregunta ' + (i + 1);
    });
    var badge = document.getElementById('quiz_question_count');
    if (badge) badge.textContent = String(list.length);
  }

  function createQuizQuestion(type, index) {
    var container = document.getElementById('quiz_questions_container');
    if (!container) return;
    var id = 'q' + Date.now() + Math.floor(Math.random() * 1000);

    var card = document.createElement('div');
    card.className = 'card card-primary mb-3';

    var body = document.createElement('div');
    body.className = 'card-body';

    var header = document.createElement('div');
    header.className = 'card-header d-flex align-items-center justify-content-between';
    header.innerHTML = ''
      + '<h3 class="card-title mb-0">Pregunta ' + index + '</h3>'
      + '<div class="card-tools d-flex align-items-center">'
      + '  <button type="button" class="btn btn-tool text-white btn-delete-question" title="Eliminar"><i class="fas fa-trash-alt text-white"></i></button>'
      + '  <button type="button" class="btn btn-tool text-white" data-card-widget="collapse" title="Contraer/Expandir"><i class="fas fa-minus text-white"></i></button>'
      + '</div>';

    var questionEditor = document.createElement('div');
    questionEditor.className = 'mb-3';
    questionEditor.innerHTML = ''
      + '<label class="d-block mb-1">Ingrese su pregunta</label>'
      + '<textarea id="' + id + '_text"></textarea>';

    var controls = document.createElement('div');
    controls.className = 'form-row align-items-center mb-3';
    controls.innerHTML = ''
      + '<div class="col-auto mb-2">'
      + '  <select class="form-control form-control-sm q-type-select" id="' + id + '_type">'
      + '    <option value="single"' + (type === 'single' ? ' selected' : '') + '>Elección única</option>'
      + '    <option value="multiple"' + (type === 'multiple' ? ' selected' : '') + '>Opción múltiple</option>'
      + '    <option value="true_false"' + (type === 'true_false' ? ' selected' : '') + '>Verdadero-Falso</option>'
      + '  </select>'
      + '</div>'
      + '<div class="col-auto mb-2">'
      + '  <div class="input-group input-group-sm">'
      + '    <select class="form-control q-category-select" id="' + id + '_category">'
      + '      <option value="">Categoría</option>'
      + '    </select>'
      + '    <div class="input-group-append">'
      + '      <button class="btn btn-secondary" type="button" id="' + id + '_addcat" title="Nueva categoría"><i class="fas fa-plus"></i></button>'
      + '    </div>'
      + '  </div>'
      + '</div>'
      + '<div class="col-auto mb-2">'
      + '  <div class="custom-control custom-switch">'
      + '    <input type="checkbox" class="custom-control-input" id="' + id + '_req">'
      + '    <label class="custom-control-label" for="' + id + '_req">Pregunta obligatoria</label>'
      + '  </div>'
      + '</div>';

    var answersWrap = document.createElement('div');
    answersWrap.className = 'mb-2';
    answersWrap.innerHTML = '<div class="mb-2"><strong>Respuestas</strong></div>'
      + '<div id="' + id + '_answers"></div>'
      + '<div class="input-group input-group-sm mt-2" id="' + id + '_add_answer_group">'
      + '  <input type="text" class="form-control" placeholder="Añadir nueva respuesta">'
      + '  <div class="input-group-append">'
      + '    <button class="btn btn-outline-secondary" type="button">Añadir</button>'
      + '  </div>'
      + '</div>';

    card.appendChild(header);
    var contentWrap = document.createElement('div');
    contentWrap.className = 'question-content';
    contentWrap.appendChild(questionEditor);
    contentWrap.appendChild(controls);
    contentWrap.appendChild(answersWrap);
    body.appendChild(contentWrap);
    card.appendChild(body);
    container.appendChild(card);

    var deleteBtn = header.querySelector('.btn-delete-question');
    if (deleteBtn) {
      deleteBtn.addEventListener('click', function() {
        card.remove();
        updateQuizQuestionNumbers();
      });
    }

    updateQuizQuestionNumbers();

    if (window.$ && $('#' + id + '_text').summernote) {
      $('#' + id + '_text').summernote({ height: 160 });
    }

    var answersContainer = document.getElementById(id + '_answers');
    var addAnswerGroup = document.getElementById(id + '_add_answer_group');
    var typeSelect = document.getElementById(id + '_type');
    var categorySelect = document.getElementById(id + '_category');
    var addCategoryBtn = document.getElementById(id + '_addcat');

    function renderAnswers(currentType) {
      answersContainer.innerHTML = '';
      if (currentType === 'true_false') {
        if (addAnswerGroup) addAnswerGroup.style.display = 'none';
        var trueRow = createAnswerRow('Verdadero', 'radio', id, true);
        var falseRow = createAnswerRow('Falso', 'radio', id, false);
        answersContainer.appendChild(trueRow);
        answersContainer.appendChild(falseRow);
        var falseInput = falseRow.querySelector('input[type="radio"]');
        if (falseInput) falseInput.checked = true;
      } else {
        if (addAnswerGroup) addAnswerGroup.style.display = '';
        answersContainer.appendChild(createAnswerRow('respuesta 1', currentType === 'single' ? 'radio' : 'checkbox', id, false));
        answersContainer.appendChild(createAnswerRow('respuesta 2', currentType === 'single' ? 'radio' : 'checkbox', id, false));
      }
    }

    function refreshQuizCategorySelects() {
      var selects = document.querySelectorAll('.q-category-select');
      selects.forEach(function(sel) {
        var current = sel.value;
        var html = '<option value="">Categoría</option>';
        quizCategories.forEach(function(cat) {
          html += '<option value="' + cat.replace(/"/g, '&quot;') + '">' + cat + '</option>';
        });
        sel.innerHTML = html;
        if (current && quizCategories.indexOf(current) !== -1) {
          sel.value = current;
        }
      });
    }

    function createAnswerRow(value, controlType, groupId, showCorrectLabel) {
      var row = document.createElement('div');
      row.className = 'd-flex align-items-center mb-2';
      var controlId = groupId + '_correct_' + Math.floor(Math.random() * 100000);
      row.innerHTML = ''
        + '<span class="text-muted mr-2"><i class="fas fa-grip-vertical"></i></span>'
        + '<input type="text" class="form-control form-control-sm mr-2" value="' + value.replace(/"/g, '&quot;') + '">'
        + '<button type="button" class="btn btn-light btn-sm mr-2">Add explanation</button>'
        + '<button type="button" class="btn btn-light btn-sm text-danger mr-2" title="Eliminar"><i class="fas fa-trash-alt"></i></button>'
        + '<div class="custom-control custom-' + (controlType === 'radio' ? 'radio' : 'checkbox') + ' ml-auto">'
        + '  <input type="' + controlType + '" id="' + controlId + '" name="' + groupId + '_correct" class="custom-control-input">'
        + '  <label class="custom-control-label" for="' + controlId + '">Correcto</label>'
        + '</div>';

      var delBtn = row.querySelector('.text-danger');
      if (delBtn) {
        delBtn.addEventListener('click', function() {
          row.remove();
        });
      }
      return row;
    }

    if (addAnswerGroup) {
      var input = addAnswerGroup.querySelector('input');
      var button = addAnswerGroup.querySelector('button');
      button.addEventListener('click', function() {
        var val = (input.value || '').trim();
        if (!val) return;
        var ct = typeSelect ? typeSelect.value : 'single';
        var ctrl = ct === 'single' ? 'radio' : 'checkbox';
        answersContainer.appendChild(createAnswerRow(val, ctrl, id, false));
        input.value = '';
      });
    }

    refreshQuizCategorySelects();

    if (addCategoryBtn && categorySelect) {
      addCategoryBtn.addEventListener('click', function() {
        var name = prompt('Nombre de la categoría');
        if (!name) return;
        name = name.trim();
        if (!name) return;
        if (quizCategories.indexOf(name) === -1) {
          quizCategories.push(name);
          refreshQuizCategorySelects();
        } else {
          refreshQuizCategorySelects();
        }
        var selects = document.querySelectorAll('.q-category-select');
        selects.forEach(function(sel) {
          if ([id + '_category'].indexOf(sel.id) !== -1) {
            sel.value = name;
          }
        });
      });
    }

    if (typeSelect) {
      renderAnswers(typeSelect.value);
      typeSelect.addEventListener('change', function() {
        renderAnswers(this.value);
      });
    } else {
      renderAnswers(type);
    }
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

  addSectionButton.addEventListener('click', function() {
    createSection();
  });
});
