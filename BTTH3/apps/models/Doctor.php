<?php
class Doctor{
    private $id;
    private $nameDoctor;
    private $specialist;
    public function __construct($id, $nameDoctor, $specialist){
        $this->id = $id;
        $this->nameDoctor = $nameDoctor;
        $this->specialist = $specialist;
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
	public function getNameDoctor() {
		return $this->nameDoctor;
	}
	
	/**
	 * @param mixed $nameDoctor 
	 * @return self
	 */
	public function setNameDoctor($nameDoctor): self {
		$this->nameDoctor = $nameDoctor;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getSpecialist() {
		return $this->specialist;
	}
	
	/**
	 * @param mixed $specialist 
	 * @return self
	 */
	public function setSpecialist($specialist): self {
		$this->specialist = $specialist;
		return $this;
	}
}

?>