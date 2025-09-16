<footer>
    <p>Ali Lekhal Hanifi</p>

    <?php
     $dias = date("d");
     $dias_num = date("N");
     $mes = date("m");
     $año = date("Y");


     switch ($dias_num) {
            case 1:
                $dias_semana = "Lunes";
                break;
            case 2:
                $dias_semana = "Martes";
                break;
            case 3:
                $dias_semana = "Miércoles";
                break;
            case 4:
                $dias_semana = "Jueves";
                break;
            case 5:
                $dias_semana = "Viernes";
                break;
            case 6:
                $dias_semana = "Sábado";
                break;
            case 7:
                $dias_semana = "Domingo";
                break;
    }

    switch ($mes){
        case 1: $mes_es= "Enero";
            break;
        case 2: $mes_es= "Febrero";
            break;
        case 3: $mes_es= "Marzo";
            break;
        case 4: $mes_es= "Abril";
            break;
        case 5: $mes_es= "Mayo";
            break;
        case 6: $mes_es= "Junio";
            break;
        case 7: $mes_es= "Julio";
            break;
        case 8: $mes_es= "Agosto";
            break;
        case 9: $mes_es= "Septiembre";
            break;
        case 10: $mes_es= "Octubre";
            break;
        case 11: $mes_es= "Nomviembre";
            break;
        case 12: $mes_es= "Diciembre";
            break;

    }

    
    echo $dias_semana . ", " . $dias . " de " . $mes_es . " de " . $año;

  ?>
</footer>