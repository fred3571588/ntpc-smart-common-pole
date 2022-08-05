<?php

namespace App\Http\Controllers\Z00_Other\_Function;

class convert
{
    public static function convert297($lata, $lona)
    {
        $coor97       = [6378137,6356752.31414,0.00669438,0.00673949675,250000,0];
        $clatlng      = [];

        $latr         = $lata*pi()/180;
        $lonr         = $lona*pi()/180;

        $T            = pow(tan($latr), 2);
        $C            = $coor97[3]*pow(cos($latr), 2);
        $A            = ($lonr-121*pi()/180)*cos($latr);
        $N            = $coor97[0]/sqrt(1-$coor97[2]*pow(sin($latr), 2));

        $G            = $coor97[0]*((1-$coor97[2]/4-3*$coor97[2]*$coor97[2]/64-5*$coor97[2]*$coor97[2]*$coor97[2]/256)*$latr-(3*$coor97[2]/8+3*$coor97[2]*$coor97[2]/32+45*$coor97[2]*$coor97[2]*$coor97[2]/1024)*sin(2*$latr)+(15*$coor97[2]*$coor97[2]/256+45*$coor97[2]*$coor97[2]*$coor97[2]/1024)*sin(4*$latr)-(35*$coor97[2]*$coor97[2]*$coor97[2]/3072)*sin(6*$latr));

        $Xr           = $coor97[4]+0.9999*$N*($A+(1-$T+$C)*$A*$A*$A/6+(5-18*$T+$T*$T+72*$C-58*$coor97[3])*pow($A, 5)/120);
        $Yr           = $coor97[5]+0.9999*($G+$N*tan($latr)*($A*$A/2+(5-$T+9*$C+4*$C*$C)*pow($A, 4)/24+(61-58*$T+$T*$T+600*$C-300*$coor97[3])*pow($A, 6)/720));


        $clatlng[0]   = $Xr;
        $clatlng[1]   = $Yr;
        //echo $coor97[2];

        //echo  $Yr.' ============';
        return $clatlng;
    }

    public static function convert2LatLng($X, $Y)
    {
        $coor97    = [6378137,6356752.31414,0.00669438,0.00673949675,250000,0];
        $m0        = 0.9999;
        $Y0        = 0;

        $latlng    = [];

        $e1        = (1-sqrt(1-$coor97[2]))/(1+sqrt(1-$coor97[2]));
        $miu       = ($Y-$Y0)/($coor97[0]*$m0*(1-$coor97[2]/4-3*$coor97[2]*$coor97[2]/64-5*$coor97[2]*$coor97[2]*$coor97[2]/256));
        $Lad1      = $miu+(3*$e1/2-27*pow($e1, 3)/32)*sin(2*$miu)+(21*$e1*$e1/16-55*pow($e1, 4)/32)*sin(4*$miu)+(151*pow($e1, 3)/96)*sin(6*$miu)+(1097*pow($e1, 4)/512)*sin($miu*8);
        $N1        = $coor97[0]/sqrt(1-$coor97[2]*pow(sin($Lad1), 2));
        $T1        = pow(tan($Lad1), 2);
        $C1        = $coor97[3]*pow(cos($Lad1), 2);
        $M1        = $coor97[0]*(1-$coor97[2])/pow((1-$coor97[2]*pow(sin($Lad1), 2)), 1.5);
        $D         = ($X-250000)/($N1*$m0);


        $latlng[0] = ($Lad1-($N1*tan($Lad1)/$M1)*($D*$D/2-(5+3*$T1+10*$C1-4*$C1*$C1-9*$coor97[3])*pow($D, 4)/24+(61+90*$T1+298*$C1+45*$T1*$T1-252*$coor97[3]-3*$C1*$C1)*pow($D, 6)/720))*180/pi();

        $latlng[1] = 121+($D-(1+2*$T1+$C1)*$D*$D*$D/6+(5-2*$C1+28*$T1-3*$C1*$C1+8*$coor97[3]+24*$T1*$T1)*pow($D, 5)/120)/cos($Lad1)*180/pi();

        return $latlng;
    }
}
