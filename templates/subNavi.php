<?php
 $margintop = "<style type='text/css'>#SubHeader {margin-top: 53px;}</style>";
$pagename = $this->replaceInsertTags('{{page::title}}');
switch ($pagename) {
    case ('Startseite'):
        echo "<style type='text/css'>#SubHeader {margin-top:50px;}</style>";
        break;
    case ('Philosophie'):
        echo "<style type='text/css'>#SubHeader {margin-top:50px;}</style>";
        break;
    case ('Praxis'):
        echo "<div id='subNavi'>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::16}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::17}}')."</div>";
        echo "</div>";
        echo $margintop;
        break;
    case ('Patienten-Appartement'):
        echo "<div id='subNavi'>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::16}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::17}}')."</div>";
        echo "</div>";
        echo $margintop;
        break;
    case ('Partner'): // todo Gleiches Menü wie Ärzteteam !!!
        echo $margintop;
        break;
    case ('Rundgang'):
        echo "<div id='subNavi'>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::16}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::17}}')."</div>";
        echo "</div>";
        echo $margintop;
        break;
    case ('Hygiene'):
        echo "<div id='subNavi'>";

        echo "</div>";
        echo $margintop;
        break;
    case ('Menschen'):
        echo "<div id='subNavi'>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::20}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::19}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::18}}')."</div>";
        echo "</div>";
        echo $margintop;
        break;
    case ('Claudia König'):
        echo "<div id='subNavi'>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::46}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::47}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::48}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::50}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::51}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::52}}')."</div>";
        echo "</div>";
        echo $margintop;
        break;
    case ('Therese Kolbusz'):
        echo "<div id='subNavi'>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::46}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::47}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::48}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::50}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::51}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::52}}')."</div>";
        echo "</div>";
        echo $margintop;
        break;
    case ('Ivona Franczyk'):
        echo "<div id='subNavi'>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::46}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::47}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::48}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::50}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::51}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::52}}')."</div>";
        echo "</div>";
        echo $margintop;
        break;
    case ('Britta Hempelmann'):
        echo "<div id='subNavi'>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::46}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::47}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::48}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::50}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::51}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::52}}')."</div>";
        echo "</div>";
        echo $margintop;
        break;
    case ('Renate Schneider'):
        echo "<div id='subNavi'>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::46}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::47}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::48}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::50}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::51}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::52}}')."</div>";
        echo "</div>";
        echo $margintop;
        break;
    case ('Derya Bilmez'):
        echo "<div id='subNavi'>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::46}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::47}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::48}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::50}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::51}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::52}}')."</div>";
        echo "</div>";
        echo $margintop;
        break;
    case ('Leistungsspektrum'):
        echo "<div id='subNavi'>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::22}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::23}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::24}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::25}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::26}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::27}}')."</div>";
        echo "</div>";
        echo $margintop;
        break;
    case ('Implantologie'):
        echo "<div id='subNavi'>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::28}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::29}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::30}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::31}}')."</div>";
        echo "</div>";
        echo $margintop;
        break;
    case ('Ärzteteam'):
        echo "<div id='subNavi'>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::44}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::45}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::39}}')."</div>";
        echo "</div>";
        echo $margintop;
        break;
    case ('Dr. Stefan König'): // todo Gleiches Menü wie Ärzteteam !!!
        echo "<div id='subNavi'>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::44}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::45}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::39}}')."</div>";
        echo "</div>";
        echo $margintop;
        break;
    case ('Susanne Grüttner'): // todo Gleiches Menü wie Ärzteteam !!!
        echo "<div id='subNavi'>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::44}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::45}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::39}}')."</div>";
        echo "</div>";
        echo $margintop;
        break;
    case ('Jobs'): // todo Gleiches Menü wie Ärzteteam !!!
        echo $margintop;
        break;

    case ('Dr. Sebastian Koch'): // todo Gleiches Menü wie Ärzteteam !!!
        echo "<div id='subNavi'>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::44}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::45}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::39}}')."</div>";
        echo "</div>";
        echo $margintop;
        break;
    case ('Funktionsdiagnostik / CMD'):
        echo "<div id='subNavi'>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::33}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::34}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::35}}')."</div>";
        echo "</div>";
        echo $margintop;
        break;
    case ('Aktuelles'):
        echo $margintop;
        break;

    case ('Mitarbeiter'):
        echo"<style>.subLink{margin-left:20px !important;}</style>";
        echo "<div id='subNavi' style='border-bottom:1px solid white';>";



        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::56}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::50}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::51}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::48}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::47}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::46}}')."</div>";




        echo "</div>";

        echo "<div id='subNavi' style='opacity:1;margin-top:0;'>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::62}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::61}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::60}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::59}}')."</div>";




        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::58}}')."</div>";
        echo "<div class='subLink'>".$this->replaceInsertTags('{{link::57}}')."</div>";
        echo "</div>";
        echo $margintop;
        break;
    default: //todo
        echo $margintop;
        break;
};
//echo $this->replaceInsertTags('{{insert_module::40}}');
?>
