  <!-- Bootstrap 3.3.5 -->
  <script src="<?= $sRootPath ?>/skin/adminlte/bootstrap/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="<?= $sRootPath ?>/skin/adminlte/plugins/iCheck/icheck.min.js"></script>
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
  </script>
</body>
</html>
