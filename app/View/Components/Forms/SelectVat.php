<?php

namespace App\View\Components\Forms;

use App\Models\Vat;
use Illuminate\View\Component;

class SelectVat extends Component
{
    public $name;
    public $label;
    public $showAlert;
    public $args;
    public $productVatId;
    public $vats;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label, $showAlert = true, $args = '', $productVatId = 0)
    {
        $this->name = $name;
        $this->label = $label;
        $this->showAlert = $showAlert;
        $this->args = $args;
        $this->productVatId = $productVatId;
        $this->vats = Vat::all(); //TODO: Later change this to a view composer??
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.select-vat');
    }
}
