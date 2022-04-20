<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class ProductsTable extends Component
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
        $tableData = DB::table('products')
                ->join('vats', 'products.vat_id', '=', 'vats.id')
                ->selectRaw('products.id, products.ref, products.name, products.bar_code, vats.tax_percent as vat,products.price_without_vat as price_without_vat,products.price_without_vat * (vats.tax_percent/100 + 1) as price_with_vat')
                // ->search($this->search)
                ->where('ref', 'like', '%'.$this->search.'%')
                ->orwhere('products.name', 'like', '%'.$this->search.'%')
                ->orwhere('products.bar_code', 'like', '%'.$this->search.'%')
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate($this->perPage);

        return view('livewire.products-table', ['products' => $tableData]);
    }
}
