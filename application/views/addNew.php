<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"><?= $title ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active text-capitalize"><?= $this->uri->segment('1') ?></li>
            <li class="breadcrumb-item active text-capitalize"><?= $title ?></li>
        </ol>

        <div class="card shadow-lg m-3">
            <form class="row g-3 m-4" method="POST" onsubmit="addNewLines();" action="<?= base_url('posts/addNew') ?>">
                <div class="col-md-12">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control <?= (form_error('title') ? 'is-invalid' : '') ?>" id="title" name="title" value="<?= set_value('title') ?>" required>
                    <?= form_error('title', '<div class="invalid-feedback">', '</div>'); ?>
                </div>
                <div class="col-md-12">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" name="content" id="content" cols="30" required><?= set_value('content') ?></textarea>
                    <?= form_error('content', '<div class="invalid-feedback">', '</div>'); ?>
                </div>
                <div class="col-md-6">
                    <label for="category" class="form-label">Category</label>
                    <input type="text" class="form-control <?= (form_error('category') ? 'is-invalid' : '') ?>" id="category" name="category" value="<?= set_value('category') ?>" required>
                    <?= form_error('category', '<div class="invalid-feedback">', '</div>'); ?>
                </div>
                <textarea name="content2" id="content2" cols="30" hidden></textarea>
                <div class="col-md-6">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" aria-label="Default select example" name="status" id="status" required>
                        <option value="">Open this select status</option>
                        <option value="Draft" <?= (set_value('status') == 'Draft') ? 'selected' : '' ?>>Draft</option>
                        <option value="Publish" <?= (set_value('status') == 'Publish') ? 'selected' : '' ?>>Publish</option>
                        <option value="Trash" <?= (set_value('status') == 'Trash') ? 'selected' : '' ?>>Trash</option>
                    </select>
                    <?= form_error('status', '<div class="invalid-feedback">', '</div>'); ?>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Save</button>
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