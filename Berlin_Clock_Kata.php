<?php
require_once ("refactoredMethod.php");
class Berlin_Clock_Kata
{


    private refactoredMethod $refactoredMethod;

    public function __construct()
    {
        $this->refactoredMethod = new refactoredMethod();
    }

    public function minute($min): string
    {
        return $this->extracted3($min);
    }

    public function minute5($min): string
    {
        return $this->extracted($min);
    }

    public function Blocde1HeureCLock($heure): string
    {
        return $this->extracted2($heure);
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
        return $this->refactoredMethod->extracted($min);
    }

    /**
     * @param $heure
     * @return string
     */
    public function extracted1($heure): string
    {
        return $this->refactoredMethod->extracted1($heure);
    }

    /**
     * @param $heure
     * @return string
     */
    public function extracted2($heure): string
    {
        return $this->refactoredMethod->extracted2($heure);
    }

    /**
     * @param $min
     * @return string
     */
    public function extracted3($min): string
    {
        return $this->refactoredMethod->extracted3($min);
    }

}

