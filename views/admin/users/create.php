<?php
$role = $_GET['role'] ?? 'student';
$roleLabels = [
    'student' => 'Estudiante',
    'instructor' => 'Instructor',
    'admin' => 'Administrador'
];
$currentRoleLabel = $roleLabels[$role] ?? 'Usuario';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Crear Nuevo <?php echo $currentRoleLabel; ?></h1>
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
      <form action="<?php echo $baseUrl; ?>/admin/usuarios/guardar" method="POST" enctype="multipart/form-data">
        <div class="row">
          
          <!-- Left Column: Profile Picture & Role -->
          <div class="col-md-3">
            
            <!-- Profile Picture Card -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <div class="profile-img-container" onclick="document.getElementById('avatar-upload').click()">
                    <img class="profile-user-img img-fluid img-circle"
                         src="<?php echo $baseUrl; ?>/assets/admin/dist/img/user4-128x128.jpg"
                         alt="User profile picture" id="avatar-preview">
                    <div class="profile-img-overlay">
                        <i class="fas fa-camera"></i>
                    </div>
                  </div>
                  <input type="file" id="avatar-upload" name="avatar" accept="image/*" onchange="previewImage(this)">
                </div>

                <h3 class="profile-username text-center" id="preview-name">Nuevo Usuario</h3>
                <p class="text-muted text-center" id="preview-role"><?php echo $currentRoleLabel; ?></p>

                <div class="form-group mt-4">
                    <label for="role">Rol de Usuario</label>
                    <select class="form-control" id="role" name="role" onchange="toggleRoleFields(); updatePreviewRole();">
                        <option value="student" <?php echo ($role == 'student') ? 'selected' : ''; ?>>Estudiante</option>
                        <option value="instructor" <?php echo ($role == 'instructor') ? 'selected' : ''; ?>>Instructor</option>
                        <option value="admin" <?php echo ($role == 'admin') ? 'selected' : ''; ?>>Administrador</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary btn-block"><b>Guardar Usuario</b></button>
                <a href="<?php echo $baseUrl; ?>/admin/usuarios" class="btn btn-default btn-block">Cancelar</a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->

          <!-- Right Column: User Details -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#account" data-toggle="tab">Cuenta</a></li>
                  <li class="nav-item"><a class="nav-link" href="#personal" data-toggle="tab">Información Personal</a></li>
                  <li class="nav-item" id="tab-profile"><a class="nav-link" href="#profile" data-toggle="tab">Perfil</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  
                  <!-- Account Tab -->
                  <div class="active tab-pane" id="account">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="username">Usuario <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Contraseña <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña segura" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Instructor Specific: Headline/Profession -->
                    <div id="instructor-account-fields" style="display: none;">
                        <hr>
                        <h6 class="text-info mb-3"><i class="fas fa-chalkboard-teacher mr-1"></i> Detalles Profesionales</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="profession">Profesión</label>
                                    <input type="text" class="form-control" id="profession" name="profession" placeholder="Ej: Ingeniero de Software">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="headline">Titular</label>
                                    <input type="text" class="form-control" id="headline" name="headline" placeholder="Ej: Especialista en Marketing Digital">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Student Specific: Education/Work -->
                    <div id="student-account-fields" style="display: none;">
                         <hr>
                         <h6 class="text-info mb-3"><i class="fas fa-user-graduate mr-1"></i> Detalles Académicos</h6>
                         <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="education_level">Nivel Educativo</label>
                                    <select class="form-control" id="education_level" name="education_level">
                                        <option value="">Seleccionar</option>
                                        <option value="highschool">Secundaria</option>
                                        <option value="university">Universidad</option>
                                        <option value="master">Maestría</option>
                                        <option value="phd">Doctorado</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Estado Laboral</label>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="has_experience" name="has_experience">
                                        <label class="custom-control-label" for="has_experience">Tiene experiencia laboral</label>
                                    </div>
                                    <div class="custom-control custom-switch mt-2">
                                        <input type="checkbox" class="custom-control-input" id="is_working" name="is_working">
                                        <label class="custom-control-label" for="is_working">Actualmente trabajando</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                  </div>
                  <!-- /.tab-pane -->

                  <!-- Personal Tab -->
                  <div class="tab-pane" id="personal">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first_name">Nombres <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Nombres" required oninput="updatePreviewName()">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="last_name">Apellidos <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellidos" required oninput="updatePreviewName()">
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
                                <label for="birthdate">Fecha Nacimiento</label>
                                <input type="date" class="form-control" id="birthdate" name="birthdate">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="phone">Teléfono</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="country-code-btn">
                                            <img src="https://flagcdn.com/w20/pe.png" alt="PE" style="width: 20px; margin-right: 5px;"> +51
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#" onclick="setCountryCode('+51', 'pe')"><img src="https://flagcdn.com/w20/pe.png" style="width: 20px;"> +51 Perú</a>
                                            <a class="dropdown-item" href="#" onclick="setCountryCode('+52', 'mx')"><img src="https://flagcdn.com/w20/mx.png" style="width: 20px;"> +52 México</a>
                                            <a class="dropdown-item" href="#" onclick="setCountryCode('+57', 'co')"><img src="https://flagcdn.com/w20/co.png" style="width: 20px;"> +57 Colombia</a>
                                            <a class="dropdown-item" href="#" onclick="setCountryCode('+54', 'ar')"><img src="https://flagcdn.com/w20/ar.png" style="width: 20px;"> +54 Argentina</a>
                                            <a class="dropdown-item" href="#" onclick="setCountryCode('+34', 'es')"><img src="https://flagcdn.com/w20/es.png" style="width: 20px;"> +34 España</a>
                                            <a class="dropdown-item" href="#" onclick="setCountryCode('+1', 'us')"><img src="https://flagcdn.com/w20/us.png" style="width: 20px;"> +1 USA</a>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="999 999 999">
                                    <input type="hidden" id="phone_code" name="phone_code" value="+51">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="country">País</label>
                                <select class="form-control" id="country" name="country">
                                    <option value="">Seleccionar</option>
                                    <option value="PE">Perú</option>
                                    <option value="MX">México</option>
                                    <option value="CO">Colombia</option>
                                    <option value="AR">Argentina</option>
                                    <option value="ES">España</option>
                                    <option value="US">Estados Unidos</option>
                                    <option value="other">Otro</option>
                                </select>
                            </div>
                        </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <!-- Profile Tab (Social & Bio) -->
                  <div class="tab-pane" id="profile">
                    
                    <div id="common-profile-content">
                        <div class="form-group">
                            <label for="bio">Biografía</label>
                            <textarea class="form-control" id="bio" name="bio" rows="4" placeholder="Cuéntanos sobre ti..."></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="website">Sitio Web</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-globe"></i></span>
                                        </div>
                                        <input type="url" class="form-control" id="website" name="website" placeholder="https://...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="linkedin">LinkedIn</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fab fa-linkedin"></i></span>
                                        </div>
                                        <input type="url" class="form-control" id="linkedin" name="linkedin" placeholder="URL perfil LinkedIn">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Instructor Socials -->
                    <div id="instructor-socials" style="display: none;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fab fa-facebook"></i></span>
                                        </div>
                                        <input type="url" class="form-control" id="facebook" name="facebook" placeholder="URL perfil Facebook">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="twitter">X / Twitter</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                                        </div>
                                        <input type="url" class="form-control" id="twitter" name="twitter" placeholder="URL perfil X">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Student Interests & Privacy -->
                    <div id="student-interests" style="display: none;">
                        <hr>
                        <h6 class="text-info mb-3">Temas de Interés</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="custom-control custom-checkbox mb-2">
                                    <input class="custom-control-input" type="checkbox" id="int_frontend" name="interests[]" value="frontend">
                                    <label class="custom-control-label" for="int_frontend">Desarrollador Frontend</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-2">
                                    <input class="custom-control-input" type="checkbox" id="int_backend" name="interests[]" value="backend">
                                    <label class="custom-control-label" for="int_backend">Desarrollador Backend</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-2">
                                    <input class="custom-control-input" type="checkbox" id="int_design" name="interests[]" value="graphic_design">
                                    <label class="custom-control-label" for="int_design">Diseñador Gráfico</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-2">
                                    <input class="custom-control-input" type="checkbox" id="int_ux" name="interests[]" value="ux_design">
                                    <label class="custom-control-label" for="int_ux">Diseño UX</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="custom-control custom-checkbox mb-2">
                                    <input class="custom-control-input" type="checkbox" id="int_english" name="interests[]" value="english">
                                    <label class="custom-control-label" for="int_english">Inglés</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-2">
                                    <input class="custom-control-input" type="checkbox" id="int_business" name="interests[]" value="business">
                                    <label class="custom-control-label" for="int_business">Negocios</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-2">
                                    <input class="custom-control-input" type="checkbox" id="int_marketing" name="interests[]" value="marketing">
                                    <label class="custom-control-label" for="int_marketing">Marketing</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-2">
                                    <input class="custom-control-input" type="checkbox" id="int_audio" name="interests[]" value="audiovisual">
                                    <label class="custom-control-label" for="int_audio">Audiovisual</label>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <h6 class="text-info mb-3">Privacidad</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="custom-control custom-checkbox mb-2">
                                    <input class="custom-control-input" type="checkbox" id="privacy_public" name="privacy_public" checked>
                                    <label class="custom-control-label" for="privacy_public">Perfil Público</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-2">
                                    <input class="custom-control-input" type="checkbox" id="privacy_name" name="privacy_name" checked>
                                    <label class="custom-control-label" for="privacy_name">Mostrar Nombre</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="custom-control custom-checkbox mb-2">
                                    <input class="custom-control-input" type="checkbox" id="privacy_socials" name="privacy_socials" checked>
                                    <label class="custom-control-label" for="privacy_socials">Mostrar Redes</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-2">
                                    <input class="custom-control-input" type="checkbox" id="privacy_country" name="privacy_country" checked>
                                    <label class="custom-control-label" for="privacy_country">Mostrar País</label>
                                </div>
                            </div>
                        </div>
                    </div>

                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </form>
    </div>
  </section>
</div>

<script>
    function previewImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('avatar-preview').src = e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function updatePreviewName() {
        var first = document.getElementById('first_name').value;
        var last = document.getElementById('last_name').value;
        var fullName = (first + ' ' + last).trim();
        if(fullName === '') fullName = 'Nuevo Usuario';
        document.getElementById('preview-name').innerText = fullName;
    }

    function updatePreviewRole() {
        var roleSelect = document.getElementById('role');
        var roleText = roleSelect.options[roleSelect.selectedIndex].text;
        document.getElementById('preview-role').innerText = roleText;
    }

    function setCountryCode(code, country) {
        // Update hidden input
        document.getElementById('phone_code').value = code;
        
        // Update button display
        var btn = document.getElementById('country-code-btn');
        btn.innerHTML = '<img src="https://flagcdn.com/w20/' + country + '.png" alt="' + country.toUpperCase() + '" style="width: 20px; margin-right: 5px;"> ' + code;
        
        // Prevent default link behavior
        event.preventDefault();
    }

    function toggleRoleFields() {
        var role = document.getElementById('role').value;
        
        // Sections to toggle
        var instructorAccount = document.getElementById('instructor-account-fields');
        var studentAccount = document.getElementById('student-account-fields');
        
        var instructorSocials = document.getElementById('instructor-socials');
        var studentInterests = document.getElementById('student-interests');
        
        var tabProfile = document.getElementById('tab-profile');
        var commonProfileContent = document.getElementById('common-profile-content');

        // Reset display
        instructorAccount.style.display = 'none';
        studentAccount.style.display = 'none';
        instructorSocials.style.display = 'none';
        studentInterests.style.display = 'none';
        
        // Logic
        if (role === 'instructor') {
            instructorAccount.style.display = 'block';
            instructorSocials.style.display = 'block';
            tabProfile.style.display = 'block'; // Show profile tab
        } else if (role === 'student') {
            studentAccount.style.display = 'block';
            studentInterests.style.display = 'block';
            tabProfile.style.display = 'block'; // Show profile tab
        } else if (role === 'admin') {
            // Admin might not need profile tab or specific fields
             tabProfile.style.display = 'none'; // Hide profile tab for admin? Or keep it?
             // Let's keep it but maybe hide specific sections. 
             // For now, let's say admin doesn't need public profile tab content, 
             // but maybe they have bio? Let's hide the tab for simplicity if admin doesn't have public profile.
             // If user wants admin profile, we can re-enable.
             // Based on context, admin is just a user with permissions.
             tabProfile.style.display = 'none'; 
        }
    }

    // Initialize on load
    document.addEventListener('DOMContentLoaded', function() {
        toggleRoleFields();
        updatePreviewRole();
    });
</script>
