<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2022</div>
        </div>
    </div>
</footer>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/') ?>js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/') ?>assets/demo/chart-area-demo.js"></script>
<script src="<?= base_url('assets/') ?>assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/') ?>js/datatables-simple-demo.js"></script>
<script>
    window.setTimeout(function() {
        $("#pesan").fadeTo(500, ).slideUp(500, function() {
            $(this).remove();
        });
    }, 5000);
</script>
<script>
    $(document).ready(function() {
        $('#datatablesSimple1').DataTable({});
        $('#datatablesSimple2').DataTable({});
    });
</script>
</body>

</html>