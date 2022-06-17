</div>
</div>
<script>
    function previewImg() {
        const image = document.querySelector('#image');
        // const sampulLabel = document.querySelector('.form-label');
        const imgPreview = document.querySelector('.img-preview');

        sampulLabel.textContent = sampul.files[0].name;

        const fileImage = new FileReader();

        fileImage.readAsDataUrl(image.file[0]);
        fileImage.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
    image.onchange = evt => {
        const [file] = image.files
        if (file) {
            imagePreview.src = URL.createObjectURL(file)
        }
    }
</script>
<script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="<?= base_url() ?>assets/bootstrap/dashboard/dashboard.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="<?= base_url() ?>assets/js/datatables-simple-demo.js"></script>
</body>

</html>