<?php
require_once APP_ROOT . '/apps/models/Patient.php';
require_once APP_ROOT . '/apps/lib/DBConnection.php';

class PatientService{
    public function getAllPatient(){
        $dbconn = new DBConnection();
        $conn = $dbconn->getConnection();
        $sql = "SELECT * FROM patient";
        if($conn!== null){
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            $allPatient = [];
            foreach($result as $each){
                $patient = new Patient($each[0], $each[1], $each[2], $each[3], $each[4]);
                $allPatient[] = $patient;
            }
            return $allPatient;
        }
    }
    public function delete($id){
        $dbconn = new DBConnection();
        $conn = $dbconn->getConnection();
        $sql = "DELETE FROM patient WHERE id = $id";
        if($conn!== null){
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            return true;
        }
        return false;
    }

    public function addPatient($namePatient, $day, $symptom, $idDoctor){
        $dbconn = new DBConnection();
        $conn = $dbconn->getConnection();
        $sql = "INSERT INTO patient (namePatient, day, symptom, idDoctor) VALUES ('$namePatient', '$day', '$symptom', $idDoctor)";
        if($conn!== null){
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            return true;
        }
        return false;
    }
    public function getPatient($id){
        $dbconn = new DBConnection();
        $conn = $dbconn->getConnection();
        $sql = "SELECT * FROM patient where id = '$id'";
        if($conn!= null){
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                $each = $stmt->fetch();
                $patient = new Patient($each['id'], $each['namePatient'], $each['day'], $each['symptom'], $each['idDoctor']);
            }
        }
        return $patient;
    
    }

    public function update($id, $namePatient, $day, $symptom, $idDoctor){
        $dbconn = new DBConnection();
        $conn = $dbconn->getConnection();
        if($conn!= null){
            $sql = "UPDATE patient SET namePatient = '$namePatient', day = '$day', symptom = '$symptom', idDoctor = '$idDoctor' WHERE id = '$id'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            return true;;
        }
        return false;
    }
}

?>