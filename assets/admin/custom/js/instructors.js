document.addEventListener('DOMContentLoaded', function() {
    var instructorToDelete = null;

    // Verificar si jQuery está cargado (por si acaso se mueve el script o cambia el orden)
    if (typeof $ !== 'undefined') {
        // Delegación de eventos para los botones de eliminar
        $(document).on('click', '.btn-delete-instructor', function(e) {
            e.preventDefault();
            instructorToDelete = $(this).closest('tr');
            $('#deleteInstructorModal').modal('show');
        });

        // Confirmar eliminación
        $('#confirmDeleteBtn').on('click', function() {
            if (instructorToDelete) {
                instructorToDelete.fadeOut(500, function() {
                    $(this).remove();
                });
                $('#deleteInstructorModal').modal('hide');
                instructorToDelete = null;
            }
        });

        // Preview de imagen en modal de edición (si existe el elemento)
        $('#edit_photo').on('change', function(e) {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview_edit_photo').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
    } else {
        // Fallback si jQuery carga después
        console.warn('jQuery no detectado en DOMContentLoaded para instructors.js. Intentando con window.onload...');
        window.addEventListener('load', function() {
             if (typeof $ !== 'undefined') {
                $(document).on('click', '.btn-delete-instructor', function(e) {
                    e.preventDefault();
                    instructorToDelete = $(this).closest('tr');
                    $('#deleteInstructorModal').modal('show');
                });

                $('#confirmDeleteBtn').on('click', function() {
                    if (instructorToDelete) {
                        instructorToDelete.fadeOut(500, function() {
                            $(this).remove();
                        });
                        $('#deleteInstructorModal').modal('hide');
                        instructorToDelete = null;
                    }
                });

                // Preview de imagen en modal de edición
                $('#edit_photo').on('change', function(e) {
                    if (this.files && this.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $('#preview_edit_photo').attr('src', e.target.result);
                        }
                        reader.readAsDataURL(this.files[0]);
                    }
                });
             }
        });
    }
});
