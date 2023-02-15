<?php

class mahasiswa
{
	//properti
	private $nim = 0;
	private $nama = 0;
  private $program_studi = 0;
  private $fakultas = 0;

    
	public function __construct($nim = 0, $nama = 0, $program_studi = 0, $fakultas = 0){
		$this->nim = $nim;
		$this->nama = $nama;
		$this->program_studi = $program_studi;
		$this->fakultas = $fakultas;
	}

	public function setNim($nim){
		$this->nim = $nim;
	}

	public function getNim(){
		return $this->nim;
	}

    public function setNama($nama){
		$this->nama = $nama;
	}

	public function getNama(){
		return $this->nama;
	}

    public function setPs($program_studi){
		$this->program_studi = $program_studi;
	}

	public function getPs(){
		return $this->program_studi;
	}

	public function setFakultas($fakultas){
		$this->fakultas = $fakultas;
	}

	public function getFakultas(){
		return $this->fakultas;
	}
	
	#fungsi untuk menampilkan data mahasiswa 
	#menggunakan get
	function display1(){
		echo "Nim : ", $this->nim ."<br>";
		echo "Nama : ", $this->nama ."<br>";
		echo "Program Studi : ", $this->program_studi ."<br>";
		echo "Fakultas : ", $this->fakultas ."<br><br>";
	}

	#menggunakan set
	function display2(){
	$mahasiswa3 = new mahasiswa(2001299, "Naila Pratiwi", "Kimia", "FPMIPA");
		echo "Nim : ", $mahasiswa3->getNim() ."<br>";
		echo "Nama : ", $mahasiswa3->getNama() ."<br>";
		echo "Program Studi : ", $mahasiswa3->getPs() ."<br>";
		echo "Fakultas : ", $mahasiswa3->getFakultas() ."<br><br>";	
	}
}
?>