<?php
class Core {
    protected $carrentController="Pages";
    protected $currentMethod='index';
    protected $parms=[];
    public function __construct() {
        $this->getUrl();
        
    }

    public function getUrl(){
        if(isset($_GET['url'])) {
            $url=rtrim($_GET['url'],'/');
            $url=filter_var($url,FILTER_SANITIZE_URL);
            $url=explode('/',$url);
            return $url;
        }    
    }
}


?>