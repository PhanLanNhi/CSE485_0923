<?php
require_once APP_ROOT . '/apps/services/DoctorService.php';
class DoctorController{
    public function index(){
        $DoctorService = new DoctorService();
        $allDoctor = $DoctorService->getAllDoctor();
        require APP_ROOT. '/apps/views/Doctor/index.php';
    }

    public function delete(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $DoctorService = new DoctorService();
            $delete = $DoctorService->delete($id);
            if($delete){
                header('Location: '. DOMAIN. '/public/index.php?controller=doctor&action=index');
            }else{
                require APP_ROOT . '/apps/views/Doctor/index.php';
            }
        }else{
            header('Location: '. DOMAIN. '/public/index.php?controller=doctor&action=index');
        }
    }

    public function addForm(){
        require APP_ROOT . '/apps/views/Doctor/add.php';
    }

    public function add(){
        if(isset($_POST['nameDoctor']) && isset($_POST['specialist'])){
            $nameDoctor= $_POST['nameDoctor'];
            $specialist = $_POST['specialist'];
            $DoctorService = new DoctorService();
            $addDoctor = $DoctorService->addDoctor($nameDoctor, $specialist);
            if($addDoctor){
                header('Location: '. DOMAIN. '/public/index.php?controller=doctor&action=index');
            }else{
                $DoctorService = new DoctorService();
                $allDoctor = $DoctorService->getAllDoctor();
                require APP_ROOT . '/apps/views/Doctor/index.php';
            }
        }
    }
    public function updateForm(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $DoctorService = new DoctorService();
            $doctor = $DoctorService->getDoctor($id);
            require APP_ROOT. '/apps/views/Doctor/update.php';  

        }
    }

    public function update(){
        if(isset($_POST['id']) && isset($_POST['nameDoctor']) && isset($_POST['specialist']) ){
            $id = $_POST['id'];
            $nameDoctor = $_POST['nameDoctor'];
            $specialist = $_POST['specialist'];
            $DoctorService = new DoctorService();
            $doctor = $DoctorService->updateDoctor($id, $nameDoctor, $specialist);
            if($doctor){
                header('Location: '. DOMAIN. '/public/index.php?controller=doctor&action=index');
            }else{
                header('Location: '. DOMAIN. '/public/index.php?controller=doctor&action=index');
            }
        }
    }
}
?>