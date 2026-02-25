document.addEventListener('DOMContentLoaded', function() {
    // Lógica para el modal de edición de usuarios
    $('.btn-edit-user').on('click', function() {
        var button = $(this);
        var id = button.data('id');
        var tr = button.closest('tr');
        var username = tr.find('td:eq(1)').text();
        var email = tr.find('td:eq(2)').text();
        var role = tr.find('td:eq(3)').text().trim(); // Might need parsing

        // Aquí se rellenarían los campos del formulario
        $('#edit_username').val(username);
        $('#edit_email').val(email);
        // ... otros campos
    });

    // Lógica para el modal de visualización de usuarios
    $('.btn-view-user').on('click', function() {
        var button = $(this);
        var id = button.data('id');
        var tr = button.closest('tr');
        var username = tr.find('td:eq(1)').text();
        var email = tr.find('td:eq(2)').text();
        
        $('#view_username').val(username);
        $('#view_email').val(email);
        // ... otros campos
    });
});