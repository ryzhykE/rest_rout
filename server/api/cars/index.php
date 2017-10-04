<?php

include '../Router.php';

class Cars extends Router
{
        public function __construct()
                {
                            $this->run();
                                }
            public function getCars($data = false)
                    {
                                return var_dump($data) . '<br>Hello!?!?!?!? ';
                                    }
}
$cars = new Cars();
    
