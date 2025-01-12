<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation des Notes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Consultation des Notes</h1>

        <table class="table table-striped table-bordered">
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
                            <td><?= $note['matiere'] ?></td>
                            <td><?= $note['date'] ?></td>
                            <td><?= $note['note'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3" class="text-center">Aucune note trouvée</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <div class="alert alert-info text-center mt-4" role="alert">
            <strong>Moyenne Générale :</strong> <?= number_format($moyenne_generale, 2) ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
