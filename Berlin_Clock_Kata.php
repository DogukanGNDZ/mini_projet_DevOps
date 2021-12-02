<?php
class Berlin_Clock_Kata
{


    public function minute($min): string
    {
        if ($min % 5 == 0) {
            return $ligne5 = "OOOO";
        } else if ($min % 5 == 1) {
            return $ligne5 = "YOOO";
        } else if ($min % 5 == 2) {
            return $ligne5 = "YYOO";
        } else if ($min % 5 == 3) {
            return $ligne5 = "YYYO";
        } else {
            return $ligne5 = "YYYY";
        }
    }

    public function minute5($min): string
    {
        return $this->extracted($min);
    }

    public function Blocde1HeureCLock($heure): string
    {
        if ($heure % 5 == 0) {
            return $ligne3 = "OOOO";
        } else if ($heure % 5 == 1) {
            return $ligne3 = "ROOO";
        } else if ($heure % 5 == 2) {
            return $ligne3 = "RROO";
        } else if ($heure % 5 == 3) {
            return $ligne3 = "RRRO";
        } else {
            return $ligne3 = "RRRR";
        }
    }

    public function Blocde5HeureCLock($heure): string
    {
        return $this->extracted1($heure);
    }
    public function BlocdeSecondeCLock($seconde): string
    {
        if ($seconde % 2 == 0) {
            return $ligne1 = "R";
        }
        else{
                return $ligne1 = "O";
            }
        }

     public function BerlinClockInitialization($heure,$minute,$seconde):String {
         return $this->BlocdeSecondeCLock($seconde) . $this->Blocde5HeureCLock($heure) . $this->Blocde1HeureCLock($heure) . $this->minute5($minute) . $this->minute($minute);
     }

    /**
     * @param $min
     * @return string
     */
    public function extracted($min): string
    {
        if (floor($min / 5) == 11) {
            return $ligne4 = "YYRYYRYYRYY";
        } else if (floor($min / 5) == 10) {
            return $ligne4 = "YYRYYRYYRYO";
        } else if (floor($min / 5) == 9) {
            return $ligne4 = "YYRYYRYYROO";
        } else if (floor($min / 5) == 8) {
            return $ligne4 = "YYRYYRYYOOO";
        } else if (floor($min / 5) == 7) {
            return $ligne4 = "YYRYYRYOOOO";
        } else if (floor($min / 5) == 6) {
            return $ligne4 = "YYRYYROOOOO";
        } else if (floor($min / 5) == 5) {
            return $ligne4 = "YYRYYOOOOOO";
        } else if (floor($min / 5) == 4) {
            return $ligne4 = "YYRYOOOOOOO";
        } else if (floor($min / 5) == 3) {
            return $ligne4 = "YYROOOOOOOO";
        } else if (floor($min / 5) == 2) {
            return $ligne4 = "YY0OOOOOOOO";
        } else if (floor($min / 5) == 1) {
            return $ligne4 = "YOOOOOOOOOO";
        } else {
            return $ligne4 = "OOOOOOOOOOO";
        }
    }

    /**
     * @param $heure
     * @return string
     */
    public function extracted1($heure): string
    {
        if (floor($heure / 5) == 0) {
            return $ligne3 = "OOOO";
        } else if (floor($heure / 5) == 1) {
            return $ligne3 = "ROOO";
        } else if (floor($heure / 5) == 2) {
            return $ligne3 = "RROO";
        } else if (floor($heure / 5) == 3) {
            return $ligne3 = "RRRO";
        } else {
            return $ligne3 = "RRRR";
        }
    }

}

