<?php
class Patient{
    private $id;
    private $namePatient;
    private $day;
    private $symptom;
    private $idDoctor;
    public function __construct($id, $namePatient, $day, $symptom, $idDoctor){
        $this->id = $id;
        $this->namePatient = $namePatient;
        $this->day = $day;
        $this->symptom = $symptom;
        $this->idDoctor = $idDoctor;
    }

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * @param mixed $id 
	 * @return self
	 */
	public function setId($id): self {
		$this->id = $id;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getNamePatient() {
		return $this->namePatient;
	}
	
	/**
	 * @param mixed $namePatient 
	 * @return self
	 */
	public function setNamePatient($namePatient): self {
		$this->namePatient = $namePatient;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getDay() {
		return $this->day;
	}
	
	/**
	 * @param mixed $day 
	 * @return self
	 */
	public function setDay($day): self {
		$this->day = $day;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getSymptom() {
		return $this->symptom;
	}
	
	/**
	 * @param mixed $symptom 
	 * @return self
	 */
	public function setSymptom($symptom): self {
		$this->symptom = $symptom;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getIdDoctor() {
		return $this->idDoctor;
	}
	
	/**
	 * @param mixed $idDoctor 
	 * @return self
	 */
	public function setIdDoctor($idDoctor): self {
		$this->idDoctor = $idDoctor;
		return $this;
	}
}

?>