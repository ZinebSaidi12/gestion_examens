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