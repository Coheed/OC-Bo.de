<?
$margintop = "";
$pageid = $GLOBALS['oc']['pageid'] ;
switch ($pageid = $this->replaceInsertTags('{{page::id}}')) {
    case (5): //startseite
        $s_title = "Herzlich Willkommen<br>in unserer Fachpraxis für<br>zahnärztliche Chirurgie und Implantologie.";
        $s_text = "Lernen Sie im Folgenden unsere Arbeit kennen.<br>Und natürlich die Menschen, die hinter dieser Arbeit stehen.<br>Wir sind jederzeit ansprechbar für Sie:";
        break;
    case (6): //philosophie
        $s_title = "„Gesundheit ist ein hohes Gut, aber sie ist keine Ware.” ";
        $s_text = "Altbundespräsident Johannes Rau";
        $margintop = "15";
        break;
    case (7): //Praxis
        $s_title = "Mitten in Bochum und gut zu erreichen";
        $s_text = "";
        $margintop = "0";
        break;
    case (8): //Praxis
        $s_title = "Wen Sie alles bei uns treffen";
        $s_text = "";
        break;
    case (11): //Kontakt
        $s_title = "Fragen? Wir antworten gerne!";
        $s_text = "";
        break;
    case (18): //Behandlung
        $s_title = "Fachliche Kompetenz für Ihre Gesundheit";
        $s_text = "";
        $margintop = "0";
        break;
    case (19): //mitarbeiter
        $s_title = "Unsere Mitarbeiterinnen";
        $s_text = "";
        $margintop = "0";
        break;
    case (20): //praxis
        $s_title = "Gesundheit und Ästhetik im Fokus";
        $s_text = "";
        break;
    case (21): //Behandlung
        $s_title = "Die gesamte zahnärztliche Chirurgie und mehr";
        $s_text = "";
        break;
    case (23): //3d computerplanung
        $s_title = "Was wir für Sie tun können -<br>die Leistungen unserer Praxis";
        $s_text = "Die folgende Liste gibt Ihnen einen Überblick über die Leistungen unserer Praxis -<br>wir haben hier aber nur die wichtigsten Leistungspunkte aufgezählt:";
        break;
    case (24): /* implantologie*/
        $s_title = "Unsere Praxis:<br>Mitten in Bochum und gut zu erreichen";
        $s_text = "";
        break;
    case (29): //Praxis
        $s_title = "Unsere Praxis:<br>Mitten in Bochum und gut zu erreichen";
        $s_text = "";
        break;
    case (30): //leistungen im überblick
        $s_title = "Was wir für Sie tun können -<br>die Leistungen unserer Praxis";
        $s_text = "";
        break;
    case (53): //leistungen im überblick
        $s_title = "Damit Sie sicher sein können";
        $s_text = "";
        break;
    case (16): /* Patientenappartment*/
        $s_title = "";
        $s_text = "";
        break;
    case (25): /* funktionsdiagnostik*/
        $s_title = "";
        $s_text = "";
        break;
    case (22): /* diagnostik* ?? */
        $s_title = "Was wir für Sie tun können -<br>die Leistungen unserer Praxis";
        $s_text = "Die folgende Liste gibt Ihnen einen Überblick über die Leistungen unserer Praxis -<br>wir haben hier aber nur die wichtigsten Leistungspunkte aufgezählt:";
        break;
    case (31): /* diagnostik* ?? */
        $s_title = "Was wir für Sie tun können -<br>die Leistungen unserer Praxis";
        $s_text = "Die folgende Liste gibt Ihnen einen Überblick über die Leistungen unserer Praxis -<br>wir haben hier aber nur die wichtigsten Leistungspunkte aufgezählt:";
        break;
    case (12): /* narkose*/
        $s_title = "„Gesundheit ist ein hohes Gut, aber sie ist keine Ware.” ";
        $s_text = "Altbundespräsident Johannes Rau";
        $margintop = "200";
        break;
    case (39):
        $s_title = "Dr. Stefan König";
        $s_text = "";
        break;
    case (44):
        $s_title = "Susanne Grüttner";
        $s_text = "";
        break;
    case (45):
        $s_title = "Dr. Sebastian Koch";
        $s_text = "";
        break;
    case (54):
        $s_title = "Stellenangebote";
        $s_text = "";
        break;
    case (55):
        $s_title = "Partner";
        $s_text = "";
        break;
    default:
        $s_title = "„Gesundheit ist ein hohes Gut, aber sie ist keine Ware.” ";
        $s_text = "Altbundespräsident Johannes Rau";
        $margintop = "50";
        break;
}
?>
<div id="SubHeader">
    <div class="s_input">
    </div>
    <? echo "<div style='padding:0 16.4% 0;'><div style='margin-top:24px;'>". $this->replaceInsertTags('{{insert_module::39}}')."</div></div>" ?>
    <p class="s_title">
        <? echo $s_title; ?>
    </p>
    <p class="s_text">
        <? echo $s_text; ?>
    <div style="clear:both;"></div>
</div>
<? echo "<div style='padding:0 16.4% 0;'><div style='margin-top:".$margintop."px'>". $this->replaceInsertTags('{{insert_module::19}}')."</div></div>" ?>






















