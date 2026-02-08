<footer class="classroom-footer footer-area bg-white border-top py-3 mt-auto">
    <div class="container-fluid">
        <div class="d-sm-flex justify-content-between align-items-center">
            <div>
                <strong>Copyright &copy; 2025 <a href="https://puertosystem.com" target="_blank">Puerto System, S.A.</a> | Diseñado por: <a href="https://norbertoramirez.com/" target="_blank">Norberto Ramirez</a> & <a href="https://postsdigital.com/" target="_blank">POSTS Digital</a></strong>
            </div>
            <div class="d-none d-sm-inline-block">
                <b>Versión</b> 1.0.1
            </div>
        </div>
    </div>
</footer>

    <!-- JS -->
    <script src="<?php echo $baseUrl; ?>/assets/js/vendor/jquery.min.js"></script>
    <script src="<?php echo $baseUrl; ?>/assets/js/vendor/bootstrap.min.js"></script>
    <script>
        // Toggle Sidebar
        $(document).ready(function() {
            $('#toggle-sidebar').on('click', function() {
                $('.classroom-sidebar').toggleClass('collapsed');
                $('.classroom-content').toggleClass('expanded');
                $('.classroom-footer').toggleClass('expanded');
            });

            // Mobile toggle
            $('.mobile-toggle').on('click', function() {
                $('.classroom-sidebar').toggleClass('active');
            });
        });
    </script>
</body>
</html>