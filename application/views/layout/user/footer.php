<footer class="pt-4 my-md-5 pt-md-5 border-top text-center ">
    <small class="d-block mb-3 text-uppercase text-primary">&COPY; Yayasan Insani Taqwin Indonesia 2021</small>
</footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
<script src="<?= base_url() ?>assets/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="<?= base_url() ?>assets/js/datatables-simple-demo.js"></script>

</body>

</html>