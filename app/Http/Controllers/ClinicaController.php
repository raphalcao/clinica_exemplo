<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Agenda;

class clinicaController extends Controller
{
    private $url ="http://clinic5.feegow.com.br/components/public/api/";
    private $token ="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJmZWVnb3ciLCJhdWQiOiJwdWJsaWNhcGkiLCJpYXQiOiIxNy0wOC0yMDE4IiwibGljZW5zZUlEIjoiMTA1In0.UnUQPWYchqzASfDpVUVyQY0BBW50tSQQfVilVuvFG38";
    
    
    public function index()
    {
        $link = $this->GetConnectApi('specialties/list');
        $indicacao = $this->getIndicacao();
        return view('clinica.index')->with(['ocupacao'=> $link, 'origem'=> $indicacao]);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $agenda = new Agenda();
        $agenda->fill($input);
        $agenda->date_time = date("Y-m-d H:i:s");
        

        try {
            $agenda->save();
            return ['code'=> 0 , 'msg'=>'Dados cacastrados com sucesso!', 'obj'=>$agenda];
            

        } catch (\Exception $e) {
            return ['code'=> 1 , 'msg'=>'Erro ao salvar os dados!\n'.$e, 'obj'=>$agenda];
        }
        
        
    }
    
    public function getProfissionais($id)
    {
        try {
            $link = $this->GetConnectApi('professional/list?especialidade_id='.$id);
            return response()->json($link);
        } catch (\Exception $e) {
            return [];
        }
    }

    public function getIndicacao()
    {
        $indicacao = $this->GetConnectApi('patient/list-sources');
        return $indicacao;
    }


    public function GetConnectApi($endereco)
    {
        $client = new Client();
        $response = $client->request('GET', $this->url.$endereco,[
            'headers' => [
                'Host' => 'api.feegow.com.br',
                'Content-Type'=> 'application/json',
                'x-access-token'=> $this->token,
            ]]);
        $data = json_decode($response->getBody(),true);
        
        return $data['content'];
    }
}
