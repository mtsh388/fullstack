<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"><?= $title ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active text-capitalize"><?= $this->uri->segment('1') ?></li>
            <li class="breadcrumb-item active text-capitalize"><?= $title ?></li>
        </ol>

        <div class="card shadow-lg m-3">
            <form class="row g-3 m-4" method="POST" onsubmit="addNewLines();" action="<?= base_url('posts/update/' . $post['id']) ?>">
                <div class="col-md-12">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control <?= (form_error('title') ? 'is-invalid' : '') ?>" id="title" name="title" value="<?= $post['title'] ?>" required>
                    <?= form_error('title', '<div class="invalid-feedback">', '</div>'); ?>
                </div>
                <div class="col-md-12">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" name="content" id="content" cols="30" required><?= str_replace('<br>', " ", $post['content'])  ?></textarea>
                    <?= form_error('content', '<div class="invalid-feedback">', '</div>'); ?>
                </div>
                <div class="col-md-6">
                    <label for="category" class="form-label">Category</label>
                    <input type="text" class="form-control <?= (form_error('category') ? 'is-invalid' : '') ?>" id="category" name="category" value="<?= $post['category'] ?>" required>
                    <?= form_error('category', '<div class="invalid-feedback">', '</div>'); ?>
                </div>
                <textarea name="content2" id="content2" cols="30" hidden></textarea>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit" name="status" id="status" value="Publish">Publish <i class="bi bi-send"></i></button>
                    <button class="btn btn-secondary" type="submit" name="status" id="status" value="Draft">Draft <i class="bi bi-file-earmark"></i></button>
                </div>
            </form>

        </div>
    </div>
</main>
<script>
    function addNewLines() {
        text = document.getElementById('content').value;
        text = text.replace(/   /g, "[sp][sp]");
        text = text.replace(/\n/g, "[nl]");
        document.getElementById('content2').value = text;
    }
</script>