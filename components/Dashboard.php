<?php

namespace esoftslimited\dashboard\components;

use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;

class Dashboard extends Component{
  /** @var panels array**/
  private $panels=[];
  /** @var sections array**/
  private $sections=[];
  /** @var layout string**/
  private $layout;
  /** @var layout string**/
  private $layoutPath;
  public function addPanel($name,$view,$section="main"){
  	if(!isset($this->panels[$section])){
  		$this->panels[$section]=[];
  		array_push($this->sections, $section);
  	}
    array_push($this->panels[$section], [$name=>$view]);
  }
  public function getPanel($name,$section="main"){
    
  }
  public function getLayout(){
    
  }
  public function setLayout($layout){
    $this->layout=$layout;
  }
  public function getDisplay(){
  	
  	  	
    foreach ($this->panels as $section => $panel) {
      array_map([$this,'combine'], $this->panels['main']);

    }
    //exit(print_r($xx,1)); 	
    echo $this->layout;
  }
  private function combine($values){
    
    $this->layout=strtr($this->layout,$values);
    
  }


}