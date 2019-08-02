<?php
namespace Dizoo\Partners\components;

use Cms\Classes\ComponentBase;
use Dizoo\Partners\Models\Partners as Partners;

class Partner extends ComponentBase {

    public function componentDetails()
    {
        return [
            'name' => 'Partners',
            'description' => 'Geeft alle partners weer op de pagina.'
        ];
    }

    public function onRun()
    {
        $partners = $this->getPartners();
        if($partners->isNotEmpty()) {
            $this->page['partners'] = $partners;
            $this->addCss('/plugins/dizoo/partners/assets/css/partners.css');
            $this->addJs('/plugins/dizoo/partners/assets/js/slick-1.6.0.js');
            $this->addJs('/plugins/dizoo/partners/assets/js/start-slider.js');
        }
    }

    public function getPartners()
    {
        return Partners::where('active', true)->orderBy('sort_order', 'ASC')->get();
    }
    
    public function defineProperties()
    {
        return [
            'backgroundColor' => [
                 'title'             => 'Background color',
                 'description'       => 'HEX code value',
                 'default'           => '#ffffff',
                 'type'              => 'string',
                 'validationPattern' => '^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$',
                 'validationMessage' => 'Please fill in a valid hex code with the #'
            ]
        ];
    }
}