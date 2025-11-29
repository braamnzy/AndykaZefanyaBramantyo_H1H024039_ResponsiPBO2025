<?php
// Squirtle.php by Zefanya
abstract class Pokemon
{
    protected $nama;
    protected $tipe;
    protected $level;
    protected $HP;
    protected $special;
    protected $strength = 0;
    protected $speed = 0;
    protected $durability = 0;
    protected $image;

    abstract public function Informasi();
    abstract public function specialMove();
}

class Squirtle extends Pokemon {

    public function __construct()
    {
        $this->nama = 'Squirtle';
        $this->tipe = 'Water';
        $this->level = 1;
        $this->HP = 20;
        $this->special = 'Strong Wave';
        $this->image = "https://id.portal-pokemon.com/play/resources/pokedex/img/pm/5794f0251b1180998d72d1f8568239620ff5279c.png";
    }

    public function Informasi(){
        echo "Nama: $this->nama<br>";
        echo "Tipe: $this->tipe<br>";
        echo "Level: $this->level<br>";
        echo "HP: $this->HP<br>";
        echo "Special Move: $this->special<br>";
    }

    public function specialMove(){
        return "{$this->nama} memiliki kemampuan {$this->special}!";
    }

    public function getStrength() {
        return $this->strength;
    }

    public function getSpeed() {
        return $this->speed;
    }

    public function getDurability() {
        return $this->durability;
    }

    public function getImage() {
        return $this->image;
    }


    public function pelatihan($jenis, $intensitas){
        $beforeLevel = $this->level;
        $beforeHP = $this->HP;

        switch(strtolower($jenis)){
            case 'strength':
                $this->strength = $this->strength + ($intensitas/100) * 1000;

                if ($intensitas >= 50) {
                    $this->level = $this->level + 2;
                } else {
                    $this->level = $this->level + 1;
                }

                $this->HP += ($intensitas / 100) * 200;
                break;

            case 'speed':
                $this->speed = $this->speed + ($intensitas/100) * 500;

                if ($intensitas >= 50) {
                    $this->level = $this->level + 2;
                } else {
                    $this->level = $this->level + 1;
                }

                $this->HP += ($intensitas / 100) * 200;
                break;

            case 'durability':
                $this->durability = $this->durability + ($intensitas/100) * 2000;

                if ($intensitas >= 50) {
                    $this->level = $this->level + 2;
                } else {
                    $this->level = $this->level + 1;
                }

                $this->HP += ($intensitas / 100) * 400;
                break;

            default:
                return "Jenis latihan tidak valid!";
        }

        date_default_timezone_set('Asia/Jakarta');

        return [
            "jenis" => $jenis,
            "intensitas" => $intensitas,
            "before" => [
                "level" => $beforeLevel,
                "HP" => $beforeHP
            ],
            "after" => [
                "level" => $this->level,
                "HP" => $this->HP
            ],
            "specialMove" => $this->specialMove(),
            "waktu" => date('Y-m-d H:i:s')
        ];
    }
}



class Chalizard extends Pokemon {
    public function __construct()
    {
        $this->nama = 'Chalizard';
        $this->tipe = 'Fire';
        $this->level = 2;
        $this->HP = 40;
        $this->special = 'Fireball';
        $this->image = "https://id.portal-pokemon.com/play/resources/pokedex/img/pm/2fd12098f15628cce80d411e090189aeb7d758ff.png";
    }

    public function Informasi(){
        echo "Nama: $this->nama<br>";
        echo "Tipe: $this->tipe<br>";
        echo "Level: $this->level<br>";
        echo "HP: $this->HP<br>";
        echo "Special Move: $this->special<br>";
    }

    public function specialMove(){
        return "{$this->nama} memiliki kemampuan {$this->special}!";
    }

    public function getStrength() {
        return $this->strength;
    }

    public function getSpeed() {
        return $this->speed;
    }

    public function getDurability() {
        return $this->durability;
    }

    public function getImage() {
        return $this->image;
    }

    public function pelatihan($jenis, $intensitas){
        $beforeLevel = $this->level;
        $beforeHP = $this->HP;

        switch(strtolower($jenis)){
            case 'strength':
                $this->strength = $this->strength + ($intensitas/100) * 2000;

                if ($intensitas >= 50) {
                    $this->level = $this->level + 2;
                } else {
                    $this->level = $this->level + 1;
                }

                $this->HP += ($intensitas / 100) * 200;
                break;

            case 'speed':
                $this->speed = $this->speed + ($intensitas/100) * 1000;

                if ($intensitas >= 50) {
                    $this->level = $this->level + 2;
                } else {
                    $this->level = $this->level + 1;
                }

                $this->HP += ($intensitas / 100) * 200;
                break;

            case 'durability':
                $this->durability = $this->durability + ($intensitas/100) * 500;

                if ($intensitas >= 50) {
                    $this->level = $this->level + 2;
                } else {
                    $this->level = $this->level + 1;
                }

                $this->HP += ($intensitas / 100) * 400;
                break;

            default:
                return "Jenis latihan tidak valid!";
        }

        return [
            "jenis" => $jenis,
            "intensitas" => $intensitas,
            "before" => [
                "level" => $beforeLevel,
                "HP" => $beforeHP
            ],
            "after" => [
                "level" => $this->level,
                "HP" => $this->HP
            ],
            "specialMove" => $this->specialMove(),
            "waktu" => date('Y-m-d H:i:s')
        ];
    }
}

?>