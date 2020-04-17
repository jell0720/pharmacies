<?php

$fh = fopen(dirname(__DIR__) . '/raw/lanma.csv', 'r');
$head = fgetcsv($fh, 2048);
$ref = array();
while($line = fgetcsv($fh, 2048)) {
    $ref[$line[0]] = array($line[6], $line[5]);
}
fclose($fh);
/*
geocoding from https://maps.nlsc.gov.tw/T09/mapshow.action?language=ZH
*/
$ref['2331200010'] = array(121.711626,24.935877);
$ref['2345130012'] = array(121.304189,23.345992);
$ref['5937010882'] = array(120.597116,24.08167);
$ref['5937010908'] = array(120.536861,24.089358);
/*
geocoding from littlebtc at g0v slack
*/
$ref['5903270810'] = array(120.639038,24.182868);
$ref['5903270918'] = array(120.637262,24.177244);
$ref['5903271068'] = array(120.637229,24.178166);

$ref['5931016004'] = array(121.464886,25.018384); // corrected by Yiwen Chen from FB
$ref['5931033130'] = array(121.517612,25.006090); // https://github.com/WJWang/mask-help-info-api/issues/2#issuecomment-589128402

$ref['5931033176'] = array(121.518552,25.007578); // https://github.com/kiang/pharmacies/issues/7
$ref['5931101455'] = array(121.461145,25.136232); // https://github.com/kiang/pharmacies/issues/7
$ref['5931100092'] = array(121.461358,25.136273); // https://github.com/kiang/pharmacies/issues/7
$ref['5901092078'] = array(121.519123,25.0573489); // https://github.com/kiang/pharmacies/issues/8

$ref['5932023094'] = array(121.217593,24.962847); // https://geobingan.info/report/04d252bd51d944379835d8dfa18dc2c2

$ref['5931080148'] = array(121.352382,24.954769); // https://github.com/kiang/pharmacies/issues/13
$ref['5932021643'] = array(121.226650,24.951139); // https://github.com/kiang/pharmacies/issues/13
$ref['5932022373'] = array(121.229109,24.946061); // https://github.com/kiang/pharmacies/issues/13
$ref['5941041322'] = array(120.254197,23.181737); // https://www.ptt.cc/bbs/Gossiping/M.1585483490.A.DAD.html
$ref['5939032180'] = array(120.430587,23.705627); // https://github.com/kiang/pharmacies/issues/16

/*
from https://github.com/kiang/pharmacies/issues/17
*/
$ref['2331070012'] = array(121.428716,24.996303);
$ref['2331260016'] = array(121.927504,25.055024);
$ref['2339110013'] = array(120.412821,23.771875);
$ref['5901013362'] = array(121.563947,25.049197);
$ref['5901092041'] = array(121.514571,25.071915);
$ref['5901103352'] = array(121.549061,25.082382);
$ref['5901103487'] = array(121.532082,25.060400);
$ref['5901122026'] = array(121.583450,25.043126);
$ref['5901152293'] = array(121.508591,25.088537);
$ref['5901163394'] = array(121.514907,25.110531);
$ref['5901203062'] = array(121.555001,25.000892);
$ref['5901203259'] = array(121.557618,24.999088);
$ref['5902032674'] = array(120.305351,22.660672);
$ref['5902040112'] = array(120.327184,22.727096);
$ref['5903010412'] = array(120.727144,24.248063);
$ref['5903200514'] = array(120.673491,24.114785);
$ref['5903260618'] = array(120.677466,24.153032);
$ref['5903271040'] = array(120.645264,24.178554);
$ref['5903271068'] = array(120.637434,24.178288);
$ref['5903290787'] = array(120.720635,24.175824);
$ref['5905010214'] = array(120.312765,23.306243);
$ref['5905040132'] = array(120.246829,23.183859);
$ref['5905070121'] = array(120.303264,23.132131);
$ref['5905200085'] = array(120.291583,23.072132);
$ref['5905310344'] = array(120.251894,23.030693);
$ref['5905310620'] = array(120.247220,23.020975);
$ref['5905310835'] = array(120.228876,23.016726);
$ref['5905310871'] = array(120.266040,23.008166);
$ref['5905320260'] = array(120.237263,22.981164);
$ref['5905320724'] = array(120.225751,22.976725);
$ref['5905320733'] = array(120.214407,22.975589);
$ref['5905340253'] = array(120.191937,22.988292);
$ref['5907010883'] = array(120.327814,22.593148);
$ref['5907010963'] = array(120.347655,22.635081);
$ref['5907010981'] = array(120.328548,22.593692);
$ref['5907080214'] = array(120.338154,22.686278);
$ref['5907290121'] = array(120.300182,22.655108);
$ref['5907300631'] = array(120.311526,22.674289);
$ref['5907300659'] = array(120.321601,22.680919);
$ref['5907300686'] = array(120.309050,22.665989);
$ref['5907320400'] = array(120.334389,22.646746);
$ref['5907320553'] = array(120.322368,22.660446);
$ref['5907320580'] = array(120.294088,22.645961);
$ref['5907350239'] = array(120.300904,22.611399);
$ref['5907350480'] = array(120.306606,22.620547);
$ref['5907350551'] = array(120.331269,22.630132);
$ref['5907360520'] = array(120.335822,22.605952);
$ref['5911011601'] = array(121.747172,25.135395);
$ref['5911041305'] = array(121.742569,25.128410);
$ref['5911071447'] = array(121.747715,25.130153);
$ref['5911071590'] = array(121.764669,25.128273);
$ref['5912042762'] = array(120.962876,24.805749);
$ref['5912051412'] = array(120.940408,24.777813);
$ref['5917032891'] = array(120.672803,24.146869);
$ref['5917062773'] = array(120.641852,24.172789);
$ref['5917062988'] = array(120.653637,24.164839);
$ref['5917063403'] = array(120.643014,24.178077);
$ref['5931014751'] = array(121.459875,25.003355);
$ref['5931015187'] = array(121.456962,25.007864);
$ref['5931016791'] = array(121.476727,25.017009);
$ref['5931017574'] = array(121.467330,25.006494);
$ref['5931025110'] = array(121.487187,25.081935);
$ref['5931025307'] = array(121.496124,25.068538);
$ref['5931025432'] = array(121.492928,25.067418);
$ref['5931025727'] = array(121.486085,25.079130);
$ref['5931025763'] = array(121.483978,25.078025);
$ref['5931033176'] = array(121.518554,25.007577);
$ref['5931033621'] = array(121.517126,24.999207);
$ref['5931033961'] = array(121.520809,25.007672);
$ref['5931041061'] = array(121.483625,24.998936);
$ref['5931053070'] = array(121.539688,24.972839);
$ref['593106A388'] = array(121.424699,25.024213);
$ref['593106A566'] = array(121.448094,25.043428);
$ref['593106A691'] = array(121.449337,25.034075);
$ref['593106A842'] = array(121.428033,25.010637);
$ref['593106A922'] = array(121.422693,25.021561);
$ref['593106A931'] = array(121.426295,25.023981);
$ref['5931091641'] = array(121.378779,24.943786);
$ref['5931100305'] = array(121.449201,25.178884);
$ref['5931102274'] = array(121.441488,25.171079);
$ref['5931112378'] = array(121.645880,25.089565);
$ref['5931132236'] = array(121.440660,24.976270);
$ref['5931133019'] = array(121.458013,24.988606);
$ref['5931133064'] = array(121.442902,24.980910);
$ref['5931133135'] = array(121.448702,24.982769);
$ref['5931133313'] = array(121.436110,24.967061);
$ref['5931133466'] = array(121.455330,24.981966);
$ref['5931133519'] = array(121.452184,24.985637);
$ref['5931133528'] = array(121.442301,24.978911);
$ref['5931142974'] = array(121.462428,25.083356);
$ref['5931143024'] = array(121.481207,25.085375);
$ref['5932013285'] = array(121.315670,24.990985);
$ref['5932013918'] = array(121.290307,24.990941);
$ref['5932022631'] = array(121.216267,24.955354);
$ref['5932052595'] = array(121.248438,25.024559);
$ref['5932052979'] = array(121.292112,25.046990);
$ref['5933031769'] = array(121.085214,24.741942);
$ref['5934012179'] = array(121.757017,24.756150);
$ref['5934012286'] = array(121.752341,24.755791);
$ref['5937010551'] = array(120.539782,24.077990);
$ref['5937013221'] = array(120.545113,24.071418);
$ref['5937013436'] = array(120.543885,24.062985);
$ref['5937013570'] = array(120.543714,24.089828);
$ref['5937031381'] = array(120.533124,24.104466);
$ref['5937031541'] = array(120.498225,24.109493);
$ref['5937031676'] = array(120.493257,24.114048);
$ref['5937041207'] = array(120.517983,23.873936);
$ref['5937041369'] = array(120.518194,23.872694);
$ref['5937050377'] = array(120.570767,23.957026);
$ref['5937052255'] = array(120.571460,23.963488);
$ref['5937061594'] = array(120.479668,23.956959);
$ref['5937061656'] = array(120.483311,23.958498);
$ref['5937070191'] = array(120.585030,23.860313);
$ref['5937081434'] = array(120.373354,23.899491);
$ref['5937081578'] = array(120.368923,23.899301);
$ref['5939041830'] = array(120.457735,23.799589);
$ref['5939041849'] = array(120.461032,23.796729);
$ref['5940131283'] = array(120.491368,23.447926);
$ref['5941281488'] = array(120.296068,22.966692);
$ref['5941312826'] = array(120.261709,23.021363);
$ref['5942081222'] = array(120.350152,22.702138);
$ref['5943014029'] = array(120.483776,22.670059);
$ref['5945013128'] = array(121.605704,23.981809);
$ref['5946020056'] = array(121.380341,23.101132);
$ref['5990010631'] = array(118.319622,24.434772);
$ref['5901163483'] = array(121.518051,25.118526);
$ref['5901153432'] = array(121.518016,25.088874);
$ref['5903220150'] = array(120.679361,24.148036);
$ref['5901184437'] = array(121.518356,25.029544);
$ref['5901184473'] = array(121.515500,25.043557);
$ref['5901190042'] = array(121.500722,25.029600);
$ref['5901192975'] = array(121.500294,25.026266);
$ref['5901203302'] = array(121.567629,24.988659);
$ref['5938022144'] = array(120.963386,23.964807);
$ref['5905340271'] = array(120.200758,22.992167);
$ref['5907320704'] = array(120.3224182,22.6488011); // https://github.com/kiang/pharmacies/issues/18
$ref['5917062406'] = array(120.655017,24.156876); // https://github.com/kiang/pharmacies/issues/19
$ref['5917072242'] = array(120.651540,24.153553); // https://github.com/kiang/pharmacies/issues/20
$ref['5903280601'] = array(120.649530,24.155145); // https://github.com/kiang/pharmacies/issues/21
$ref['5936030077'] = array(120.653571,24.381416); // https://github.com/kiang/pharmacies/issues/24
$ref['5936031583'] = array(120.654737,24.381160); // https://github.com/kiang/pharmacies/issues/25

$fh = fopen(dirname(__DIR__) . '/data.csv', 'r');
$pool = array();
$pool[] = fgetcsv($fh, 2048);
while($line = fgetcsv($fh, 2048)) {
    if(isset($ref[$line[0]])) {
        $line[12] = $ref[$line[0]][0];
        $line[13] = $ref[$line[0]][1];
    }
    $pool[] = $line;
}
fclose($fh);

$oFh = fopen(dirname(__DIR__) . '/data.csv', 'w');
foreach($pool AS $line) {
    fputcsv($oFh, $line);
}