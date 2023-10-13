<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor management system</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <?php  include APP_ROOT . '/public/layout/header.php'; ?>
        <h3 class = "text-center text-uppercase text-success my-4">Doctor management</h3>
        <a href="<?= DOMAIN . '/public/index.php?controller=doctor&action=addForm'?>" class="btn btn-success my-2">Add Doctor</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Doctor's name</th>
                    <th scope="col">Specialist</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($allDoctor as $each): ?>
                    <tr>
                        <th scope="row"><?=$each->getId(); ?></th>
                        <td ><?=$each->getNameDoctor(); ?></td>
                        <td ><?=$each->getSpecialist(); ?></td>
                        <td>
                            <a href="<?= DOMAIN . '/public/index.php?controller=doctor&action=updateForm&id='.$each->getID() ?>"><i class="bi bi-pencil-square"></i></a>
                        </td>
                        <td>
                        <a href="" data-bs-toggle="modal" data-bs-target="#Modal<?= $each->getId(); ?>"><i class="bi bi-trash-fill"></i></a>
                        </td>
                        <!-- Modal -->
                        <div class="modal" tabindex="-1" id="Modal<?= $each->getId()?>" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Doctor</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                Do you want to delete the doctor whose code is: <?= $each->getId() ?>?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <a  href="<?= DOMAIN . '/public/index.php?controller=doctor&action=delete&id='.$each->getId() ?>" class="btn btn-primary">Delete</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                 <?php endforeach;?>         
                </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>