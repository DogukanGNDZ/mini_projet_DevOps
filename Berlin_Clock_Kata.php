<?php

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



