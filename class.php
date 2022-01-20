<html>
    <title>CLASS</title>
<?php
class mobiles{
    public $brand;
    public $ram;
    public $storage;
    public $price;
    function setBrand($par){
        $this->brand=$par;
    }
    function getBrand(){
        return $this->brand;
    }
    function setRam($par){
        $this->ram=$par;
    }
    function getRam(){
        return $this->ram;
    }
    function setStorage($par){
        $this->storage=$par;
    }
    function getStorage(){
        return $this->storage;
    }
    function setPrice($par){
        $this->price=$par;
    }
    function getPrice(){
        return $this->price;
    }
}
$note_7=new mobiles();
$note_7->setBrand('mi');
$note_7->setRam('4gb');
$note_7->setStorage('64gb');
$note_7->setPrice('14,999/-');
echo "Brand: ". $note_7->getBrand();
echo '<br>';
echo "Ram: ". $note_7->getRam();
echo '<br>';
echo "Internal Storage: ". $note_7->getStorage();
echo '<br>';
echo "Price: ". $note_7->getPrice();
echo '<br><br>';
$oneplus_7t=new mobiles();
$oneplus_7t->setBrand('oneplus');
$oneplus_7t->setRam('8gb');
$oneplus_7t->setStorage('256gb');
$oneplus_7t->setPrice('27,999/-');
echo "Brand: ". $oneplus_7t->getBrand();
echo '<br>';
echo "Ram: ". $oneplus_7t->getRam();
echo '<br>';
echo "Internal Storage: ". $oneplus_7t->getStorage();
echo '<br>';
echo "Price: ". $oneplus_7t->getPrice();
?>
</html>