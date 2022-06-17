<!-- Main content -->
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"><?= $title ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active text-capitalize"><?= $this->uri->segment('1') ?></li>
            <li class="breadcrumb-item active text-capitalize"><?= $title ?></li>
        </ol>
        <div class="card mb-4 mt-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Published
            </div>
            <div class="card-body">
                <table id="datatablesSimple" class="table table-striped text-center" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">Article</th>
                            <th class="text-center">Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($published as $published) { ?>
                            <tr>
                                <td class="align-middle">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title text-start"><?= $published['title'] ?></h5>
                                            <p class="card-text text-start"><?= $published['content'] ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle"><?= $published['status'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</main>