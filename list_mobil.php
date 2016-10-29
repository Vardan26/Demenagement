<?php
$mailBody = '<h2><strong>Nome Prenome : &emsp;</strong>' . $_POST["input"][0] . "</h2>";

if (!(empty($_POST["input"][1]))) {
    $mailBody .= '<hr/><h2> Appareil de musculation: </h2>';
    $mailBody .= '<strong> Appareil de musculation : &emsp;</strong>' . $_POST["input"][1] . "<br/>";
}
if (!(empty($_POST["input"][2]))) {
    $mailBody .= "<span> <strong>Descriptif:</strong>" . $_POST["input"][2] . ": </span><br/>";
}
if (!(empty($_POST["input"][3]))) {
    $mailBody .= '<hr/><h2> Aquarium : </h2>';
    $mailBody .= '<strong> 20 l. à 75 l. :  &emsp;</strong>' . $_POST["input"][3] . "<br/>";
}
if (!(empty($_POST["input"][4]))) {
    $mailBody .= '<strong> 75 l. à 250 l.:  &emsp;</strong>' . $_POST["input"][4] . "<br/>";
}
if (!(empty($_POST["input"][5]))) {
    $mailBody .= '<strong> Autre : &emsp;</strong>' . $_POST["input"][5] . "<br/>";
}
if (!(empty($_POST["input"][6]))) {
    $mailBody .= '<strong> Notes : &emsp;</strong>' . $_POST["input"][6] . "<br/>";
}
if (!(empty($_POST["input"][7]))) {
    $mailBody .= '<strong> Argentier : &emsp;</strong>' . $_POST["input"][7] . "<br/>";
}
if (!(empty($_POST["input"][8]))) {
    $mailBody .= '<hr/><h2> Armoire  : </h2>';
    $mailBody .= '<strong> 1 portes: &emsp;</strong>' . $_POST["input"][8] . "<br/>";
}
if (!(empty($_POST["input"][9]))) {
    $mailBody .= '<strong> 2 portes : &emsp;</strong>' . $_POST["input"][9] . "<br/>";
}
if (!(empty($_POST["input"][10]))) {
    $mailBody .= '<strong> 3 portes : &emsp;</strong>' . $_POST["input"][10] . "<br/>";
}
if (!(empty($_POST["input"][11]))) {
    $mailBody .= '<strong> 4 portes : &emsp;</strong>' . $_POST["input"][11] . "<br/>";
}
if (!(empty($_POST["input"][12]))) {
    $mailBody .= '<hr/><h2> Armoire métallique : </h2>';
    $mailBody .= '<strong> 1 portes: &emsp;</strong>' . $_POST["input"][12] . "<br/>";
}
if (!(empty($_POST["input"][13]))) {
    $mailBody .= '<strong> 2 portes:  &emsp;</strong>' . $_POST["input"][13] . "<br/>";
}
if (!(empty($_POST["input"][14]))) {
    $mailBody .= '<strong> Rideau:  &emsp;</strong>' . $_POST["input"][14] . "<br/>";
}
if (!(empty($_POST["input"][15]))) {
    $mailBody .= '<hr/><h2> Banc: </h2>';
    $mailBody .= '<strong>  Bois : &emsp;</strong>' . $_POST["input"][15] . "<br/>";
}
if (!(empty($_POST["input"][16]))) {
    $mailBody .= '<strong> Métal : &emsp;</strong>' . $_POST["input"][16] . "<br/>";
}
if (!(empty($_POST["input"][17]))) {
    $mailBody .= '<strong> Pierre : &emsp;</strong>' . $_POST["input"][17] . "<br/>";
}
if (!(empty($_POST["input"][18]))) {

    $mailBody .= '<strong> Plastique : &emsp;</strong>' . $_POST["input"][18] . "<br/>";
}
if (!(empty($_POST["input"][19]))) {
    $mailBody .= '<hr/><h2> Barbecue : </h2>';
    $mailBody .= '<strong>Standard : &emsp;</strong>' . $_POST["input"][19] . "<br/>";
}
if (!(empty($_POST["input"][20]))) {
    $mailBody .= '<strong> Pierre  : &emsp;</strong>' . $_POST["input"][20] . "<br/>";
}
if (!(empty($_POST["input"][21]))) {
    $mailBody .= '<strong>Autre: &emsp;</strong>' . $_POST["input"][21] . "<br/>";
}
if (!(empty($_POST["input"][22]))) {
    $mailBody .= '<strong>Notes : &emsp;</strong>' . $_POST["input"][22] . "<br/>";
}
if (!(empty($_POST["input"][23]))) {
    $mailBody .= '<hr/><h2> Bar, Comptoir : </h2>';
    $mailBody .= '<strong>Bar, Comptoir : &emsp;</strong>' . $_POST["input"][23] . "<br/>";
}
if (!(empty($_POST["input"][24]))) {
    $mailBody .= '<strong>Dimensions  : &emsp;</strong>' . $_POST["input"][24] . "<br/>";
}
if (!(empty($_POST["input"][25]))) {
    $mailBody .= '<hr/><h2> Bibliothèque : </h2>';
    $mailBody .= '<strong> 1 portes : &emsp;</strong>' . $_POST["input"][25] . "<br/>";
}
if (!(empty($_POST["input"][26]))) {
    $mailBody .= '<strong> 2 portes   : &emsp;</strong>' . $_POST["input"][26] . "<br/>";
}
if (!(empty($_POST["input"][27]))) {
    $mailBody .= '<strong> 3 portes : &emsp;</strong>' . $_POST["input"][27] . "<br/>";
}
if (!(empty($_POST["input"][28]))) {
    $mailBody .= '<strong> 4 portes : &emsp;</strong>' . $_POST["input"][28] . "<br/>";
}
if (!(empty($_POST["input"][29]))) {
    $mailBody .= '<hr/><h2> Billot de cuisine : </h2>';
    $mailBody .= '<strong>Billot de cuisine : &emsp;</strong>' . $_POST["input"][29] . "<br/>";
}
if (!(empty($_POST["input"][30]))) {
    $mailBody .= '<strong>Dimensions : &emsp;</strong>' . $_POST["input"][30] . "<br/>";
}
if (!(empty($_POST["input"][31]))) {
    $mailBody .= '<hr/><h2> Bonnetière, Homme debout : </h2>';
    $mailBody .= '<strong>Bonnetière, Homme debout : &emsp;</strong>' . $_POST["input"][31] . "<br/>";
}
if (!(empty($_POST["input"][32]))) {
    $mailBody .= '<hr/><h2> Bouteille de vin: </h2>';
    $mailBody .= '<strong>Bouteille de vin: &emsp;</strong>' . $_POST["input"][32] . "<br/>";
}
if (!(empty($_POST["input"][33]))) {
    $mailBody .= '<hr/><h2> Buffet bas  : </h2>';
    $mailBody .= '<strong>1 portes  : &emsp;</strong>' . $_POST["input"][33] . "<br/>";
}
if (!(empty($_POST["input"][34]))) {
    $mailBody .= '<strong> 2 portes: &emsp;</strong>' . $_POST["input"][34] . "<br/>";
}
if (!(empty($_POST["input"][35]))) {
    $mailBody .= '<strong> 3 portes: &emsp;</strong>' . $_POST["input"][35] . "<br/>";
}



if (!(empty($_POST["input"][36]))) {
    $mailBody .= '<strong> 4 portes: &emsp;</strong>' . $_POST["input"][36] . "<br/>";
}
if (isset($_POST["input"][37])) {
    $mailBody .= '<strong> Materieal : &emsp;</strong>' . $_POST["input"][37] . "<br/>";
}


if (!(empty($_POST["input"][38]))) {
    $mailBody .= '<hr/><h2> Buffet 2 corps : </h2>';
    $mailBody .= '<strong> 1 portes : &emsp;</strong>' . $_POST["input"][38] . "<br/>";
}
if (!(empty($_POST["input"][39]))) {
    $mailBody .= '<strong> 2 portes  : &emsp;</strong>' . $_POST["input"][39] . "<br/>";
}
if (!(empty($_POST["input"][40]))) {
    $mailBody .= '<strong> 4 portes  : &emsp;</strong>' . $_POST["input"][40] . "<br/>";
}
if (isset($_POST["input"][41])) {
    $mailBody .= '<strong> Materieal  : &emsp;</strong>' . $_POST["input"][41] . "<br/>";

}

if (!(empty($_POST["input"][42]))) {
    $mailBody .= '<hr/><h2> Bureau : </h2>';
    $mailBody .= '<strong>Standard  : &emsp;</strong>' . $_POST["input"][42] . "<br/>";
}
if (!(empty($_POST["input"][43]))) {
    $mailBody .= '<strong> Ministre  : &emsp;</strong>' . $_POST["input"][43] . "<br/>";
}
if (!(empty($_POST["input"][44]))) {
    $mailBody .= '<strong>Avec retour  : &emsp;</strong>' . $_POST["input"][44] . "<br/>";
}
if (!(empty($_POST["input"][45]))) {
    $mailBody .= '<strong>Ancien : &emsp;</strong>' . $_POST["input"][45] . "<br/>";
}
if (!(empty($_POST["input"][46]))) {
    $mailBody .= '<hr/><h2> Canapé : </h2>';
    $mailBody .= '<strong> 2 / 3 places : &emsp;</strong>' . $_POST["input"][46] . "<br/>";
}
if (!(empty($_POST["input"][47]))) {
    $mailBody .= '<strong>Angle  : &emsp;</strong>' . $_POST["input"][47] . "<br/>";
}
if (!(empty($_POST["input"][48]))) {
    $mailBody .= '<strong> BZ  : &emsp;</strong>' . $_POST["input"][48] . "<br/>";
}
if (!(empty($_POST["input"][49]))) {
    $mailBody .= '<strong>Clic clac : &emsp;</strong>' . $_POST["input"][49] . "<br/>";
}
if (strlen($_POST["input"][50]) > 1) {
    $mailBody .= '<strong>Cuir : &emsp;</strong>' . $_POST["input"][50] . "<br/>";
}
if (!(empty($_POST["input"][51]))) {
    $mailBody .= '<hr/><h2> Billot de cuisine : </h2>';

    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][51] . "<br/>";
}
if (!(empty($_POST["input"][52]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][52] . "<br/>";
}
if (!(empty($_POST["input"][53]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][53] . "<br/>";
}
if (!(empty($_POST["input"][54]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][54] . "<br/>";
}
if (!(empty($_POST["input"][55]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][55] . "<br/>";
}
if (!(empty($_POST["input"][56]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][56] . "<br/>";
}
if (!(empty($_POST["input"][57]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][57] . "<br/>";
}
if (!(empty($_POST["input"][58]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][58] . "<br/>";
}
if (!(empty($_POST["input"][59]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][59] . "<br/>";
}
if (!(empty($_POST["input"][60]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][60] . "<br/>";
}
if (!(empty($_POST["input"][61]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][61] . "<br/>";
}
if (!(empty($_POST["input"][62]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][62] . "<br/>";
}
if (!(empty($_POST["input"][63]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][63] . "<br/>";
}
if (!(empty($_POST["input"][64]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][64] . "<br/>";
}
if (!(empty($_POST["input"][65]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][65] . "<br/>";
}
if (!(empty($_POST["input"][66]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][66] . "<br/>";
}
if (!(empty($_POST["input"][67]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][67] . "<br/>";
}
if (!(empty($_POST["input"][68]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][68] . "<br/>";
}
if (!(empty($_POST["input"][69]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][69] . "<br/>";
}
if (!(empty($_POST["input"][70]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][70] . "<br/>";
}
if (!(empty($_POST["input"][71]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][71] . "<br/>";
}
if (!(empty($_POST["input"][72]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][72] . "<br/>";
}
if (!(empty($_POST["input"][73]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][73] . "<br/>";
}
if (!(empty($_POST["input"][74]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][74] . "<br/>";
}
if (!(empty($_POST["input"][75]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][75] . "<br/>";
}
if (!(empty($_POST["input"][76]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][76] . "<br/>";
}
if (!(empty($_POST["input"][77]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][77] . "<br/>";
}
if (!(empty($_POST["input"][78]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][78] . "<br/>";
}
if (!(empty($_POST["input"][79]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][79] . "<br/>";
}
if (!(empty($_POST["input"][80]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][80] . "<br/>";
}
if (!(empty($_POST["input"][81]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][81] . "<br/>";
}
if (!(empty($_POST["input"][82]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][82] . "<br/>";
}
if (!(empty($_POST["input"][83]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][83] . "<br/>";
}
if (!(empty($_POST["input"][84]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][84] . "<br/>";
}
if (!(empty($_POST["input"][85]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][85] . "<br/>";
}
if (!(empty($_POST["input"][86]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][86] . "<br/>";
}
if (!(empty($_POST["input"][87]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][87] . "<br/>";
}
if (!(empty($_POST["input"][88]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][88] . "<br/>";
}
if (!(empty($_POST["input"][89]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][89] . "<br/>";
}
if (!(empty($_POST["input"][90]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][90] . "<br/>";
}
if (!(empty($_POST["input"][91]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][91] . "<br/>";
}
if (!(empty($_POST["input"][92]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][92] . "<br/>";
}
if (!(empty($_POST["input"][93]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][93] . "<br/>";
}
if (!(empty($_POST["input"][94]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][94] . "<br/>";
}
if (!(empty($_POST["input"][95]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][95] . "<br/>";
}
if (!(empty($_POST["input"][96]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][96] . "<br/>";
}
if (!(empty($_POST["input"][97]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][97] . "<br/>";
}
if (!(empty($_POST["input"][98]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][98] . "<br/>";
}
if (!(empty($_POST["input"][99]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][99] . "<br/>";
}
if (!(empty($_POST["input"][100]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][100] . "<br/>";
}
if (!(empty($_POST["input"][101]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][101] . "<br/>";
}
if (!(empty($_POST["input"][102]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][102] . "<br/>";
}
if (!(empty($_POST["input"][103]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][103] . "<br/>";
}
if (!(empty($_POST["input"][104]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][104] . "<br/>";
}
if (!(empty($_POST["input"][105]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][105] . "<br/>";
}
if (!(empty($_POST["input"][106]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][106] . "<br/>";
}
if (!(empty($_POST["input"][107]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][107] . "<br/>";
}
if (!(empty($_POST["input"][108]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][108] . "<br/>";
}
if (!(empty($_POST["input"][109]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][109] . "<br/>";
}
if (!(empty($_POST["input"][110]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][110] . "<br/>";
}
if (!(empty($_POST["input"][111]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][111] . "<br/>";
}
if (!(empty($_POST["input"][112]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][112] . "<br/>";
}
if (!(empty($_POST["input"][113]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][113] . "<br/>";
}
if (!(empty($_POST["input"][114]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][114] . "<br/>";
}
if (!(empty($_POST["input"][115]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][115] . "<br/>";
}
if (!(empty($_POST["input"][116]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][116] . "<br/>";
}
if (!(empty($_POST["input"][117]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][117] . "<br/>";
}
if (!(empty($_POST["input"][118]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][118] . "<br/>";
}
if (!(empty($_POST["input"][119]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][119] . "<br/>";
}
if (!(empty($_POST["input"][120]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][120] . "<br/>";
}
if (!(empty($_POST["input"][121]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][121] . "<br/>";
}
if (!(empty($_POST["input"][122]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][122] . "<br/>";
}
if (!(empty($_POST["input"][123]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][123] . "<br/>";
}
if (!(empty($_POST["input"][124]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][124] . "<br/>";
}
if (!(empty($_POST["input"][125]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][125] . "<br/>";
}
if (!(empty($_POST["input"][126]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][126] . "<br/>";
}
if (!(empty($_POST["input"][127]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][127] . "<br/>";
}
if (!(empty($_POST["input"][128]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][128] . "<br/>";
}
if (!(empty($_POST["input"][129]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][129] . "<br/>";
}
if (!(empty($_POST["input"][130]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][130] . "<br/>";
}
if (!(empty($_POST["input"][131]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][131] . "<br/>";
}
if (!(empty($_POST["input"][132]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][132] . "<br/>";
}
if (!(empty($_POST["input"][133]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][133] . "<br/>";
}
if (!(empty($_POST["input"][134]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][134] . "<br/>";
}
if (!(empty($_POST["input"][135]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][135] . "<br/>";
}
if (!(empty($_POST["input"][136]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][136] . "<br/>";
}
if (!(empty($_POST["input"][137]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][137] . "<br/>";
}
if (!(empty($_POST["input"][138]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][138] . "<br/>";
}
if (!(empty($_POST["input"][139]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][139] . "<br/>";
}
if (!(empty($_POST["input"][140]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][140] . "<br/>";
}
if (!(empty($_POST["input"][141]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][141] . "<br/>";
}
if (!(empty($_POST["input"][142]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][142] . "<br/>";
}
if (!(empty($_POST["input"][143]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][143] . "<br/>";
}
if (!(empty($_POST["input"][144]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][144] . "<br/>";
}
if (!(empty($_POST["input"][145]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][145] . "<br/>";
}
if (!(empty($_POST["input"][146]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][146] . "<br/>";
}
if (!(empty($_POST["input"][147]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][147] . "<br/>";
}
if (!(empty($_POST["input"][148]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][148] . "<br/>";
}
if (!(empty($_POST["input"][149]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][149] . "<br/>";
}
if (!(empty($_POST["input"][150]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][150] . "<br/>";
}
if (!(empty($_POST["input"][151]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][151] . "<br/>";
}
if (!(empty($_POST["input"][152]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][152] . "<br/>";
}
if (!(empty($_POST["input"][153]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][153] . "<br/>";
}
if (!(empty($_POST["input"][154]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][154] . "<br/>";
}
if (!(empty($_POST["input"][155]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][155] . "<br/>";
}
if (!(empty($_POST["input"][156]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][156] . "<br/>";
}
if (!(empty($_POST["input"][157]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][157] . "<br/>";
}
if (!(empty($_POST["input"][158]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][158] . "<br/>";
}
if (!(empty($_POST["input"][159]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][159] . "<br/>";
}
if (!(empty($_POST["input"][160]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][160] . "<br/>";
}
if (!(empty($_POST["input"][161]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][161] . "<br/>";
}
if (!(empty($_POST["input"][162]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][162] . "<br/>";
}
if (!(empty($_POST["input"][163]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][163] . "<br/>";
}
if (!(empty($_POST["input"][164]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][164] . "<br/>";
}
if (!(empty($_POST["input"][165]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][165] . "<br/>";
}
if (!(empty($_POST["input"][166]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][166] . "<br/>";
}
if (!(empty($_POST["input"][167]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][167] . "<br/>";
}
if (!(empty($_POST["input"][168]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][168] . "<br/>";
}
if (!(empty($_POST["input"][169]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][169] . "<br/>";
}
if (!(empty($_POST["input"][170]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][170] . "<br/>";
}
if (!(empty($_POST["input"][171]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][171] . "<br/>";
}
if (!(empty($_POST["input"][172]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][172] . "<br/>";
}
if (!(empty($_POST["input"][173]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][173] . "<br/>";
}
if (!(empty($_POST["input"][174]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][174] . "<br/>";
}
if (!(empty($_POST["input"][175]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][175] . "<br/>";
}
if (!(empty($_POST["input"][176]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][176] . "<br/>";
}
if (!(empty($_POST["input"][177]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][177] . "<br/>";
}
if (!(empty($_POST["input"][178]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][178] . "<br/>";
}
if (!(empty($_POST["input"][179]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][179] . "<br/>";
}
if (!(empty($_POST["input"][180]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][180] . "<br/>";
}
if (!(empty($_POST["input"][181]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][181] . "<br/>";
}
if (!(empty($_POST["input"][182]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][182] . "<br/>";
}
if (!(empty($_POST["input"][183]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][183] . "<br/>";
}
if (!(empty($_POST["input"][184]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][184] . "<br/>";
}
if (!(empty($_POST["input"][185]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][185] . "<br/>";
}
if (!(empty($_POST["input"][186]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][186] . "<br/>";
}
if (!(empty($_POST["input"][187]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][187] . "<br/>";
}
if (!(empty($_POST["input"][188]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][188] . "<br/>";
}
if (!(empty($_POST["input"][189]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][189] . "<br/>";
}
if (!(empty($_POST["input"][190]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][190] . "<br/>";
}
if (!(empty($_POST["input"][191]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][191] . "<br/>";
}
if (!(empty($_POST["input"][192]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][192] . "<br/>";
}
if (!(empty($_POST["input"][193]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][193] . "<br/>";
}
if (!(empty($_POST["input"][194]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][194] . "<br/>";
}
if (!(empty($_POST["input"][195]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][195] . "<br/>";
}
if (!(empty($_POST["input"][196]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][196] . "<br/>";
}
if (!(empty($_POST["input"][197]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][197] . "<br/>";
}
if (!(empty($_POST["input"][198]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][198] . "<br/>";
}
if (!(empty($_POST["input"][199]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][199] . "<br/>";
}
if (!(empty($_POST["input"][200]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][200] . "<br/>";
}
if (!(empty($_POST["input"][201]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][201] . "<br/>";
}
if (!(empty($_POST["input"][202]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][202] . "<br/>";
}
if (!(empty($_POST["input"][203]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][203] . "<br/>";
}
if (!(empty($_POST["input"][204]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][204] . "<br/>";
}
if (!(empty($_POST["input"][205]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][205] . "<br/>";
}
if (!(empty($_POST["input"][206]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][206] . "<br/>";
}
if (!(empty($_POST["input"][207]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][207] . "<br/>";
}
if (!(empty($_POST["input"][208]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][208] . "<br/>";
}
if (!(empty($_POST["input"][209]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][209] . "<br/>";
}
if (!(empty($_POST["input"][210]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][210] . "<br/>";
}
if (!(empty($_POST["input"][211]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][211] . "<br/>";
}
if (!(empty($_POST["input"][212]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][212] . "<br/>";
}
if (!(empty($_POST["input"][213]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][213] . "<br/>";
}
if (!(empty($_POST["input"][214]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][214] . "<br/>";
}
if (!(empty($_POST["input"][215]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][215] . "<br/>";
}
if (!(empty($_POST["input"][216]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][216] . "<br/>";
}
if (!(empty($_POST["input"][217]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][217] . "<br/>";
}
if (!(empty($_POST["input"][218]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][218] . "<br/>";
}
if (!(empty($_POST["input"][219]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][219] . "<br/>";
}
if (!(empty($_POST["input"][220]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][220] . "<br/>";
}
if (!(empty($_POST["input"][221]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][221] . "<br/>";
}
if (!(empty($_POST["input"][222]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][222] . "<br/>";
}
if (!(empty($_POST["input"][223]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][223] . "<br/>";
}
if (!(empty($_POST["input"][224]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][224] . "<br/>";
}
if (!(empty($_POST["input"][225]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][225] . "<br/>";
}
if (!(empty($_POST["input"][226]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][226] . "<br/>";
}
if (!(empty($_POST["input"][227]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][227] . "<br/>";
}
if (!(empty($_POST["input"][228]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][228] . "<br/>";
}
if (!(empty($_POST["input"][229]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][229] . "<br/>";
}
if (!(empty($_POST["input"][230]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][230] . "<br/>";
}
if (!(empty($_POST["input"][231]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][231] . "<br/>";
}
if (!(empty($_POST["input"][232]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][232] . "<br/>";
}
if (!(empty($_POST["input"][233]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][233] . "<br/>";
}
if (!(empty($_POST["input"][234]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][234] . "<br/>";
}
if (!(empty($_POST["input"][235]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][235] . "<br/>";
}
if (!(empty($_POST["input"][236]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][236] . "<br/>";
}
if (!(empty($_POST["input"][237]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][237] . "<br/>";
}
if (!(empty($_POST["input"][238]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][238] . "<br/>";
}
if (!(empty($_POST["input"][239]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][239] . "<br/>";
}
if (!(empty($_POST["input"][240]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][240] . "<br/>";
}
if (!(empty($_POST["input"][241]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][241] . "<br/>";
}
if (!(empty($_POST["input"][242]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][242] . "<br/>";
}
if (!(empty($_POST["input"][243]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][243] . "<br/>";
}
if (!(empty($_POST["input"][244]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][244] . "<br/>";
}
if (!(empty($_POST["input"][245]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][245] . "<br/>";
}
if (!(empty($_POST["input"][246]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][246] . "<br/>";
}
if (!(empty($_POST["input"][247]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][247] . "<br/>";
}
if (!(empty($_POST["input"][248]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][248] . "<br/>";
}
if (!(empty($_POST["input"][249]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][249] . "<br/>";
}
if (!(empty($_POST["input"][250]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][250] . "<br/>";
}
if (!(empty($_POST["input"][251]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][251] . "<br/>";
}
if (!(empty($_POST["input"][252]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][252] . "<br/>";
}
if (!(empty($_POST["input"][253]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][253] . "<br/>";
}
if (!(empty($_POST["input"][254]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][254] . "<br/>";
}
if (!(empty($_POST["input"][255]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][255] . "<br/>";
}
if (!(empty($_POST["input"][256]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][256] . "<br/>";
}
if (!(empty($_POST["input"][257]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][257] . "<br/>";
}
if (!(empty($_POST["input"][258]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][258] . "<br/>";
}
if (!(empty($_POST["input"][259]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][259] . "<br/>";
}
if (!(empty($_POST["input"][260]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][260] . "<br/>";
}
if (!(empty($_POST["input"][261]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][261] . "<br/>";
}
if (!(empty($_POST["input"][262]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][262] . "<br/>";
}
if (!(empty($_POST["input"][263]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][263] . "<br/>";
}
if (!(empty($_POST["input"][264]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][264] . "<br/>";
}
if (!(empty($_POST["input"][265]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][265] . "<br/>";
}
if (!(empty($_POST["input"][266]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][266] . "<br/>";
}
if (!(empty($_POST["input"][267]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][267] . "<br/>";
}
if (!(empty($_POST["input"][268]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][268] . "<br/>";
}
if (!(empty($_POST["input"][269]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][269] . "<br/>";
}
if (!(empty($_POST["input"][270]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][270] . "<br/>";
}
if (!(empty($_POST["input"][271]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][271] . "<br/>";
}
if (!(empty($_POST["input"][272]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][272] . "<br/>";
}
if (!(empty($_POST["input"][273]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][273] . "<br/>";
}
if (!(empty($_POST["input"][274]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][274] . "<br/>";
}
if (!(empty($_POST["input"][275]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][275] . "<br/>";
}
if (!(empty($_POST["input"][276]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][276] . "<br/>";
}
if (!(empty($_POST["input"][277]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][277] . "<br/>";
}
if (!(empty($_POST["input"][278]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][278] . "<br/>";
}
if (!(empty($_POST["input"][279]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][279] . "<br/>";
}
if (!(empty($_POST["input"][280]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input"][280] . "<br/>";
}


$_POST['g-recaptcha-response'] = "captcha";
$captcha = $_POST['g-recaptcha-response'];
$subject = "List Mobilier";

$headers = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= "From: <" . ">\n";
$headers .= "X-Priority: 1\n";

print_r($mailBody);
//print_r(array_filter($_POST["input"]));

$from = $headers;
$to = 'gagik.sargsyan@gmail.com';

$body = "From: " . $_POST["input"][1] . "\n E-Mail: " . $_POST["input"][1] . "\n Message:\n " . $_POST["input"][1] . " tel:\n  " . $_POST["input"][1];

if ($captcha !== '') {
    if (mail($to, $subject, $body, $from)) {
        echo '<p>Your message has been sent!</p>';
    } else {
        echo '<p>Something went wrong, go back and try again!</p>';
    }
} else if ($_POST['submit'] && $captcha !== '') {
    echo '<p>You answered the anti-spam question incorrectly!</p>';
}