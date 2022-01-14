<?php

namespace fall1600\Package\Newebpay\Info\Decorator;

class EnableWebAtm extends Enable
{
    /**
     * @return array
     */
    public function getInfo()
    {
        return $this->info->getInfo() +
            [
                'WEBATM' => $this->isEnable ? 1 : 0,
            ];
    }
}
