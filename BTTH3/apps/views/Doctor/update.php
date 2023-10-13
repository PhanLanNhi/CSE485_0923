<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Doctor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12 d-flex justify-content-center">
        <div class="wrapped w-50 mt-5">
          <form method="post" action="<?= DOMAIN . '/public/index.php?controller=doctor&action=update'?>">
            <div class="mb-3">
              <label for="id" class="form-label">ID</label>
              <input type="text" name="id" id="id" class="form-control" value="<?=$doctor->getId()?>" >
            </div>
            <div class="mb-3">
              <label for="nameDoctor" class="form-label">Doctor's name</label>
              <input type="text" name="nameDoctor" id="nameDoctor" class="form-control" value="<?=$doctor->getNameDoctor()?>">
            </div>
            <div class="mb-3">
              <label for="specialist" class="form-label">Specialist</label>
              <input type="text" name="specialist" id="specialist" class="form-control" value="<?=$doctor->getSpecialist()?>" >
            </div>
            <button class="btn btn-success">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>