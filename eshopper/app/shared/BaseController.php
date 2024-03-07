<?php
namespace App\Shared;
use eftec\bladeone\BladeOne;
class BaseController{
    protected function render($viewFile, $data = [],$viewDir=1){
        $viewDir==1 ? $viewDir="./app/client/views": $viewDir="./app/server/views";
        $storageDir = "./storage";
        $blade = new BladeOne($viewDir,$storageDir, BladeOne::MODE_DEBUG);
        echo $blade->run($viewFile, $data);
    }
}
?>