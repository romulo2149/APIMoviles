<?php

namespace App\Http\Controllers;

use App\Lib\Direccion;
use Illuminate\Http\Request;

class MapaController extends Controller
{
    public function Mapa()
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

    public function Ruta($url, $lat, $lon)
    {
        $url2 = urldecode($url);
        $url3 = str_replace('/', '', $url2);
        $dir = 'https://maps.googleapis.com/maps/api/directions/json?origin=19.0001543,-98.18490077&destination=19.0001543,-98.18490077&waypoints=optimize:true'.$url3.'&key=AIzaSyCVwIuBVBfrIzSxWJthR5BTi1e2uerXAUE';
        //$dir2 = 'https://maps.googleapis.com/maps/api/directions/json?origin=19.0001543,-98.18490077&destination=19.0001543,-98.18490077&waypoints=optimize:true|Naranjos 8705, Campestre del Valle, 72595 Puebla, Pue., Mexico|Astronomía 7704, Universidad, 72590 Puebla, Pue., Mexico|Calle Rúa de Onix LB, La Joya, 72520 Puebla, Pue., Mexico|Alejandra 132, Lomas del Mármol, 72574 Puebla, Pue., Mexico|PARQUE, Entre Calle Hda. de 3 Jagüeyes, Hda. de La Capilla 2462 - 2, La Hacienda, 72570 Puebla, Pue., Mexico|Calle Ignacio Zaragoza 2203, Universidad, 72590 Puebla, Pue., Mexico|Avenida Escolar, Cd Universitaria, Cdad. Universitaria, 72592 Puebla, Pue., Mexico|Blvd. Jose Maria Lafragua No. 8738 San Francisco Totimehuacan. Fraccionamiento Lomas Del Valle Calle Valle de la Paloma - Manzana 24, San Francisco Totimehuacan, Puebla, Pue., Mexico|De La Unión 420, INFONAVIT la Margarita, Puebla, Pue., Mexico|Blvrd Circunvalación 2203, Jardines de San Manuel, 72570 Puebla, Pue., Mexico|Municipio Libre (22), INFONAVIT la Margarita, Puebla, Pue., Mexico|Vicente de Paul - 24 Sur, Tres Cruces, Puebla, Pue., Mexico|San Lorenzo 6369_1, Camino Real, 72595 Puebla, Pue., Mexico|Galáctica 62A, La Calera, 72520 Puebla, Pue., Mexico&key=AIzaSyCVwIuBVBfrIzSxWJthR5BTi1e2uerXAUE';
        //$json = file_get_contents($dir);
        return response()->json(['j' => $dir]);
    }

    public function Ruta2()
    {
        $dir2 = 'https://maps.googleapis.com/maps/api/directions/json?origin=19.0001543,-98.18490077&destination=19.0001543,-98.18490077&waypoints=optimize:true|Naranjos 8705, Campestre del Valle, 72595 Puebla, Pue., Mexico|Astronomía 7704, Universidad, 72590 Puebla, Pue., Mexico|Calle Rúa de Onix LB, La Joya, 72520 Puebla, Pue., Mexico|Alejandra 132, Lomas del Mármol, 72574 Puebla, Pue., Mexico|PARQUE, Entre Calle Hda. de 3 Jagüeyes, Hda. de La Capilla 2462 - 2, La Hacienda, 72570 Puebla, Pue., Mexico|Calle Ignacio Zaragoza 2203, Universidad, 72590 Puebla, Pue., Mexico|Avenida Escolar, Cd Universitaria, Cdad. Universitaria, 72592 Puebla, Pue., Mexico|Blvd. Jose Maria Lafragua No. 8738 San Francisco Totimehuacan. Fraccionamiento Lomas Del Valle Calle Valle de la Paloma - Manzana 24, San Francisco Totimehuacan, Puebla, Pue., Mexico|De La Unión 420, INFONAVIT la Margarita, Puebla, Pue., Mexico|Blvrd Circunvalación 2203, Jardines de San Manuel, 72570 Puebla, Pue., Mexico|Municipio Libre (22), INFONAVIT la Margarita, Puebla, Pue., Mexico|Vicente de Paul - 24 Sur, Tres Cruces, Puebla, Pue., Mexico|San Lorenzo 6369_1, Camino Real, 72595 Puebla, Pue., Mexico|Galáctica 62A, La Calera, 72520 Puebla, Pue., Mexico&key=AIzaSyCVwIuBVBfrIzSxWJthR5BTi1e2uerXAUE';
        $json = file_get_contents($dir2);
        return response()->json($json);
    }
}
