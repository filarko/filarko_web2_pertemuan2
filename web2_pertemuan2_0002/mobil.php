<?php
class Mobil_0002
{
    public $nama_0002;
    public $merk_0002;

    public function __construct($nama_0002, $merk_0002)
    {
        $this->nama_0002 = $nama_0002;
        $this->merk_0002 = $merk_0002;
    }

    public function tampilkanInfo_0002()
    {
        echo "Nama Mobil: <strong>$this->nama_0002</strong><br>";
        echo "Merk: <strong>$this->merk_0002</strong><br>";
    }
}

class MobilSport_0002 extends Mobil_0002
{
    public $kecepatan_0002;
    public $turbo_0002;

    public function __construct($nama_0002, $merk_0002, $kecepatan_0002, $turbo_0002)
    {
        parent::__construct($nama_0002, $merk_0002);
        $this->kecepatan_0002 = $kecepatan_0002;
        $this->turbo_0002 = $turbo_0002;
    }

    public function tampilkanInfo_0002()
    {
        parent::tampilkanInfo_0002();
        echo "Kecepatan: <strong>$this->kecepatan_0002 km/h</strong><br>";
        echo "Turbo: <strong>$this->turbo_0002</strong><br>";
    }
}

class CityCar_0002 extends Mobil_0002
{
    public $model_0002;
    public $irit_0002;
    public $sensor_0002;

    public function __construct($nama_0002, $merk_0002, $model_0002, $irit_0002, $sensor_0002)
    {
        parent::__construct($nama_0002, $merk_0002);
        $this->model_0002 = $model_0002;
        $this->irit_0002 = $irit_0002;
        $this->sensor_0002 = $sensor_0002;
    }

    public function tampilkanInfo_0002()
    {
        parent::tampilkanInfo_0002();
        echo "Model: <strong>$this->model_0002</strong><br>";
        echo "Irit Bahan Bakar: <strong>$this->irit_0002</strong><br>";
        echo "Sensor: <strong>$this->sensor_0002</strong><br>";
    }
}

$mobilSport_0002 = new MobilSport_0002("Bugatti", "002", 350, "Yes");
$mobilSport_0002->tampilkanInfo_0002();

echo "<br>";

$cityCar_0002 = new CityCar_0002("Honda", "Brio", "2023", "Sangat Irit", "Teratur");
$cityCar_0002->tampilkanInfo_0002();
