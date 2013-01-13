<?php

class Hackathon_FixtureGenerator_Model_Processor_Product_Virtual
    extends Hackathon_FixtureGenerator_Model_Processor_Product_Abstract
    implements Hackathon_FixtureGenerator_Model_Processor_Interface
{

    protected $type = 'product/virtual';

    protected $productType = 'virtual';

    public function __construct(){
        $this->dropRequiredKey('weight');
    }
}
