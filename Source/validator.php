<?php

class validator
{    


    public function separator($valiCpf)
    { 
        $num = str_split($valiCpf);
        $calc = $num;
        $calc2 = $this->calcOne($calc); 
        array_push($calc, $calc2);
        $calcTwo = $this->calcTwo($calc);
        array_push($calc, $calcTwo);
        $digVerific = $calc[9];
        $digVerificTwo = $calc[10];
        $result = [$digVerific,$digVerificTwo];
        $this->result = $result;
    }

    public function calcOne($calc)
    {
        $valueOne = ($calc[0]*10);
        $valueTwo = ($calc[1]*9);
        $valueThree = ($calc[2]*8);
        $valuefour = ($calc[3]*7);
        $valueFive = ($calc[4]*6);
        $valueSix = ($calc[5]*5);
        $valueSeven = ($calc[6]*4);
        $valueEight = ($calc[7]*3);
        $valueNine = ($calc[8]*2);   

        $valueFinal = ($valueOne+$valueTwo+$valueThree+$valuefour+$valueFive+$valueSix+$valueSeven+$valueEight+$valueNine);
        $div = fmod($valueFinal, 11);
        if($div < 2){
            $div = 0;
        }else $div = (11-$div);
        $resul = strval($div);
        return $resul;           
    }
    
    public function calcTwo($calcTwo)
    {
        $valueOne = ($calcTwo[0]*11);
        $valueTwo = ($calcTwo[1]*10);
        $valueThree = ($calcTwo[2]*9);
        $valuefour = ($calcTwo[3]*8);
        $valueFive = ($calcTwo[4]*7);
        $valueSix = ($calcTwo[5]*6);
        $valueSeven = ($calcTwo[6]*5);
        $valueEight = ($calcTwo[7]*4);
        $valueNine = ($calcTwo[8]*3); 
        $valueTen = ($calcTwo[9]*2);   

        $valueFinal = ($valueOne+$valueTwo+$valueThree+$valuefour+$valueFive+$valueSix+$valueSeven+$valueEight+$valueNine+$valueTen);
        $div = fmod($valueFinal, 11);
        if($div < 2){
            $div = 0;
        }else $div = (11 -$div);
        $resul = strval($div);
        return $resul;         
    }

}



