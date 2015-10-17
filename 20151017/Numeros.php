<?php
class Numeros
{


    public function divisivel($numero)
    {
        if (is_int($numero))
            return $numero % 5 == 0 || $numero % 3 == 0;
            return false;
    }

    public function getDivisiveis($intervalo)
    {
        $divisiveis = array();

        for ($i=1; $i < $intervalo; $i++) {
            if($this->divisivel($i)){
                $divisiveis[] = $i;
            }

        }

        return $divisiveis;
    }

    public function somaValoresIntervalo($numMax){
        $divisiveis = $this->getDivisiveis($numMax);
        $soma = 0;
        foreach($divisiveis as $value){
            $soma += $value;
        }
        return $soma;
    }
}
