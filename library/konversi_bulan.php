<?php
function konversi_bulan($bulan){
    if($bulan==1){
        return"Januari";
    }else if($bulan==2){
        return"Februari";
    }else if($bulan==3){
        return"Maret";
    }else if($bulan==4){
        return"April";
    }else if($bulan==5){
        return"Mei";
    }else if($bulan==6){
        return"Juni";
    }else if($bulan==7){
        return"Juli";
    }else if($bulan==8){
        return"Agustus";
    }else if($bulan==9){
        return"Semptember";
    }else if($bulan==10){
        return"Oktober";
    }else if($bulan==11){
        return"November";
    }else if($bulan==12){
        return"Desember";
    }else{
        return"";
    }
}

?>