
<body id="page-top">

   
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
            <?php if (session()->getFlashdata('success')): ?>
                    <div class="alert alert-success">
                        <?= session()->getFlashdata('success'); ?>
                    </div>
                <?php endif; ?>

                <?php if (session()->getFlashdata('errors')): ?>
                    <div class="alert alert-danger">
                        <?php foreach (session()->getFlashdata('errors') as $error): ?>
                            <p><?= esc($error) ?></p>
                        <?php endforeach; ?>
                    </div>
            <?php endif; ?>
                <!-- Begin Page Content -->
                <div class="container-fluid mt-5">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="col-lg-6 mb-4">
<!-- Personal Info Section -->
<div class="card shadow mb-4">
    <div class="card-header py-3 bg-gradient-primary text-white">
        <h6 class="m-0 font-weight-bold">Informations Personnelles</h6>
    </div>
    <div class="card-body">
        <div class="row">
            <!-- Profile Icon -->
            <div class="col-md-4 text-center">
                <div class="icon-circle bg-primary text-white mx-auto" style="width: 100px; height: 100px; line-height: 100px; font-size: 2.5rem; border-radius: 50%;">
                    <i class="fas fa-user"></i>
                </div>
            </div>
            <!-- Info Details -->
            <div class="col-md-8">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <th class="text-primary" style="width: 40%;">Nom :</th>
                            <td class="text-dark"><?= esc($user['nom']) ?></td>
                        </tr>
                        <tr>
                            <th class="text-primary">Prénom :</th>
                            <td class="text-dark"><?= esc($user['prenom']) ?></td>
                        </tr>
                        <tr>
                            <th class="text-primary">Date de Naissance :</th>
                            <td class="text-dark"><?= esc($user['date_of_birth']) ?></td>
                        </tr>
                        <tr>
                            <th class="text-primary">Niveau :</th>
                            <td class="text-dark"><?= esc($user['niveau']) ?></td>
                        </tr>
                        <tr>
                            <th class="text-primary">Section :</th>
                            <td class="text-dark"><?= esc($user['section']) ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="/logout" class="btn btn-danger btn-sm px-4">Se Déconnecter</a>
        </div>
    </div>
</div>


                <!-- /.container-fluid -->
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
    <!-- Page level plugins -->
    <script src="<?= base_url('vendor/chart.js/Chart.min.js') ?>"></script>
    <!-- Page level custom scripts -->
    <script src="<?= base_url('js/demo/chart-area-demo.js') ?>"></script>
    <script src="<?= base_url('js/demo/chart-pie-demo.js') ?>"></script>

    <!-- AJAX for dynamic content loading -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
                document.querySelectorAll('.load-content').forEach(function (link) {
                link.addEventListener('click', function (e) {
                    e.preventDefault();

                    // Remove active class from all links
                    document.querySelectorAll('.nav-item').forEach(function (item) {
                        item.classList.remove('active');
                    });

                    // Add active class to the clicked link
                    this.closest('.nav-item').classList.add('active');

                    // Get the URL from the data attribute
                    const url = this.getAttribute('data-url');

                    // Fetch the content
                    fetch(url)
                        .then(response => {
                            if (!response.ok) throw new Error('Network response was not ok');
                            return response.text();
                        })
                        .then(html => {
                            // Replace the content
                            document.getElementById('content').innerHTML = html;
                        })
                        .catch(error => {
                            console.error('Error fetching content:', error);
                            document.getElementById('content').innerHTML = '<div class="alert alert-danger">Failed to load content. Please try again.</div>';
                        });
                });
            });
        });

    </script>
</body>