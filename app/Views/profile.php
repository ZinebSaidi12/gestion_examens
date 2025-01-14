<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Profile</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <style>
        .card {
            margin-top: 2rem;
            padding: 2rem;
            border-radius: 0.5rem;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .profile-title {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .profile-subtitle {
            font-size: 1rem;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-body text-center">
                <img 
                    src="https://cdn-icons-png.flaticon.com/512/847/847969.png" 
                    class="rounded-circle mb-4" 
                    width="150" 
                    height="150" 
                />
                <h1 class="profile-title">Profile</h1>
                <h2 class="profile-subtitle text-muted"><?= esc($user['prenom'] . ' ' . $user['nom']) ?></h2>
            </div>
            <form action="/profile/update" method="post" id="profile-update-form">
                <?= csrf_field() ?>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nom">Last Name</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="nom" 
                            name="nom" 
                            value="<?= esc($user['nom']) ?>" 
                            placeholder="Enter your last name" 
                            required
                        />
                    </div>
                    <div class="form-group col-md-6">
                        <label for="prenom">First Name</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="prenom" 
                            name="prenom" 
                            value="<?= esc($user['prenom']) ?>" 
                            placeholder="Enter your first name" 
                            required
                        />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="date_of_birth">Date of Birth</label>
                        <input 
                            type="date" 
                            class="form-control" 
                            id="date_of_birth" 
                            name="date_of_birth" 
                            value="<?= esc($user['date_of_birth']) ?>" 
                            required
                        />
                    </div>
                    <div class="form-group col-md-6">
                        <label for="niveau">Level</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="niveau" 
                            name="niveau" 
                            value="<?= esc($user['niveau']) ?>" 
                            placeholder="Enter your level" 
                            required
                        />
                    </div>
                </div>
                <div class="form-group">
                    <label for="section">Section</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="section" 
                        name="section" 
                        value="<?= esc($user['section']) ?>" 
                        placeholder="Enter your section" 
                        required
                    />
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
