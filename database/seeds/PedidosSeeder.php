<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Lib\Direccion;

class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Pedido');
        for($i = 1 ; $i <= 30 ; $i++){
        	DB::table('pedidos')->insert([
            'descripcion' => $faker->randomElement(['Reloj para caballero Tissot T-Classic Chemin des Tourelles T0994073644700 chocolate','Reloj para caballero Tissot T-Classic Chemin des Tourelles T0994071604800 azul marino','Box set de reloj para caballero Ferrari Aspire 870030 rojo','Reloj para caballero Oris Aquis Titanium Date 73377307153-0782415PEB','Reloj para caballero CAT Boston 3HD AD14134127 negro','Reloj para caballero Tissot T-Classic Chemin des Tourelles T0994071604700 azul marino','Reloj para caballero Ferrari Primatto SF.830444 negro','Reloj para Caballero Giorgio Armani','Reloj para caballero Nautica Forbell NAPFRL002 azul marino','Mido Multifort Adventure M0254073606110 Reloj para Caballero Color Café','Reloj para caballero Edox Les Bemonts 400023AR negro','Reloj para caballero Tissot Everytime T1094071605100 negro','Scuderia Ferrari Red Rev SF.830249 Reloj para Caballero Color Negro','Citizen Avion 60715 Reloj para Caballero Color Café','Reloj para caballero Diesel Ms9 Chrono DZ4489 negro','Tag Heuer Carrera CAR208Z.FT6046 Reloj para Caballero Color Negro','Reloj para caballero Orient Sports Quartz FKV01004B0 negro','Reloj para caballero Orient Sports Quartz FUNG2003B0 negro','Reloj para caballero Emporio Armani Renato AR11047','Reloj unisex Calvin Klein Minimal K3M2T626','Reloj para caballero Claude Bernard Sophisticated Classics 01002.3.NIN negro','Reloj unisex Diesel Franchise DZ1436 blanco','Reloj para caballero Ferrari XX Kers 830463 negro','Nautica Maui NAPMAU001 Reloj para Caballero Color Negro','Reloj para caballero Claude Bernard Sophisticated Classics 64005.3.BUIN azul marino','Reloj para caballero Nine2Five Rude DES.ARDE07NGAZ negro','Reloj para caballero Ice Watch Steel St.bk.b.i.18 negro','Box set de reloj unisex Armitron Sport 408448BKST negro','Reloj para caballero Longines Conquest V.H.P. L37262569 negro','Reloj para caballero A/X AX2400 negro','Mido Multifort M0184304405280 Reloj para Caballero Color Gris','Reloj para caballero Puma Cat Instict PU104091005 azul','Reloj para caballero Tommy Hilfiger TH.179.127.3 negro','Reloj para caballero Orient Sports Quartz FKV01003B0 negro','Reloj para caballero Tommy Hilfiger Cooper 1791512','Lacoste L.12.12 LC.201.0819 Reloj para Caballero Color Blanco','Reloj para caballero Tissot Heritage Visodate T0194301103100','Reloj para caballero Casio G-Shock GST-S300G-1A2CR negro','Victorinox Swiss Army Maverick 241697 Reloj Fino para Caballero Color Acero','Reloj para caballero Orient Sports Quartz FUNG2005D0 negro','Reloj para caballero Rado Coupole Classic R22860045 negro','Reloj unisex Umbro Sport UMB-032-3 negro','Tudor Heritage Advisor M79620TN-0002 Reloj para Caballero Color Negro','Reloj para caballero Tw Steel Son Of Time Tempus Fury MST14 negro','Reloj para caballero Wenger Attitude Chrono 01.1543.109 azul','Reloj para caballero Victorinox Maverick 241787 negro','Reloj unisex AMPM Club PM191-U507 rosa claro','Reloj para caballero Tissot T-Sport Chrono XL T1166171605700 negro','Reloj para caballero Claude Bernard Slim 20219.3.BUIN azul marino','Reloj para caballero Tissot Chrono XL NBA Teams New York Knicks T1166173605105 negro','Reloj para caballero Armitron Adventure AD1011YLW amarillo','Reloj para caballero Tw Steel Steel Pilot TW935 gris obscuro','Reloj para Caballero Mido Belluna II M0246303606100 café','Reloj unisex Ball Engineer II NM3022C-N1CJ-BK negro','Reloj para caballero Bomberg BB68 NS4.203','Scuderia Ferrari Red Rev T SF.830253 Reloj para Caballero Color Negro','Box set de reloj unisex Armitron Sport 408448BLST azul','Reloj para caballero Claude Bernard Sophisticated Classics 83014.3.BUIN azul marino','Reloj unisex Perrelet Turbine XL A1051/6 rojo','Reloj para caballero Lacoste LC.201.0763 verde obscuro','Luminox Sea A.3082 Reloj Fino para Caballero Color Negro','Reloj para caballero Fossil The Commuter Chrono FS5402 café','Reloj para caballero Armitron Color Line 408284RDBK rojo','Reloj para caballero Skechers Ardmore SR5042 negro','Reloj para caballero Oris Propilot 75276984264-0752219GFC negro','Reloj para caballero Tissot T-Sport V8 T1064071103100','Reloj para caballero Swatch SUSB104 negro','Reloj para caballero Citizen Corso 60711 dorado','Diesel Rasp DZ1802 Reloj para Caballero Color Café Obscuro','Reloj para caballero Puma Asphalt PU104211002 azul','Reloj para caballero Orient Sports Quartz FKU00002B0','Reloj para caballero Wenger Roadster 01.1841.105 café','Reloj para caballero Tag Heuer Carrera CAR2A1H.FT6101 negro','Reloj para caballero Tissot V8 T1064271605100 negro','Reloj para caballero Longines Conquest L38014566','Reloj unisex Umbro Sport UMB-01-5 dorado','Reloj para caballero Alexandre Christie Elegant Sapphire 8541MDBSSSL color plata','Reloj unisex Ziiiro Z0010WW blanco','Reloj para caballero Claude Bernard Sophisticated Classics 01002.37R.AI vino','Reloj para caballero Salvatore Ferragamo Time FFW02 negro','Reloj unisex AMPM Club PM193-U526 gris medio','Reloj para caballero Guess W1161G1 negro','Reloj para caballero Claude Bernard Sophistic 01002.3M2.AI','Box set de reloj para caballero Nautica NAST 07 NAPWHC005 azul','Citizen Drive Mens 60907 Reloj para Caballero Color Acero','Reloj para caballero Montblanc Star Legacy 117576 negro','Reloj para caballero Lacoste 12.12 2010984 blanco','Reloj para caballero Ferrari Speciale Multi SF.830458 negro','Reloj para caballero Timex Chesapeake TW2P77200','Reloj para caballero Armitron Pro Sport 205108RED negro','Reloj para caballero Junghans Max Bill 041/4463.44','Reloj para caballero Stührling Legacy 780.02 negro','Reloj unisex Ball Engineer Master II NM1080C-N5J-GY verde','Tag Heuer Carrera CAR2A8A.BF0707 Reloj para Caballero Color Acero','Reloj unisex Gucci G-Timeless YA1264067 negro','Reloj para caballero Raymond Weil Parsifal R5591L100300 negro','Reloj para caballero Bulova Clásicos 97B169 café obscuro','Box set de reloj para caballero Victorinox Alliance 241801.1','Reloj para caballero Ferrari Red Rev SF.830258 rojo']),
        	'direccion' => $this->Dir(),
            'fecha_entrega' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+2 days', $timezone = null),
            'entregado' => 'pendiente'
        ]);
        }
    }

    public function Dir()
    {
        $y0 = 18.999984;
        $x0 = -98.184949;
        $mapa = new Direccion;
        $arreglo = $mapa->randomDireccion();
        $url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='.$arreglo[0].','.$arreglo[1].'&sensor=true&key=AIzaSyCVwIuBVBfrIzSxWJthR5BTi1e2uerXAUE';
        $json = file_get_contents($url);
        $jsone = json_decode($json);
        $res = $jsone->results[0]->formatted_address;
        return $res;
    }
}
