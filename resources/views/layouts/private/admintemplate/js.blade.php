    <!-- Script untuk Menampilkan Pratinjau Gambar -->
    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('image_preview');
                output.src = reader.result;
                output.style.display = 'block'; // Tampilkan gambar setelah dipilih
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('edit_image_preview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>


    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/private/admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/private/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/private/admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/private/admin/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('assets/private/admin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/private/admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/private/admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/private/admin/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/private/admin/js/demo/chart-pie-demo.js') }}"></script>
    <script src="{{ asset('assets/private/admin/js/demo/datatables-demo.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>

    </body>

    </html>
