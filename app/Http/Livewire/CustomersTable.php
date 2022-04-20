<?php

namespace App\Http\Livewire;

use App\Models\Customer;

use Livewire\Component;
use Livewire\WithPagination;

class CustomersTable extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $perPage = 10;
    public $sortField = 'id';
    public $sortAsc = true;
    public $sortClass = '';
    public $search = '';

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = ! $this->sortAsc;
            $this->sortAsc ? $this->sortClass ='asc' : $this->sortClass = 'desc';
        } else {
            $this->sortAsc = true;
            $this->sortClass = 'asc';
        }
        $this->sortField = $field;
    }

    public function render()
    {
        $tableData = Customer::query()
            ->select(['id', 'name', 'vat_number', 'cellphone', 'email'])
            ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
            ->paginate($this->perPage);
        return view('livewire.customers-table', ['customers' => $tableData]);
    }
}
