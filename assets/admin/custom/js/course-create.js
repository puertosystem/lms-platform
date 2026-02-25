document.addEventListener('DOMContentLoaded', function() {
    var btnSelectImage = document.getElementById('btn-select-image');
    if (btnSelectImage) {
        btnSelectImage.addEventListener('click', function() {
            var input = document.getElementById('certificate_background');
            if (input) {
                input.click();
            }
        });
    }
});