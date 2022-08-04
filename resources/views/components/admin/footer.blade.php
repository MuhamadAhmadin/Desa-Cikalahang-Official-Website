<footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">
        </nav>
        <div class="copyright ml-auto">
            2022, made with <i class="fa fa-heart heart text-danger"></i> by <a
                href="https://bengkelwebindonesia.com/">Bengkel Web Indonesia</a>
        </div>
    </div>
</footer>
</div>
</div>

@stack('before-script')

<!--   Core JS Files   -->
<script src="{{ asset('admin/js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('admin/js/core/popper.min.js') }}"></script>
<script src="{{ asset('admin/js/core/bootstrap.min.js') }}"></script>

<!-- jQuery UI -->
<script src="{{ asset('admin/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('admin/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

<!-- Moment JS -->
<script src="{{ asset('admin/js/plugin/moment/moment.min.js') }}"></script>

<!-- jQuery Scrollbar -->
<script src="{{ asset('admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

<!-- Bootstrap Notify -->
<script src="{{ asset('admin/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

<!-- Select2 -->
<script src="{{ asset('admin/js/plugin/select2/select2.full.min.js') }}"></script>

<!-- Sweet Alert -->
<script src="{{ asset('admin/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

<!-- Atlantis JS -->
<script src="{{ asset('admin/js/atlantis.min.js') }}"></script>

<!-- Datetimepicker -->
<script src="{{ asset('admin/js/plugin/datepicker/bootstrap-datetimepicker.min.js') }}"></script>

<script>
    function _calculateAge(age) {
        var Bdate = age;
        var Bday = +new Date(Bdate);
        Q4A = ~~((Date.now() - Bday) / (31557600000)) + " Tahun";
        return Q4A;
    }

    $(document).ready(function() {
        $('.select2').select2({
            theme: "bootstrap"
        });

        $(".datepicker").each(function() {
            $(this).datetimepicker({
                format: 'YYYY-MM-DD'
            });
        })

        $(".myForm").on('submit', function(event) {
            $(".formSubmitter").attr('disabled', true).addClass('disabled');
            $(".myForm").attr('onsubmit', 'return false');
        });
    })

    $(document).ready(function(){
        $(document).on('keydown keyup', '#btn_text', function(){
            // console.log($(this).val());
            $('#btn').text($(this).val());
        })
    })

</script>

@if (Session::has('success'))
    <script>
        var message = "{{ Session::get('success') }}";
        $.notify({
            icon: 'flaticon-alarm-1',
            title: '{{ env("APP_NAME") }}',
            message: message,
        }, {
            type: 'success',
            placement: {
                from: "bottom",
                align: "right"
            },
            time: 1000,
        });

    </script>
@endif

@if (Session::has('error'))
    <script>
        var message = "{{ Session::get('error') }}";
        $.notify({
            icon: 'flaticon-exclamation-triangle',
            title: 'Terjadi Kesalahan',
            message: message,
        }, {
            type: 'danger',
            placement: {
                from: "bottom",
                align: "right"
            },
            time: 1000,
        });

    </script>
@endif

@stack('js')

</body>

</html>
