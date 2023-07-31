<?php

class Furniture {
    // Properties dengan 3 access modifier
    protected $material; 
    public $color;       
    private $size;       

    // Constructor
    public function __construct($material, $color, $size) {
        $this->material = $material;
        $this->color = $color;
        $this->size = $size;
    }   
 
    // Destructor
    public function __destruct() {
        echo "Furniture berbahan: {$this->material}, berwarna: {$this->color}, ukuran: {$this->size} cm, telah dibuat.<br>";
    }

    // Setter
    public function setMaterial($material) {
        $this->material = $material;
    }

    // Getter
    public function getMaterial() {
        return $this->material;
    }
}

class Table extends Furniture {

    protected $material; 
    public $color;       
    private $size;       

    // Polymorphism: Override method dari parent class
    public function __construct($material, $color, $size) {
        $this->size = $size;
        parent::__construct($material, $color, $size);
    }

    // Polymorphism: Override method dari parent class
    public function __destruct() {
        echo "Meja berbahan: {$this->material}, berwarna: {$this->color}, ukuran: {$this->size} cm, telah dijual.<br>";
    }

}

// Instansiasi objek dari class Table
$meja = new Table('Kayu', 'Coklat', 110);

// Setters digunakan untuk mengatur nilai property
$meja->setMaterial('Besi');
$meja->color = 'Abu-abu'; 

// Getters digunakan untuk mendapatkan nilai property
echo "Bahan meja: {$meja->getMaterial()}<br>";
echo "Warna meja: {$meja->color}<br>";

echo "<br>";

// Instansiansi objek dari class Furniture
$lemari = new Furniture('lemari','kuning','200');

//Setters
$lemari->setMaterial('Plastik');
$lemari->color = 'Putih';

//Getters
echo "Bahan Furniture: {$lemari->getMaterial()}<br>";
echo "Warna Furniture: {$lemari->color}<br>";
echo '<br>';



?>
