<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $type;
    public $label;
    public $model;
    public $showAlert;
    Public $readOnly;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $type, $label, $model = null, $showAlert = true, $readOnly = '')
    {
        $this->name = $name;
        $this->type = $type;
        $this->label = $label;
        $this->model = $model;
        $this->showAlert = $showAlert;
        if ($readOnly) {
            $readOnly = 'readonly';
        }
        $this->readOnly = $readOnly;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.input');
    }
}
