<?php

    class Produkt
    {
        private $dane = array();

        public function __construct()
        {
            $this->dane = array('nazwa_produktu' => null,'producent' => null,'ilosc' => null);
        }

        public function dodajProdukt($nazwa_produktu, $producent ,$ilosc)
        {
            $this->dane = array('nazwa_produktu' => $nazwa_produktu,'producent' => $producent,'ilosc' => $ilosc);
        }

        public function pokazProdukt()
        {
            return print_r($this->dane);
        }

        //dodatkowe metody
        public function getValueByKey($key)
        {
            if($tmpArr = array_key_exists($key,$this->dane)){
                return $key . ': ' .  $this->dane[$key];
            }
            else
            {
                echo 'this key dont exist';
            }
        }

        public function updateValueByKey($key,$newValue)
        {
            $this->dane[$key] = $newValue;
        }

        public function customDisplayProduct() 
        {
            $tmp = null;
            while( list($key,$val) = each($this->dane))
            {
                $tmp .= "klucz: $key => wartosćć: $val  <br>";
            }
            return $tmp;
        }
    }

    $pordukty = new Produkt();
    $pordukty -> dodajProdukt('Drukarka','Epson',20);
    $pordukty -> pokazProdukt();
    echo '<br>';
    echo $pordukty  -> getValueByKey('producent');
    $pordukty -> updateValueByKey('ilosc','100');
    echo '<br>';
    $pordukty -> pokazProdukt();
    echo '<br>';
    echo $pordukty -> customDisplayProduct();
?>
