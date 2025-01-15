<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Consultation des Notes</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?= base_url('css/sb-admin-2.min.css') ?>" rel="stylesheet">
    <style>
        /* Personnalisation des couleurs */
        .bg-gradient-primary {
            background-color: #4e73df !important; /* Bleu clair */
            background-image: linear-gradient(180deg, #4e73df 10%, #224abe 100%);
            color: #fff;
        }

        .table-dark {
            background-color: #4e73df !important; /* Bleu clair pour l'entête */
            color: white;
        }

        .btn-primary {
            background-color: #4e73df !important;
            border-color: #4e73df !important;
        }

        .alert-info {
            background-color: #d1ecf1;
            color: #0c5460;
        }
    </style></head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <div class="container-fluid mt-5">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Consultation des Notes</h1>
                    </div>

                    <!-- Table of Notes -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Vos Notes</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Matière</th>
                                            <th>Date</th>
                                            <th>Note</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($notes)): ?>
                                            <?php foreach ($notes as $note): ?>
                                                <tr>
                                                    <td><?= esc($note['matiere']) ?></td>
                                                    <td><?= esc($note['date']) ?></td>
                                                    <td><?= esc($note['note']) ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan="3" class="text-center">Aucune note trouvée</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Moyenne Générale -->
                    <div class="alert alert-info text-center">
                        <strong>Moyenne Générale :</strong> <?= number_format($moyenne_generale, 2) ?>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url('vendor/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap Bundle -->
    <script src="<?= base_url('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- Core plugin JavaScript -->
    <script src="<?= base_url('vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
    <!-- Custom scripts for all pages -->
    <script src="<?= base_url('js/sb-admin-2.min.js') ?>"></script>

</body>
</html>
