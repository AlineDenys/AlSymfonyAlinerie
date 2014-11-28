<?php

namespace Al\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AlUserBundle extends Bundle
{
    
    public function getParent(){
    return "FOSUserBundle";
    }
    
}
