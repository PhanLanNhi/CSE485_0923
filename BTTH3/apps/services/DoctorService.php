<?php

require_once APP_ROOT . '/apps/models/Doctor.php';
require_once APP_ROOT . '/apps/lib/DBConnection.php';
class DoctorService{
    public function getAllDoctor(){
        $dbconn = new DBConnection();
        $conn = $dbconn->getConnection();
        $sql = "SELECT * FROM doctor";
        if($conn !== null){
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            $allDoctor = [];
            foreach($result as $each){
                $doctor = new Doctor($each[0], $each[1], $each[2]);
                $allDoctor[] = $doctor;
            }
            return $allDoctor;
        }
    }
    public function delete($id){
        $dbconn = new DBConnection();
        $conn = $dbconn->getConnection();
        $sql = "DELETE FROM doctor where id = '$id'";
        if($conn != null){
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            return true;
        }
        return false; 
    }

    public function addDoctor($nameDoctor, $specialist){
        $dbconn = new DBConnection();
        $conn = $dbconn->getConnection();
        if($conn != null){
            $sql = "INSERT INTO doctor(nameDoctor, specialist)
            VALUES ('$nameDoctor', '$specialist')";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            return true;
        }
        return false;
    }
    public function getDoctor($id){
        $dbconn = new DBConnection();
        $conn = $dbconn->getConnection();
        $sql = "SELECT * FROM doctor WHERE id = '$id'";
        if($conn!== null){
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                $each = $stmt->fetch();
                $doctor = new Doctor($each[0], $each[1], $each[2]);
            }
            return $doctor;
        }
    }
    public function updateDoctor($id, $nameDoctor, $specialist){
        $dbconn = new DBConnection();
        $conn = $dbconn->getConnection();
        if($conn!== null){
            $sql = "UPDATE doctor SET nameDoctor = '$nameDoctor', specialist = '$specialist' WHERE  id = '$id'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            return true;
        }
        return false;
    }
}
?>