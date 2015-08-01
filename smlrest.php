<?php 

namespace suteetoe\yii2-smlrest

use yii\base\Component;

public class smlrest extends Component {
	
	protected $webserviceserver;
	
	public function __construct($config = []){
		foreach ($config as $param => $value) {
			$this->$param = $value;
		}
	}
	
	public function testConnectXML() {
		return "Connected";
	}
}
