<?php

namespace App\Http\Controllers;
use InfluxDB2\Client;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use InfluxDB2\Model\FluxTableMetaData;

class HistoryController extends Controller
{
    public $client,$bucket;
    public function __construct()
    {
        $this->bucket = "PowerMeter";
        $this->client =  new Client([
            "url" => env('INFLUXDB_HOST'),
            "token" => env('INFLUXDB_TOKEN'),
            "bucket" =>  env('INFLUXDB_BUCKET'),
            "org" =>  env('INFLUXDB_ORG'),
        ]);
    }

    public function index(){
        $bucket = 'PowerMeter';
        $query = "from(bucket: \"$bucket\")
        |> range(start: -1y)
        |> filter(fn: (r) => r._measurement == \"Value\")
        |> filter(fn: (r) => r[\"_field\"] == \"voltage\")
        ";
        $queryApi = $this->client->createQueryApi();

        $data = [];
        $records = $queryApi->query($query, env('INFLUXDB_ORG'));
        foreach ($records as $dat) {
            $lol = $dat->records;
            foreach ($lol as $key ) {
                $lol = json_decode(json_encode($key->values), false);
                $data[] = $lol;
            }
        }


        // dd(count($data));
        return view("history.index",compact("data"));
    }

    public function dataInfluxAjax(Request $request){
        $bucket = 'PowerMeter';

        $query = "from(bucket: \"$bucket\")
        |> range(start: -1y)
        |> filter(fn: (r) => r._measurement == \"Value\")
        |> filter(fn: (r) => r[\"_field\"] == \"voltage\")
        |> limit(n: 1)";

        $queryApi = $this->client->createQueryApi();

        $data = [];
        $records = $queryApi->query($query, env('INFLUXDB_ORG'));

        foreach ($records as $dat) {
            $lol = $dat->records;
            foreach ($lol as $key ) {
                $lol = json_decode(json_encode($key->values), false);
                $data[] = $lol;
            }
        }
        $records = $queryApi->query($query, env('INFLUXDB_ORG'));

        return response()->json($records);
    }

}
