<!-- Main content -->
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"><?= $title ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active text-capitalize"><?= $this->uri->segment('1') ?></li>
            <li class="breadcrumb-item active text-capitalize"><?= $title ?></li>
        </ol>
        <?= $this->session->flashdata('pesan'); ?>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#published">Published <i class="bi bi-send"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#draft">Draft <i class="bi bi-file-earmark"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#trash">Trash <i class="bi bi-trash"></i></a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane container active" id="published">
                <div class="card mb-4 mt-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        DataTable Published
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" class="table table-striped text-center" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Category</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($published as $published) { ?>
                                    <tr>
                                        <td class="align-middle"><?= $published['title'] ?></td>
                                        <td class=" align-middle"><?= $published['category'] ?></td>
                                        <td class="align-middle">
                                            <form action=" <?= base_url('posts/edit') ?>" method="post">
                                                <input type="hidden" name="id" value="<?= $published['id'] ?>">
                                                <button type="submit" class="btn btn-warning mb-2"><i class="bi bi-pencil-square"></i></button>
                                            </form>
                                            <form action="<?= base_url('posts/trash') ?>" method="post">
                                                <input type="hidden" name="id" value="<?= $published['id'] ?>">
                                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane container fade" id="draft">
                <div class="card mb-4 mt-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        DataTable Draft
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple2" class="table table-striped text-center" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Category</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($draft as $draft) { ?>
                                    <tr>
                                        <td class="align-middle"><?= $draft['title'] ?></td>
                                        <td class=" align-middle"><?= $draft['category'] ?></td>
                                        <td class="align-middle">
                                            <form action=" <?= base_url('post/edit') ?>" method="post">
                                                <input type="hidden" name="id" value="<?= $draft['id'] ?>">
                                                <button type="submit" class="btn btn-warning mb-2"><i class="bi bi-pencil-square"></i></button>
                                            </form>
                                            <form action="<?= base_url('post/delete') ?>" method="post">
                                                <input type="hidden" name="id" value="<?= $draft['id'] ?>">
                                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane container fade" id="trash">
                <div class="card mb-4 mt-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        DataTable Trash
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple3" class="table table-striped text-center" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Category</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($trash as $trash) { ?>
                                    <tr>
                                        <td class="align-middle"><?= $trash['title'] ?></td>
                                        <td class="align-middle"><?= $trash['category'] ?></td>
                                        <td class="align-middle">
                                            <form action=" <?= base_url('posts/edit') ?>" method="post">
                                                <input type="hidden" name="id" value="<?= $trash['id'] ?>">
                                                <button type="submit" class="btn btn-warning mb-2"><i class="bi bi-pencil-square"></i></button>
                                            </form>
                                            <form action="<?= base_url('posts/delete') ?>" method="post">
                                                <input type="hidden" name="id" value="<?= $trash['id'] ?>">
                                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>