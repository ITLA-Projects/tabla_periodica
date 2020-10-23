<html>
 <head>
    <link rel="stylesheet" href="css/styles.css">
  <title>Tabla Periodica</title>
 </head>
 <body>

 <div class="title">Tabla Periodica de los Elementos</div>
 
<div class="main">
 <?php 

$tipos = array("Alcalinos","Alcalinoterreos","Metales de Transicion","Lantanidos","Actanidos","Otros Metales","Metaloides","Otros No Metales","Halogenos","Gases Nobles"); 

$elementos = array(
//FILA 1
array('numero'=>'1','nombre'=>'Hidrogeno','simbolo'=>'H','tipo'=>7,'estado'=>true),
array('estado'=>false),array('estado'=>false),array('estado'=>false),array('estado'=>false),array('estado'=>false),
array('estado'=>false),array('estado'=>false),array('estado'=>false),array('estado'=>false),array('estado'=>false),
array('estado'=>false),array('estado'=>false),array('estado'=>false),array('estado'=>false),array('estado'=>false),
array('estado'=>false),
array('numero'=>'2','nombre'=>'Helio','simbolo'=>'He','tipo'=>9,'estado'=>true),

//FILA 2
array('numero'=>'3','nombre'=>'Litio','simbolo'=>'Li','tipo'=>0,'estado'=>true),
array('numero'=>'4','nombre'=>'Berilio','simbolo'=>'Be','tipo'=>1,'estado'=>true),
array('estado'=>false),array('estado'=>false),array('estado'=>false),array('estado'=>false),array('estado'=>false),
array('estado'=>false),array('estado'=>false),array('estado'=>false),array('estado'=>false),array('estado'=>false),
array('numero'=>'5','nombre'=>'Boro','simbolo'=>'B','tipo'=>6,'estado'=>true),
array('numero'=>'6','nombre'=>'Carbono','simbolo'=>'C','tipo'=>7,'estado'=>true),
array('numero'=>'7','nombre'=>'Nitrogeno','simbolo'=>'N','tipo'=>7,'estado'=>true),
array('numero'=>'8','nombre'=>'Oxigeno','simbolo'=>'O','tipo'=>7,'estado'=>true),
array('numero'=>'9','nombre'=>'Fluor','simbolo'=>'F','tipo'=>8,'estado'=>true),
array('numero'=>'10','nombre'=>'Neon','simbolo'=>'Ne','tipo'=>9,'estado'=>true),

//FILA 3
array('numero'=>'11','nombre'=>'Sodio','simbolo'=>'Na','tipo'=>0,'estado'=>true),
array('numero'=>'12','nombre'=>'Magnesio','simbolo'=>'Mg','tipo'=>1,'estado'=>true),
array('estado'=>false),array('estado'=>false),array('estado'=>false),array('estado'=>false),array('estado'=>false),
array('estado'=>false),array('estado'=>false),array('estado'=>false),array('estado'=>false),array('estado'=>false),
array('numero'=>'13','nombre'=>'Aluminio','simbolo'=>'Al','tipo'=>5,'estado'=>true),
array('numero'=>'14','nombre'=>'Silicio','simbolo'=>'Si','tipo'=>6,'estado'=>true),
array('numero'=>'15','nombre'=>'Fosforo','simbolo'=>'P','tipo'=>7,'estado'=>true),
array('numero'=>'16','nombre'=>'Azufre','simbolo'=>'S','tipo'=>7,'estado'=>true),
array('numero'=>'17','nombre'=>'Cloro','simbolo'=>'Cl','tipo'=>8,'estado'=>true),
array('numero'=>'18','nombre'=>'Argon','simbolo'=>'Ar','tipo'=>9,'estado'=>true),

//FILA 4
array('numero'=>'19','nombre'=>'Potasio','simbolo'=>'K','tipo'=>0,'estado'=>true),
array('numero'=>'20','nombre'=>'Calcio','simbolo'=>'Ca','tipo'=>1,'estado'=>true),
array('numero'=>'21','nombre'=>'Escandio','simbolo'=>'Sc','tipo'=>2,'estado'=>true),
array('numero'=>'22','nombre'=>'Titanio','simbolo'=>'Ti','tipo'=>2,'estado'=>true),
array('numero'=>'23','nombre'=>'Vanadio','simbolo'=>'V','tipo'=>2,'estado'=>true),
array('numero'=>'24','nombre'=>'Cromo','simbolo'=>'Cr','tipo'=>2,'estado'=>true),
array('numero'=>'25','nombre'=>'Manganeso','simbolo'=>'Mn','tipo'=>2,'estado'=>true),
array('numero'=>'26','nombre'=>'Hierro','simbolo'=>'Fe','tipo'=>2,'estado'=>true),
array('numero'=>'27','nombre'=>'Cobalto','simbolo'=>'Co','tipo'=>2,'estado'=>true),
array('numero'=>'28','nombre'=>'Niquel','simbolo'=>'Ni','tipo'=>2,'estado'=>true),
array('numero'=>'29','nombre'=>'Cobre','simbolo'=>'Cu','tipo'=>2,'estado'=>true),
array('numero'=>'30','nombre'=>'Zinc','simbolo'=>'Zn','tipo'=>2,'estado'=>true),
array('numero'=>'31','nombre'=>'Galio','simbolo'=>'Ga','tipo'=>5,'estado'=>true),
array('numero'=>'32','nombre'=>'Germanio','simbolo'=>'Ge','tipo'=>6,'estado'=>true),
array('numero'=>'33','nombre'=>'Arsenico','simbolo'=>'As','tipo'=>6,'estado'=>true),
array('numero'=>'34','nombre'=>'Selenio','simbolo'=>'Se','tipo'=>7,'estado'=>true),
array('numero'=>'35','nombre'=>'Bromo','simbolo'=>'Br','tipo'=>8,'estado'=>true),
array('numero'=>'36','nombre'=>'Kripton','simbolo'=>'Kr','tipo'=>9,'estado'=>true),

//FILA 5
array('numero'=>'37','nombre'=>'Rubidio','simbolo'=>'Rb','tipo'=>0,'estado'=>true),
array('numero'=>'38','nombre'=>'Estroncio','simbolo'=>'Sr','tipo'=>1,'estado'=>true),
array('numero'=>'39','nombre'=>'Itrio','simbolo'=>'Y','tipo'=>2,'estado'=>true),
array('numero'=>'40','nombre'=>'Circonio','simbolo'=>'Zr','tipo'=>2,'estado'=>true),
array('numero'=>'41','nombre'=>'Niobio','simbolo'=>'Nb','tipo'=>2,'estado'=>true),
array('numero'=>'42','nombre'=>'Molbdeno','simbolo'=>'Mo','tipo'=>2,'estado'=>true),
array('numero'=>'43','nombre'=>'Tecnecio','simbolo'=>'Tc','tipo'=>2,'estado'=>true),
array('numero'=>'44','nombre'=>'Ruterio','simbolo'=>'Ru','tipo'=>2,'estado'=>true),
array('numero'=>'45','nombre'=>'Rodio','simbolo'=>'Rh','tipo'=>2,'estado'=>true),
array('numero'=>'46','nombre'=>'Paladio','simbolo'=>'Pd','tipo'=>2,'estado'=>true),
array('numero'=>'47','nombre'=>'Plata','simbolo'=>'Ag','tipo'=>2,'estado'=>true),
array('numero'=>'48','nombre'=>'Cadmio','simbolo'=>'Cd','tipo'=>2,'estado'=>true),
array('numero'=>'49','nombre'=>'Indio','simbolo'=>'In','tipo'=>5,'estado'=>true),
array('numero'=>'50','nombre'=>'Estaño','simbolo'=>'Sn','tipo'=>5,'estado'=>true),
array('numero'=>'51','nombre'=>'Antimonio','simbolo'=>'Sb','tipo'=>6,'estado'=>true),
array('numero'=>'52','nombre'=>'Telurio','simbolo'=>'Te','tipo'=>6,'estado'=>true),
array('numero'=>'53','nombre'=>'Yodo','simbolo'=>'I','tipo'=>8,'estado'=>true),
array('numero'=>'54','nombre'=>'Xenon','simbolo'=>'Xe','tipo'=>9,'estado'=>true),

//FILA 6
array('numero'=>'55','nombre'=>'Celsio','simbolo'=>'Cs','tipo'=>0,'estado'=>true),
array('numero'=>'56','nombre'=>'Bario','simbolo'=>'Ba','tipo'=>1,'estado'=>true),
array('numero'=>'57-71','nombre'=>'Lantanidos','simbolo'=>'La-Lu','tipo'=>3,'estado'=>true),
array('numero'=>'72','nombre'=>'Hafmio','simbolo'=>'Hf','tipo'=>2,'estado'=>true),
array('numero'=>'73','nombre'=>'Tantalo','simbolo'=>'Ta','tipo'=>2,'estado'=>true),
array('numero'=>'74','nombre'=>'Wolframio','simbolo'=>'W','tipo'=>2,'estado'=>true),
array('numero'=>'75','nombre'=>'Renio','simbolo'=>'Re','tipo'=>2,'estado'=>true),
array('numero'=>'76','nombre'=>'Osmio','simbolo'=>'Os','tipo'=>2,'estado'=>true),
array('numero'=>'77','nombre'=>'Indio','simbolo'=>'Ir','tipo'=>2,'estado'=>true),
array('numero'=>'78','nombre'=>'Platino','simbolo'=>'Pt','tipo'=>2,'estado'=>true),
array('numero'=>'79','nombre'=>'Oro','simbolo'=>'Au','tipo'=>2,'estado'=>true),
array('numero'=>'80','nombre'=>'Mercurio','simbolo'=>'Hg','tipo'=>2,'estado'=>true),
array('numero'=>'81','nombre'=>'Talio','simbolo'=>'Tl','tipo'=>5,'estado'=>true),
array('numero'=>'82','nombre'=>'Plomo','simbolo'=>'Pb','tipo'=>5,'estado'=>true),
array('numero'=>'83','nombre'=>'Bismuto','simbolo'=>'Bi','tipo'=>5,'estado'=>true),
array('numero'=>'84','nombre'=>'Polonio','simbolo'=>'Po','tipo'=>6,'estado'=>true),
array('numero'=>'85','nombre'=>'Astato','simbolo'=>'At','tipo'=>8,'estado'=>true),
array('numero'=>'86','nombre'=>'Radon','simbolo'=>'Rn','tipo'=>9,'estado'=>true),

//FILA 7
array('numero'=>'87','nombre'=>'Francio','simbolo'=>'Fr','tipo'=>0,'estado'=>true),
array('numero'=>'88','nombre'=>'Radio','simbolo'=>'Ra','tipo'=>1,'estado'=>true),
array('numero'=>'89-103','nombre'=>'Actinidos','simbolo'=>'Ac-Lr','tipo'=>4,'estado'=>true),
array('numero'=>'104','nombre'=>'Rutherfordio','simbolo'=>'Rf','tipo'=>2,'estado'=>true),
array('numero'=>'105','nombre'=>'Dubnio','simbolo'=>'Db','tipo'=>2,'estado'=>true),
array('numero'=>'106','nombre'=>'Seaborgio','simbolo'=>'Sg','tipo'=>2,'estado'=>true),
array('numero'=>'107','nombre'=>'Bohrio','simbolo'=>'Bh','tipo'=>2,'estado'=>true),
array('numero'=>'108','nombre'=>'Haslo','simbolo'=>'Hs','tipo'=>2,'estado'=>true),
array('numero'=>'109','nombre'=>'Meltnerio','simbolo'=>'Mt','tipo'=>2,'estado'=>true),
array('numero'=>'110','nombre'=>'Damastio','simbolo'=>'Ds','tipo'=>2,'estado'=>true),
array('numero'=>'111','nombre'=>'Rosenbgenio','simbolo'=>'Rg','tipo'=>2,'estado'=>true),
array('numero'=>'112','nombre'=>'Copemicio','simbolo'=>'Cn','tipo'=>2,'estado'=>true),
array('numero'=>'113','nombre'=>'Nhonio','simbolo'=>'Nh','tipo'=>5,'estado'=>true),
array('numero'=>'114','nombre'=>'Flerovlo','simbolo'=>'Fl','tipo'=>5,'estado'=>true),
array('numero'=>'115','nombre'=>'Moscovio','simbolo'=>'Mc','tipo'=>5,'estado'=>true),
array('numero'=>'116','nombre'=>'Livermorio','simbolo'=>'Lv','tipo'=>5,'estado'=>true),
array('numero'=>'117','nombre'=>'Teneso','simbolo'=>'Ts','tipo'=>8,'estado'=>true),
array('numero'=>'118','nombre'=>'Oganeson','simbolo'=>'Og','tipo'=>9,'estado'=>true),
);

$elementos_extras = array(
//FILA 1
array('estado'=>false),array('estado'=>false),array('estado'=>false),
array('numero'=>'57','nombre'=>'Latano','simbolo'=>'La','tipo'=>3,'estado'=>true),
array('numero'=>'58','nombre'=>'Cerio','simbolo'=>'Ce','tipo'=>3,'estado'=>true),
array('numero'=>'59','nombre'=>'Prasceodimio','simbolo'=>'Pr','tipo'=>3,'estado'=>true),
array('numero'=>'60','nombre'=>'Neodimio','simbolo'=>'Nd','tipo'=>3,'estado'=>true),
array('numero'=>'61','nombre'=>'Prometio','simbolo'=>'Pm','tipo'=>3,'estado'=>true),
array('numero'=>'62','nombre'=>'Samario','simbolo'=>'Sm','tipo'=>3,'estado'=>true),
array('numero'=>'63','nombre'=>'Europio','simbolo'=>'Eu','tipo'=>3,'estado'=>true),
array('numero'=>'64','nombre'=>'Gadolinio','simbolo'=>'Gd','tipo'=>3,'estado'=>true),
array('numero'=>'65','nombre'=>'Terbio','simbolo'=>'Tb','tipo'=>3,'estado'=>true),
array('numero'=>'66','nombre'=>'Disprosio','simbolo'=>'Dy','tipo'=>3,'estado'=>true),
array('numero'=>'67','nombre'=>'Holmio','simbolo'=>'Ho','tipo'=>3,'estado'=>true),
array('numero'=>'68','nombre'=>'Erbio','simbolo'=>'Er','tipo'=>3,'estado'=>true),
array('numero'=>'69','nombre'=>'Tulio','simbolo'=>'Tm','tipo'=>3,'estado'=>true),
array('numero'=>'70','nombre'=>'Iterbio','simbolo'=>'Yb','tipo'=>3,'estado'=>true),
array('numero'=>'71','nombre'=>'Lutercio','simbolo'=>'Lu','tipo'=>3,'estado'=>true),

//FILA 2
array('estado'=>false),array('estado'=>false),array('estado'=>false),
array('numero'=>'89','nombre'=>'Actinio','simbolo'=>'Ac','tipo'=>4,'estado'=>true),
array('numero'=>'90','nombre'=>'Torio','simbolo'=>'Th','tipo'=>4,'estado'=>true),
array('numero'=>'91','nombre'=>'Proctanio','simbolo'=>'Pa','tipo'=>4,'estado'=>true),
array('numero'=>'92','nombre'=>'Uranio','simbolo'=>'U','tipo'=>4,'estado'=>true),
array('numero'=>'93','nombre'=>'Neptunio','simbolo'=>'Np','tipo'=>4,'estado'=>true),
array('numero'=>'94','nombre'=>'Plutonio','simbolo'=>'Pu','tipo'=>4,'estado'=>true),
array('numero'=>'95','nombre'=>'Americio','simbolo'=>'Am','tipo'=>4,'estado'=>true),
array('numero'=>'96','nombre'=>'Curlo','simbolo'=>'Cm','tipo'=>4,'estado'=>true),
array('numero'=>'97','nombre'=>'Berkelio','simbolo'=>'Bk','tipo'=>4,'estado'=>true),
array('numero'=>'98','nombre'=>'Californio','simbolo'=>'Cf','tipo'=>4,'estado'=>true),
array('numero'=>'99','nombre'=>'Einstenio','simbolo'=>'Es','tipo'=>4,'estado'=>true),
array('numero'=>'100','nombre'=>'Fermio','simbolo'=>'Fm','tipo'=>4,'estado'=>true),
array('numero'=>'101','nombre'=>'Mendelevio','simbolo'=>'Md','tipo'=>4,'estado'=>true),
array('numero'=>'102','nombre'=>'Nobelio','simbolo'=>'No','tipo'=>4,'estado'=>true),
array('numero'=>'103','nombre'=>'Lawencio','simbolo'=>'Lr','tipo'=>4,'estado'=>true),
);
 

for ($i = 0; $i < count($elementos); $i++) {
    //row invoke
    if($i === 0 || $i === 18 ||$i === 36 ||$i === 54 ||$i === 72 ||$i === 90 ||$i === 108){
    echo "<div class='periodic-row'>";
    }
    //cell invoke
    if ($elementos[$i]['estado']) {
        echo "
        <div class='cell color-{$elementos[$i]['tipo']}' onclick = 'blockit(this)'>
            <div class='at_num'>{$elementos[$i]['numero']}</div>
            <div class='symbol'>{$elementos[$i]['simbolo']}</div>
            <div class='at_details'>{$elementos[$i]['nombre']}</div>
            <div id='erase' class='block'></div>
            </div>" 
            ;
    }else{
        echo "<div class='cell empty'></div>";
    }
    //row close
    if($i === 17 ||$i === 35 ||$i === 53 ||$i === 71 ||$i === 89 ||$i === 107 || $i === 125){
        echo "</div>";
    }
}
echo "<div class='space'></div>";

for ($i = 0; $i < count($elementos_extras); $i++) {
    //row invoke
    if($i === 0 || $i === 18 ||$i === 36 ||$i === 54 ||$i === 72 ||$i === 90 ||$i === 108){
    echo "<div class='periodic-row'>";
    }
    //cell invoke
    if ($elementos_extras[$i]['estado']) {
        echo "
        <div class='cell color-{$elementos_extras[$i]['tipo']}' onclick = 'blockit(this)'>
            <div class='at_num'>{$elementos_extras[$i]['numero']}</div>
            <div class='symbol'>{$elementos_extras[$i]['simbolo']}</div>
            <div class='at_details'>{$elementos_extras[$i]['nombre']}</div>
            <div id='erase' class='block'></div>
            </div>" 
            ;
    }else{
        echo "<div class='cell empty'></div>";
    }
    //row close
    if($i === 17 ||$i === 35 ||$i === 53 ||$i === 71 ||$i === 89 ||$i === 107 || $i === 125){
        echo "</div>";
    }
}






 ?>


 </div>
 <div class='space'></div>
 <div class="main-legend">
     <div class="text-legend">Leyenda</div>
    <div class="legend">
        <div class="color-0 legend-item">Alcalinos</div>
        <div class="color-1 legend-item">AlcalinoTerreos</div>
        <div class="color-2 legend-item">Metales de Transicion</div>
        <div class="color-3 legend-item">Lantanidos</div>
        <div class="color-4 legend-item">Actinidos</div>
        <div class="color-5 legend-item">Otros Metales</div>
        <div class="color-6 legend-item">Metaloides</div>
        <div class="color-7 legend-item">Otros No Metales</div>
        <div class="color-8 legend-item">Halogenos</div>
        <div class="color-9 legend-item">Gases Nobles</div>
       
    </div>
 </div>
 <script type = "text/javascript" src="js/app.js"></script> 
 </body>
</html>