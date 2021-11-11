<?php
class kelas {
	public $a;
	public function __construct(){
		echo "ini data kelas"."<br>";
	}
    public function jumlah(){
    $anggota = [
        	[
            	"nama" => "padil",
                "kelas" => "A"
            ],
            [
            	"nama" => "rizky",
                "kelas" => "B"
            ],
            [
            	"nama" => "yahya",
                "kelas" => "C"
            ],
            [
            	"nama" => "rizky",
                "kelas" => "B"
            ],
            [
            	"nama" => "hoqi",
                "kelas" => "B"
            ]
        ];
    	foreach($anggota as $anggota){
        	if($anggota['kelas'] == $this->a)
        		echo $anggota['nama']."<br>";
        	}
        }
    public function __destruct(){
    	echo "ini data kelas ".$this->a;
    }    	
    
}

$kelas = new kelas;
$kelas->a = "A";
$kelas->jumlah();




?>
