<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zabbix extends CI_Controller{
    public function __construct(){
        parent::__construct();
        //$this->load->model('adminapi_model');

    }

    public function index(){
		/*
		$params = Array();
		$params["output"] = Array("hostid","host");
		$params["selectInterfaces"] = Array("interfaceid","ip");

		$z_data = $this->get_zabbix_req("host.get",$params);
		*/

		/*
		$params = Array();
		$params["output"] = "extend";
		$params["select_acknowledges"] = "extend";
		$params["selectTags"] = "extend";
		$params["selectSuppressionData"] = "extend ";
		$params["objectids"] = "10263 ";
		$params["sortfield"] = Array("clock" ,"eventid");
		$params["sortorder"] = "DESC";

		$z_data = $this->get_zabbix_req("event.get",$params);
		*/

		/*
		$params = Array();
		$params["output"] = "extend";
		$params["selectWidgets"] = "extend";
		$params["selectUsers"] = "extend";
		$params["dashboardids"] = Array("1" ,"2");

		$z_data = $this->get_zabbix_req("dashboard.get",$params);

		*/

		$params = Array();
		$params["output"] = "extend";
		$params["hostids"] = "10263";
		$params["sortfield"] = "name";

		$z_data = $this->get_zabbix_req("graph.get",$params);



		$HTML_CODE = '';
		//$HTML_CODE .= '<div><pre>'.print_r($z_data,true).'</pre></div>';
		//http://110.10.147.42:3000/d/-1dA38OZk/zabbix-template-linux-server?orgId=1&from=1566664196927&to=1566674996927&var-group=laidback&var-host=Web_Server_LB&var-netif=All

		foreach($z_data->result AS $key => $val){
			switch($val->graphtype){
				case('0'):
				case('1'):
					$filename = 'chart2';
					break;
				case('2'):
					$filename = 'chart6';
					break;
				default:
					$filename = 'chart2';
					break;
			}
			$HTML_CODE .= '<div><img src="http://110.10.147.42/zabbix/'.$filename.'.php?graphid='.$val->graphid.'&from=now-12h&to=now&profileIdx=web.graphs.filter&profileIdx2='.$val->graphid.'"></div>';
		}


		/*
		$params = Array();
		$params["output"] = "extend";
		$params["hostids"] = "10263";
		$params["sortfield"] = "name";

		$z_data = $this->get_zabbix_req("item.get",$params);
		$HTML_CODE = '';
		$HTML_CODE .= '<div><pre>'.print_r($z_data,true).'</pre></div>';
		*/
        /*
		$params = Array();
		$params["output"] = "extend";
		$params["history"] = "0";
		$params["hostids"] = "10263";
		$params["itemids"] = "28636";
		$params["sortfield"] = "clock";
		$params["sortorder"] = "DESC";
		$params["limit"] = "100";

		$z_data = $this->get_zabbix_req("history.get",$params);
		$HTML_CODE = '';
		//$HTML_CODE .= '<div><pre>'.print_r($z_data,true).'</pre></div>';

		foreach($z_data->result AS $key => $val){
			$HTML_CODE .=  date("Y-m-d H:i:s",$val->clock).' : '.$val->value.'</br>';
		}
        */


		//$HTML_CODE .= '<h1>'.date("Y-m-d H:i:s").'</h1>';

		$data = array(
			'HTML_CODE' => $HTML_CODE,
		);
		$this->load->view('/zabbix/index', $data);

    }

    public function curlie($data_string) {
        $zabbixhost = 'http://110.10.147.42/zabbix/api_jsonrpc.php';
        $ch = curl_init($zabbixhost);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Accept: application/json', 'Content-Type: application/json'
        ));
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        $result = curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);
        return $result;
    }

    public function login() {
		$username = 'Admin';
		$password = 'zabbix';

		$jsoninfo = '{ "jsonrpc":"2.0","method": "user.login", "params" :{ "user": "' . $username . '", "password": "' . $password . '"},"id":1}';
		$test = $this->curlie($jsoninfo);
		$files = json_decode($test);

		return $files->result;
    }
    public function apiBuilder($method,$params,$addons){
        $array = array();
        $array['jsonrpc'] = '2.0';
        $array['method'] = $method;
        $array['params'] = $params;
        if(is_array($addons)){
            array_merge($array,$addons);
        }
        $array['auth'] = $this->login();
        $array['id'] = 1;
        return json_encode($array);
    }
    public function get_zabbix_req($method,$params,$addons=''){
        $jsoninfo = $this->apiBuilder($method,$params,$addons);
        $files = json_decode($this->curlie($jsoninfo));
        return $files;
    }
}