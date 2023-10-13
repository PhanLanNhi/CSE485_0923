<?php
require_once APP_ROOT . '/apps/services/PatientService.php';
class PatientController{
    public function index(){
        $PatientService = new PatientService();
        $allPatient = $PatientService->getAllPatient();
        require_once APP_ROOT . '/apps/views/Patient/index.php';
    }
    public function delete(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $PatientService = new PatientService();
            $delete = $PatientService->delete($id);
            if($delete){
                header ('location: ' . DOMAIN . '/public/index.php?controller=patient&action=index');
            }
            else{
                require_once APP_ROOT . '/apps/views/Patient/index.php';
            }
        }else{
            header ('location: ' . DOMAIN . '/public/index.php?controller=patient&action=index');
        }
    }
    public function addForm(){
        require_once APP_ROOT . '/apps/views/Patient/add.php';
    }
    public function add(){
        if(isset($_POST['namePatient']) && isset($_POST['day']) && isset($_POST['symptom']) && isset($_POST['idDoctor'])){
            $namePatient = $_POST['namePatient'];
            $day = $_POST['day'];
            $symptom = $_POST['symptom'];
            $idDoctor = $_POST['idDoctor'];
            $PatientService = new PatientService();
            $addPatient = $PatientService->addPatient($namePatient, $day, $symptom, $idDoctor);
            if($addPatient){
                header ('location: '. DOMAIN. '/public/index.php?controller=patient&action=index');
            }
        }else{
            $PatientService = new PatientService();
            $allPatient = $PatientService->getAllPatient();
            require_once APP_ROOT. '/apps/views/Patient/index.php';
        }
    }
    public function update()
    {
        if (isset($_POST["id"]) &&isset($_POST["namePatient"]) && isset($_POST["day"]) && isset($_POST["symptom"]) && isset($_POST["idDoctor"])) {
            $id = $_POST["id"];
            $namePatient = ($_POST["namePatient"]);
            $day = ($_POST["day"]);
            $symptom = ($_POST["symptom"]);
            $idDoctor = ($_POST["idDoctor"]);
            $PatientService = new PatientService();
            $patient = $PatientService->update($id, $namePatient, $day, $symptom, $idDoctor);
            if($patient==true)
            {
                header('Location: '. DOMAIN. '/public/index.php?controller=patient&action=index');
            }
        } else {
            require APP_ROOT . '/apps/services/DoctorService.php';
            $DoctorService = new DoctorService();
            $patient = $DoctorService->getAllDoctor();
            if (isset($_GET["id"])) {
                $id = $_GET["id"];
                $PatientService = new PatientService();
                $patient = $PatientService->getPatient($id);
                require APP_ROOT. '/apps/views/Patient/update.php';
            }
        }
    }
}

?>