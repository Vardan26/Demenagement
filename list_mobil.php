<?php

$mailBody = '<h2><strong>Nome Prenome : &emsp;</strong>' . $_POST["input_0"] . "</h2>";

if (!(empty($_POST["input_1"]))) {
    $mailBody .= '<hr/><h2> Appareil de musculation: </h2>';
    $mailBody .= '<strong> Appareil de musculation : &emsp;</strong>' . $_POST["input_1"] . "<br/>";
}
if (!(empty($_POST["input_2"]))) {
    $mailBody .= "<span> <strong>Descriptif:</strong>" . $_POST["input_2"] . ": </span><br/>";
}
if (!(empty($_POST["input_3"]))) {
    $mailBody .= '<hr/><h2> Aquarium : </h2>';
    $mailBody .= '<strong> 20 l. à 75 l. :  &emsp;</strong>' . $_POST["input_3"] . "<br/>";
}
if (!(empty($_POST["input_4"]))) {
    $mailBody .= '<strong> 75 l. à 250 l.:  &emsp;</strong>' . $_POST["input_4"] . "<br/>";
}
if (!(empty($_POST["input_5"]))) {
    $mailBody .= '<strong> Autre : &emsp;</strong>' . $_POST["input_5"] . "<br/>";
}
if (!(empty($_POST["input_6"]))) {
    $mailBody .= '<strong> Notes : &emsp;</strong>' . $_POST["input_6"] . "<br/>";
}
if (!(empty($_POST["input_7"]))) {
    $mailBody .= '<strong> Argentier : &emsp;</strong>' . $_POST["input_7"] . "<br/>";
}
if (!(empty($_POST["input_8"]))) {
    $mailBody .= '<hr/><h2> Armoire  : </h2>';
    $mailBody .= '<strong> 1 portes: &emsp;</strong>' . $_POST["input_8"] . "<br/>";
}
if (!(empty($_POST["input_9"]))) {
    $mailBody .= '<strong> 2 portes : &emsp;</strong>' . $_POST["input_9"] . "<br/>";
}
if (!(empty($_POST["input_10"]))) {
    $mailBody .= '<strong> 3 portes : &emsp;</strong>' . $_POST["input_10"] . "<br/>";
}
if (!(empty($_POST["input_11"]))) {
    $mailBody .= '<strong> 4 portes : &emsp;</strong>' . $_POST["input_11"] . "<br/>";
}
if (!(empty($_POST["input_12"]))) {
    $mailBody .= '<hr/><h2> Armoire métallique : </h2>';
    $mailBody .= '<strong> 1 portes: &emsp;</strong>' . $_POST["input_12"] . "<br/>";
}
if (!(empty($_POST["input_13"]))) {
    $mailBody .= '<strong> 2 portes:  &emsp;</strong>' . $_POST["input_13"] . "<br/>";
}
if (!(empty($_POST["input_14"]))) {
    $mailBody .= '<strong> Rideau:  &emsp;</strong>' . $_POST["input_14"] . "<br/>";
}
if (!(empty($_POST["input_15"]))) {
    $mailBody .= '<hr/><h2> Banc: </h2>';
    $mailBody .= '<strong>  Bois : &emsp;</strong>' . $_POST["input_15"] . "<br/>";
}
if (!(empty($_POST["input_16"]))) {
    $mailBody .= '<strong> Métal : &emsp;</strong>' . $_POST["input_16"] . "<br/>";
}
if (!(empty($_POST["input_17"]))) {
    $mailBody .= '<strong> Pierre : &emsp;</strong>' . $_POST["input_17"] . "<br/>";
}
if (!(empty($_POST["input_18"]))) {

    $mailBody .= '<strong> Plastique : &emsp;</strong>' . $_POST["input_18"] . "<br/>";
}
if (!(empty($_POST["input_19"]))) {
    $mailBody .= '<hr/><h2> Barbecue : </h2>';
    $mailBody .= '<strong>Standard : &emsp;</strong>' . $_POST["input_19"] . "<br/>";
}
if (!(empty($_POST["input_20"]))) {
    $mailBody .= '<strong> Pierre  : &emsp;</strong>' . $_POST["input_20"] . "<br/>";
}
if (!(empty($_POST["input_21"]))) {
    $mailBody .= '<strong>Autre: &emsp;</strong>' . $_POST["input_21"] . "<br/>";
}
if (!(empty($_POST["input_22"]))) {
    $mailBody .= '<strong>Notes : &emsp;</strong>' . $_POST["input_22"] . "<br/>";
}
if (!(empty($_POST["input_23"]))) {
    $mailBody .= '<hr/><h2> Bar, Comptoir : </h2>';
    $mailBody .= '<strong>Bar, Comptoir : &emsp;</strong>' . $_POST["input_23"] . "<br/>";
}
if (!(empty($_POST["input_24"]))) {
    $mailBody .= '<strong>Dimensions  : &emsp;</strong>' . $_POST["input_24"] . "<br/>";
}
if (!(empty($_POST["input_25"]))) {
    $mailBody .= '<hr/><h2> Bibliothèque : </h2>';
    $mailBody .= '<strong> 1 portes : &emsp;</strong>' . $_POST["input_25"] . "<br/>";
}
if (!(empty($_POST["input_26"]))) {
    $mailBody .= '<strong> 2 portes   : &emsp;</strong>' . $_POST["input_26"] . "<br/>";
}
if (!(empty($_POST["input_27"]))) {
    $mailBody .= '<strong> 3 portes : &emsp;</strong>' . $_POST["input_27"] . "<br/>";
}
if (!(empty($_POST["input_28"]))) {
    $mailBody .= '<strong> 4 portes : &emsp;</strong>' . $_POST["input_28"] . "<br/>";
}
if (!(empty($_POST["input_29"]))) {
    $mailBody .= '<hr/><h2> Billot de cuisine : </h2>';
    $mailBody .= '<strong>Billot de cuisine : &emsp;</strong>' . $_POST["input_29"] . "<br/>";
}
if (!(empty($_POST["input_30"]))) {
    $mailBody .= '<strong>Dimensions : &emsp;</strong>' . $_POST["input_30"] . "<br/>";
}
if (!(empty($_POST["input_31"]))) {
    $mailBody .= '<hr/><h2> Bonnetière, Homme debout : </h2>';
    $mailBody .= '<strong>Bonnetière, Homme debout : &emsp;</strong>' . $_POST["input_31"] . "<br/>";
}
if (!(empty($_POST["input_32"]))) {
    $mailBody .= '<hr/><h2> Bouteille de vin: </h2>';
    $mailBody .= '<strong>Bouteille de vin: &emsp;</strong>' . $_POST["input_32"] . "<br/>";
}
if (!(empty($_POST["input_33"]))) {
    $mailBody .= '<hr/><h2> Buffet bas  : </h2>';
    $mailBody .= '<strong>1 portes  : &emsp;</strong>' . $_POST["input_33"] . "<br/>";
}
if (!(empty($_POST["input_34"]))) {
    $mailBody .= '<strong> 2 portes: &emsp;</strong>' . $_POST["input_34"] . "<br/>";
}
if (!(empty($_POST["input_35"]))) {
    $mailBody .= '<strong> 3 portes: &emsp;</strong>' . $_POST["input_35"] . "<br/>";
}


if (!(empty($_POST["input_36"]))) {
    $mailBody .= '<strong> 4 portes: &emsp;</strong>' . $_POST["input_36"] . "<br/>";
}
if (isset($_POST["input_37"])) {
    $mailBody .= '<strong> Materieal : &emsp;</strong>' . $_POST["input_37"] . "<br/>";
}


if (!(empty($_POST["input_38"]))) {
    $mailBody .= '<hr/><h2> Buffet 2 corps : </h2>';
    $mailBody .= '<strong> 1 portes : &emsp;</strong>' . $_POST["input_38"] . "<br/>";
}
if (!(empty($_POST["input_39"]))) {
    $mailBody .= '<strong> 2 portes  : &emsp;</strong>' . $_POST["input_39"] . "<br/>";
}
if (!(empty($_POST["input_40"]))) {
    $mailBody .= '<strong> 4 portes  : &emsp;</strong>' . $_POST["input_40"] . "<br/>";
}
if (isset($_POST["input_41"])) {
    $mailBody .= '<strong> Materieal  : &emsp;</strong>' . $_POST["input_41"] . "<br/>";

}

if (!(empty($_POST["input_42"]))) {
    $mailBody .= '<hr/><h2> Bureau : </h2>';
    $mailBody .= '<strong>Standard  : &emsp;</strong>' . $_POST["input_42"] . "<br/>";
}
if (!(empty($_POST["input_43"]))) {
    $mailBody .= '<strong> Ministre  : &emsp;</strong>' . $_POST["input_43"] . "<br/>";
}
if (!(empty($_POST["input_44"]))) {
    $mailBody .= '<strong>Avec retour  : &emsp;</strong>' . $_POST["input_44"] . "<br/>";
}
if (!(empty($_POST["input_45"]))) {
    $mailBody .= '<strong>Ancien : &emsp;</strong>' . $_POST["input_45"] . "<br/>";
}
if (!(empty($_POST["input_46"]))) {
    $mailBody .= '<hr/><h2> Canapé : </h2>';
    $mailBody .= '<strong> 2 / 3 places : &emsp;</strong>' . $_POST["input_46"] . "<br/>";
}
if (!(empty($_POST["input_47"]))) {
    $mailBody .= '<strong>Angle  : &emsp;</strong>' . $_POST["input_47"] . "<br/>";
}
if (!(empty($_POST["input_48"]))) {
    $mailBody .= '<strong> BZ  : &emsp;</strong>' . $_POST["input_48"] . "<br/>";
}
if (!(empty($_POST["input_49"]))) {
    $mailBody .= '<strong>Clic clac : &emsp;</strong>' . $_POST["input_49"] . "<br/>";
}
if (isset($_POST["input_50"])) {
    $mailBody .= '<strong>Cuir : &emsp;</strong>' . $_POST["input_50"] . "<br/>";
}
if (!(empty($_POST["input_51"]))) {
    $mailBody .= '<hr/><h2> Billot de cuisine : </h2>';

    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_51"] . "<br/>";
}
if (!(empty($_POST["input_52"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_52"] . "<br/>";
}
if (!(empty($_POST["input_53"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_53"] . "<br/>";
}
if (!(empty($_POST["input_54"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_54"] . "<br/>";
}
if (!(empty($_POST["input_55"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_55"] . "<br/>";
}
if (!(empty($_POST["input_56"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_56"] . "<br/>";
}
if (!(empty($_POST["input_57"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_57"] . "<br/>";
}
if (!(empty($_POST["input_58"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_58"] . "<br/>";
}
if (!(empty($_POST["input_59"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_59"] . "<br/>";
}
if (!(empty($_POST["input_60"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_60"] . "<br/>";
}
if (!(empty($_POST["input_61"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_61"] . "<br/>";
}
if (!(empty($_POST["input_62"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_62"] . "<br/>";
}
if (!(empty($_POST["input_63"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_63"] . "<br/>";
}
if (!(empty($_POST["input_64"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_64"] . "<br/>";
}
if (!(empty($_POST["input_65"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_65"] . "<br/>";
}
if (!(empty($_POST["input_66"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_66"] . "<br/>";
}
if (!(empty($_POST["input_67"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_67"] . "<br/>";
}
if (!(empty($_POST["input_68"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_68"] . "<br/>";
}
if (!(empty($_POST["input_69"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_69"] . "<br/>";
}
if (!(empty($_POST["input_70"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_70"] . "<br/>";
}
if (!(empty($_POST["input_71"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_71"] . "<br/>";
}
if (!(empty($_POST["input_72"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_72"] . "<br/>";
}
if (!(empty($_POST["input_73"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_73"] . "<br/>";
}
if (!(empty($_POST["input_74"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_74"] . "<br/>";
}
if (!(empty($_POST["input_75"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_75"] . "<br/>";
}
if (!(empty($_POST["input_76"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_76"] . "<br/>";
}
if (!(empty($_POST["input_77"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_77"] . "<br/>";
}
if (!(empty($_POST["input_78"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_78"] . "<br/>";
}
if (!(empty($_POST["input_79"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_79"] . "<br/>";
}
if (!(empty($_POST["input_80"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_80"] . "<br/>";
}
if (!(empty($_POST["input_81"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_81"] . "<br/>";
}
if (!(empty($_POST["input_82"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_82"] . "<br/>";
}
if (!(empty($_POST["input_83"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_83"] . "<br/>";
}
if (!(empty($_POST["input_84"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_84"] . "<br/>";
}
if (!(empty($_POST["input_85"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_85"] . "<br/>";
}
if (!(empty($_POST["input_86"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_86"] . "<br/>";
}
if (!(empty($_POST["input_87"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_87"] . "<br/>";
}
if (!(empty($_POST["input_88"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_88"] . "<br/>";
}
if (!(empty($_POST["input_89"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_89"] . "<br/>";
}
if (!(empty($_POST["input_90"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_90"] . "<br/>";
}
if (!(empty($_POST["input_91"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_91"] . "<br/>";
}
if (!(empty($_POST["input_92"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_92"] . "<br/>";
}
if (!(empty($_POST["input_93"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_93"] . "<br/>";
}
if (!(empty($_POST["input_94"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_94"] . "<br/>";
}
if (!(empty($_POST["input_95"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_95"] . "<br/>";
}
if (!(empty($_POST["input_96"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_96"] . "<br/>";
}
if (!(empty($_POST["input_97"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_97"] . "<br/>";
}
if (!(empty($_POST["input_98"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_98"] . "<br/>";
}
if (!(empty($_POST["input_99"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_99"] . "<br/>";
}
if (!(empty($_POST["input_100"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_100"] . "<br/>";
}
if (!(empty($_POST["input_101"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_101"] . "<br/>";
}
if (!(empty($_POST["input_102"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_102"] . "<br/>";
}
if (!(empty($_POST["input_103"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_103"] . "<br/>";
}
if (!(empty($_POST["input_104"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_104"] . "<br/>";
}
if (!(empty($_POST["input_105"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_105"] . "<br/>";
}
if (!(empty($_POST["input_106"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_106"] . "<br/>";
}
if (!(empty($_POST["input_107"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_107"] . "<br/>";
}
if (!(empty($_POST["input_108"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_108"] . "<br/>";
}
if (!(empty($_POST["input_109"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_109"] . "<br/>";
}
if (!(empty($_POST["input_110"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_110"] . "<br/>";
}
if (!(empty($_POST["input_111"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_111"] . "<br/>";
}
if (!(empty($_POST["input_112"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_112"] . "<br/>";
}
if (!(empty($_POST["input_113"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_113"] . "<br/>";
}
if (!(empty($_POST["input_114"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_114"] . "<br/>";
}
if (!(empty($_POST["input_115"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_115"] . "<br/>";
}
if (!(empty($_POST["input_116"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_116"] . "<br/>";
}
if (!(empty($_POST["input_117"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_117"] . "<br/>";
}
if (!(empty($_POST["input_118"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_118"] . "<br/>";
}
if (!(empty($_POST["input_119"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_119"] . "<br/>";
}
if (!(empty($_POST["input_120"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_120"] . "<br/>";
}
if (!(empty($_POST["input_121"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_121"] . "<br/>";
}
if (!(empty($_POST["input_122"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_122"] . "<br/>";
}
if (!(empty($_POST["input_123"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_123"] . "<br/>";
}
if (!(empty($_POST["input_124"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_124"] . "<br/>";
}
if (!(empty($_POST["input_125"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_125"] . "<br/>";
}
if (!(empty($_POST["input_126"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_126"] . "<br/>";
}
if (!(empty($_POST["input_127"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_127"] . "<br/>";
}
if (!(empty($_POST["input_128"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_128"] . "<br/>";
}
if (!(empty($_POST["input_129"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_129"] . "<br/>";
}
if (!(empty($_POST["input_130"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_130"] . "<br/>";
}
if (!(empty($_POST["input_131"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_131"] . "<br/>";
}
if (!(empty($_POST["input_132"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_132"] . "<br/>";
}
if (!(empty($_POST["input_133"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_133"] . "<br/>";
}
if (!(empty($_POST["input_134"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_134"] . "<br/>";
}
if (!(empty($_POST["input_135"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_135"] . "<br/>";
}
if (!(empty($_POST["input_136"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_136"] . "<br/>";
}
if (!(empty($_POST["input_137"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_137"] . "<br/>";
}
if (!(empty($_POST["input_138"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_138"] . "<br/>";
}
if (!(empty($_POST["input_139"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_139"] . "<br/>";
}
if (!(empty($_POST["input_140"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_140"] . "<br/>";
}
if (!(empty($_POST["input_141"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_141"] . "<br/>";
}
if (!(empty($_POST["input_142"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_142"] . "<br/>";
}
if (!(empty($_POST["input_143"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_143"] . "<br/>";
}
if (!(empty($_POST["input_144"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_144"] . "<br/>";
}
if (!(empty($_POST["input_145"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_145"] . "<br/>";
}
if (!(empty($_POST["input_146"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_146"] . "<br/>";
}
if (!(empty($_POST["input_147"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_147"] . "<br/>";
}
if (!(empty($_POST["input_148"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_148"] . "<br/>";
}
if (!(empty($_POST["input_149"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_149"] . "<br/>";
}
if (!(empty($_POST["input_150"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_150"] . "<br/>";
}
if (!(empty($_POST["input_151"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_151"] . "<br/>";
}
if (!(empty($_POST["input_152"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_152"] . "<br/>";
}
if (!(empty($_POST["input_153"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_153"] . "<br/>";
}
if (!(empty($_POST["input_154"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_154"] . "<br/>";
}
if (!(empty($_POST["input_155"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_155"] . "<br/>";
}
if (!(empty($_POST["input_156"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_156"] . "<br/>";
}
if (!(empty($_POST["input_157"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_157"] . "<br/>";
}
if (!(empty($_POST["input_158"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_158"] . "<br/>";
}
if (!(empty($_POST["input_159"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_159"] . "<br/>";
}
if (!(empty($_POST["input_160"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_160"] . "<br/>";
}
if (!(empty($_POST["input_161"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_161"] . "<br/>";
}
if (!(empty($_POST["input_162"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_162"] . "<br/>";
}
if (!(empty($_POST["input_163"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_163"] . "<br/>";
}
if (!(empty($_POST["input_164"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_164"] . "<br/>";
}
if (!(empty($_POST["input_165"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_165"] . "<br/>";
}
if (!(empty($_POST["input_166"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_166"] . "<br/>";
}
if (!(empty($_POST["input_167"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_167"] . "<br/>";
}
if (!(empty($_POST["input_168"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_168"] . "<br/>";
}
if (!(empty($_POST["input_169"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_169"] . "<br/>";
}
if (!(empty($_POST["input_170"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_170"] . "<br/>";
}
if (!(empty($_POST["input_171"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_171"] . "<br/>";
}
if (!(empty($_POST["input_172"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_172"] . "<br/>";
}
if (!(empty($_POST["input_173"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_173"] . "<br/>";
}
if (!(empty($_POST["input_174"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_174"] . "<br/>";
}
if (!(empty($_POST["input_175"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_175"] . "<br/>";
}
if (!(empty($_POST["input_176"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_176"] . "<br/>";
}
if (!(empty($_POST["input_177"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_177"] . "<br/>";
}
if (!(empty($_POST["input_178"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_178"] . "<br/>";
}
if (!(empty($_POST["input_179"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_179"] . "<br/>";
}
if (!(empty($_POST["input_180"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_180"] . "<br/>";
}
if (!(empty($_POST["input_181"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_181"] . "<br/>";
}
if (!(empty($_POST["input_182"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_182"] . "<br/>";
}
if (!(empty($_POST["input_183"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_183"] . "<br/>";
}
if (!(empty($_POST["input_184"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_184"] . "<br/>";
}
if (!(empty($_POST["input_185"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_185"] . "<br/>";
}
if (!(empty($_POST["input_186"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_186"] . "<br/>";
}
if (!(empty($_POST["input_187"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_187"] . "<br/>";
}
if (!(empty($_POST["input_188"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_188"] . "<br/>";
}
if (!(empty($_POST["input_189"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_189"] . "<br/>";
}
if (!(empty($_POST["input_190"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_190"] . "<br/>";
}
if (!(empty($_POST["input_191"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_191"] . "<br/>";
}
if (!(empty($_POST["input_192"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_192"] . "<br/>";
}
if (!(empty($_POST["input_193"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_193"] . "<br/>";
}
if (!(empty($_POST["input_194"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_194"] . "<br/>";
}
if (!(empty($_POST["input_195"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_195"] . "<br/>";
}
if (!(empty($_POST["input_196"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_196"] . "<br/>";
}
if (!(empty($_POST["input_197"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_197"] . "<br/>";
}
if (!(empty($_POST["input_198"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_198"] . "<br/>";
}
if (!(empty($_POST["input_199"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_199"] . "<br/>";
}
if (!(empty($_POST["input_200"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_200"] . "<br/>";
}
if (!(empty($_POST["input_201"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_201"] . "<br/>";
}
if (!(empty($_POST["input_202"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_202"] . "<br/>";
}
if (!(empty($_POST["input_203"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_203"] . "<br/>";
}
if (!(empty($_POST["input_204"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_204"] . "<br/>";
}
if (!(empty($_POST["input_205"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_205"] . "<br/>";
}
if (!(empty($_POST["input_206"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_206"] . "<br/>";
}
if (!(empty($_POST["input_207"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_207"] . "<br/>";
}
if (!(empty($_POST["input_208"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_208"] . "<br/>";
}
if (!(empty($_POST["input_209"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_209"] . "<br/>";
}
if (!(empty($_POST["input_210"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_210"] . "<br/>";
}
if (!(empty($_POST["input_211"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_211"] . "<br/>";
}
if (!(empty($_POST["input_212"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_212"] . "<br/>";
}
if (!(empty($_POST["input_213"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_213"] . "<br/>";
}
if (!(empty($_POST["input_214"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_214"] . "<br/>";
}
if (!(empty($_POST["input_215"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_215"] . "<br/>";
}
if (!(empty($_POST["input_216"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_216"] . "<br/>";
}
if (!(empty($_POST["input_217"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_217"] . "<br/>";
}
if (!(empty($_POST["input_218"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_218"] . "<br/>";
}
if (!(empty($_POST["input_219"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_219"] . "<br/>";
}
if (!(empty($_POST["input_220"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_220"] . "<br/>";
}
if (!(empty($_POST["input_221"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_221"] . "<br/>";
}
if (!(empty($_POST["input_222"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_222"] . "<br/>";
}
if (!(empty($_POST["input_223"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_223"] . "<br/>";
}
if (!(empty($_POST["input_224"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_224"] . "<br/>";
}
if (!(empty($_POST["input_225"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_225"] . "<br/>";
}
if (!(empty($_POST["input_226"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_226"] . "<br/>";
}
if (!(empty($_POST["input_227"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_227"] . "<br/>";
}
if (!(empty($_POST["input_228"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_228"] . "<br/>";
}
if (!(empty($_POST["input_229"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_229"] . "<br/>";
}
if (!(empty($_POST["input_230"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_230"] . "<br/>";
}
if (!(empty($_POST["input_231"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_231"] . "<br/>";
}
if (!(empty($_POST["input_232"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_232"] . "<br/>";
}
if (!(empty($_POST["input_233"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_233"] . "<br/>";
}
if (!(empty($_POST["input_234"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_234"] . "<br/>";
}
if (!(empty($_POST["input_235"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_235"] . "<br/>";
}
if (!(empty($_POST["input_236"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_236"] . "<br/>";
}
if (!(empty($_POST["input_237"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_237"] . "<br/>";
}
if (!(empty($_POST["input_238"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_238"] . "<br/>";
}
if (!(empty($_POST["input_239"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_239"] . "<br/>";
}
if (!(empty($_POST["input_240"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_240"] . "<br/>";
}
if (!(empty($_POST["input_241"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_241"] . "<br/>";
}
if (!(empty($_POST["input_242"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_242"] . "<br/>";
}
if (!(empty($_POST["input_243"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_243"] . "<br/>";
}
if (!(empty($_POST["input_244"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_244"] . "<br/>";
}
if (!(empty($_POST["input_245"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_245"] . "<br/>";
}
if (!(empty($_POST["input_246"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_246"] . "<br/>";
}
if (!(empty($_POST["input_247"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_247"] . "<br/>";
}
if (!(empty($_POST["input_248"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_248"] . "<br/>";
}
if (!(empty($_POST["input_249"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_249"] . "<br/>";
}
if (!(empty($_POST["input_250"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_250"] . "<br/>";
}
if (!(empty($_POST["input_251"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_251"] . "<br/>";
}
if (!(empty($_POST["input_252"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_252"] . "<br/>";
}
if (!(empty($_POST["input_253"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_253"] . "<br/>";
}
if (!(empty($_POST["input_254"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_254"] . "<br/>";
}
if (!(empty($_POST["input_255"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_255"] . "<br/>";
}
if (!(empty($_POST["input_256"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_256"] . "<br/>";
}
if (!(empty($_POST["input_257"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_257"] . "<br/>";
}
if (!(empty($_POST["input_258"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_258"] . "<br/>";
}
if (!(empty($_POST["input_259"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_259"] . "<br/>";
}
if (!(empty($_POST["input_260"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_260"] . "<br/>";
}
if (!(empty($_POST["input_261"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_261"] . "<br/>";
}
if (!(empty($_POST["input_262"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_262"] . "<br/>";
}
if (!(empty($_POST["input_263"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_263"] . "<br/>";
}
if (!(empty($_POST["input_264"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_264"] . "<br/>";
}
if (!(empty($_POST["input_265"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_265"] . "<br/>";
}
if (!(empty($_POST["input_266"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_266"] . "<br/>";
}
if (!(empty($_POST["input_267"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_267"] . "<br/>";
}
if (!(empty($_POST["input_268"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_268"] . "<br/>";
}
if (!(empty($_POST["input_269"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_269"] . "<br/>";
}
if (!(empty($_POST["input_270"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_270"] . "<br/>";
}
if (!(empty($_POST["input_271"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_271"] . "<br/>";
}
if (!(empty($_POST["input_272"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_272"] . "<br/>";
}
if (!(empty($_POST["input_273"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_273"] . "<br/>";
}
if (!(empty($_POST["input_274"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_274"] . "<br/>";
}
if (!(empty($_POST["input_275"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_275"] . "<br/>";
}
if (!(empty($_POST["input_276"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_276"] . "<br/>";
}
if (!(empty($_POST["input_277"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_277"] . "<br/>";
}
if (!(empty($_POST["input_278"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_278"] . "<br/>";
}
if (!(empty($_POST["input_279"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_279"] . "<br/>";
}

if (!(empty($_POST["input_280"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_280"] . "<br/>";
}

if (!(empty($_POST["input_281"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_281"] . "<br/>";
}

if (!(empty($_POST["input_282"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_282"] . "<br/>";
}

if (!(empty($_POST["input_283"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_283"] . "<br/>";
}

if (!(empty($_POST["input_284"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_284"] . "<br/>";
}

if (!(empty($_POST["input_285"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_285"] . "<br/>";
}

if (!(empty($_POST["input_286"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_286"] . "<br/>";
}

if (!(empty($_POST["input_287"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_287"] . "<br/>";
}

if (!(empty($_POST["input_288"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_288"] . "<br/>";
}

if (!(empty($_POST["input_289"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_289"] . "<br/>";
}

if (!(empty($_POST["input_290"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_290"] . "<br/>";
}

if (!(empty($_POST["input_291"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_291"] . "<br/>";
}

if (!(empty($_POST["input_292"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_292"] . "<br/>";
}
if (!(empty($_POST["input_293"]))) {
    $mailBody .= '<strong>Nome Prenome  : &emsp;</strong>' . $_POST["input_293"] . "<br/>";
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

$body = "From: " . $_POST["input_1"] . "\n E-Mail: " . $_POST["input_1"] . "\n Message:\n " . $_POST["input_1"] . " tel:\n  " . $_POST["input_1"];

if ($captcha !== '') {
    if (mail($to, $subject, $body, $from)) {
        echo '<p>Your message has been sent!</p>';
    } else {
        echo '<p>Something went wrong, go back and try again!</p>';
    }
} else if ($_POST['submit'] && $captcha !== '') {
    echo '<p>You answered the anti-spam question incorrectly!</p>';
}