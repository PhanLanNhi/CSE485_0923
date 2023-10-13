<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Patient</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12 d-flex justify-content-center">
        <div class="wrapped w-50 mt-5">
          <form method="post" action="<?= DOMAIN . '/public/index.php?controller=patient&action=update'?>">
            <div class="mb-3">
              <label for="id" class="form-label">ID</label>
              <input type="text" name="id" id="id" class="form-control" value="<?=$patient->getId()?>" >
            </div>
            <div class="mb-3">
              <label for="namePatient" class="form-label">Patient's name</label>
              <input type="text" name="namePatient" id="namePatient" class="form-control" value="<?=$patient->getNamePatient()?>">
            </div>
            <div class="mb-3">
              <label for="day" class="form-label">Day</label>
              <input type="date" name="day" id="day" class="form-control" value="<?=$patient->getDay()?>" >
            </div>
            <div class="mb-3">
              <label for="symptom" class="form-label">Symptom</label>
              <input type="text" name="symptom" id="symptom" class="form-control" value="<?=$patient->getSymptom()?>" >
            </div>
            <div class="mb-3">
              <label for="idDoctor" class="form-label">Id Doctor</label>
              <input type="text" name="idDoctor" id="idDoctor" class="form-control" value="<?=$patient->getIdDoctor()?>" >
            </div>
            <button class="btn btn-success">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>