<div>
    <div class="dataTable-wrapper dataTable-loading dataTable-empty no-footer sortable searchable fixed-columns">
        <div class="dataTable-top">
            <div class="dataTable-dropdown">
                <label>
                    <select wire:model="perPage" class="dataTable-selector">
                        <option value="10" selected="">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </select> 
                    entries per page
                </label>
            </div>
            <div class="dataTable-search">
                <input wire:model="search" class="dataTable-input" placeholder="Search..." type="text">
            </div>
        </div>
        <div class="dataTable-container">
            <table id="datatablesSimple" class="dataTable-table">
                <thead>
                    <tr>
                        <th class="{{ $sortField !== 'id' ? '' : $sortClass }}"><a wire:click.prevent="sortBy('id')" class="dataTable-sorter" href="#">#</a></th>
                        <th class="{{ $sortField !== 'ref' ? '' : $sortClass }}"><a wire:click.prevent="sortBy('ref')" class="dataTable-sorter" href="#">Ref</a></th>
                        <th class="{{ $sortField !== 'name' ? '' : $sortClass }}"><a wire:click.prevent="sortBy('name')" class="dataTable-sorter" href="#">Name</a></th>
                        <th class="{{ $sortField !== 'bar_code' ? '' : $sortClass }}"><a wire:click.prevent="sortBy('bar_code')" class="dataTable-sorter" href="#">EAN</a></th>
                        <th class="{{ $sortField !== 'vat' ? '' : $sortClass }}"><a wire:click.prevent="sortBy('vat')" class="dataTable-sorter" href="#">VAT</a></th>
                        <th class="{{ $sortField !== 'price_without_vat' ? '' : $sortClass }}"><a wire:click.prevent="sortBy('price_without_vat')" class="dataTable-sorter" href="#">Price Without VAT</a></th>
                        <th class="{{ $sortField !== 'price_with_vat' ? '' : $sortClass }}"><a wire:click.prevent="sortBy('price_with_vat')" class="dataTable-sorter" href="#">Price With VAT</a></th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if($products->count() > 0)
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->ref }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->bar_code }}</td>
                                <td>{{ $product->vat }}%</td>
                                <td>{{ formatMoney($product->price_without_vat) }}€</td>
                                <td>{{ formatMoney($product->price_with_vat) }}€</td>
                                <td>&nbsp;</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="8" style="text-align:center;"><strong> No products found! </strong></td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        @if($products->count() > 0)
            <div class="dataTable-bottom">
                <div class="dataTable-info">
                    Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of {{ $products->total() }} entries
                </div>

                {{ $products->links('livewire.pagination-links') }}
            </div>
        @endif
    </div>
</div>