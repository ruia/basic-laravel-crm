<div>
    <div class="dataTable-wrapper dataTable-loading dataTable-empty no-footer sortable searchable fixed-columns">
        <div class="dataTable-top">
            <div class="dataTable-dropdown">
                <label>
                    <select wire:model="perPage" class="dataTable-selector">
                        <option value="5">5</option>
                        <option value="10" selected="">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
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
                        <th class="{{ $sortField !== 'price_without_vat' ? '' : $sortClass }}"><a wire:click.prevent="sortBy('price_without_vat')" class="dataTable-sorter" href="#">price_without_vat</a></th>
                        <th class="{{ $sortField !== 'price_with_vat' ? '' : $sortClass }}"><a wire:click.prevent="sortBy('price_with_vat')" class="dataTable-sorter" href="#">price_with_vat</a></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                       <tr>
                           <td>{{ $product->id }}</td>
                           <td>{{ $product->ref }}</td>
                           <td>{{ $product->name }}</td>
                           <td>{{ $product->bar_code }}</td>
                           <td>{{ $product->vat }}</td>
                           <td>{{ $product->price_without_vat }}</td>
                           <td>{{ $product->price_with_vat }}</td>
                           <td>&nbsp;</td>
                       </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="dataTable-bottom">
            <div class="dataTable-info">
                Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of {{ $products->total() }} entries
            </div>
            <nav class="dataTable-pagination">
                {{-- <ul class="dataTable-pagination-list"></ul> --}}
                {{ $products->links() }}
            </nav>
        </div>
    </div>
</div>