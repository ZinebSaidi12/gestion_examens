<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <!-- Custom styles for this template-->
    <link href="<?= base_url('css/sb-admin-2.min.css') ?>" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="javascript:void(0)" data-url="<?= base_url('/dash') ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">DASHBOARD</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Dashboard Link -->
            <li class="nav-item active">
                <a class="nav-link load-content" href="javascript:void(0)" data-url="<?= base_url('/dashboard_content') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Result Consultation Link -->
            <li class="nav-item">
                <a class="nav-link load-content" href="javascript:void(0)" data-url="<?= base_url('/notes') ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Notes consultation</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Profile Link -->
            <li class="nav-item">
                <a class="nav-link load-content" href="javascript:void(0)" data-url="<?= base_url('/profile') ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Profile</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
        </ul>
        <!-- End of Sidebar -->

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
                                <!-- Info Card -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Info Personnels</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="card mx-auto" style="max-width: 600px;">
                                            <div class="card-body">
                                                <h5 class="card-title">Student Profile</h5>
                                                <p><strong>Name:</strong> <?= esc($user['prenom']) ?> <?= esc($user['nom']) ?></p>
                                                <p><strong>Date of Birth:</strong> <?= esc($user['date_of_birth']) ?></p>
                                                <p><strong>Level:</strong> <?= esc($user['niveau']) ?></p>
                                                <p><strong>Section:</strong> <?= esc($user['section']) ?></p>
                                            </div>
                                        </div>
                                        <div class="text-center mt-4">
                                            <a href="/logout" class="btn btn-danger">Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
</html>
