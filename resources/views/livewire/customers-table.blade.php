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
            <table class="dataTable-table">
                <thead>
                    <tr>
                        <th class="{{ $sortField !== 'id' ? '' : $sortClass }}"><a wire:click.prevent="sortBy('id')" class="dataTable-sorter" href="#">#</a></th>
                        <th class="{{ $sortField !== 'ref' ? '' : $sortClass }}"><a wire:click.prevent="sortBy('name')" class="dataTable-sorter" href="#">Name</a></th>
                        <th class="{{ $sortField !== 'name' ? '' : $sortClass }}"><a wire:click.prevent="sortBy('vat_number')" class="dataTable-sorter" href="#">VAT</a></th>
                        <th class="{{ $sortField !== 'bar_code' ? '' : $sortClass }}"><a wire:click.prevent="sortBy('cellphone')" class="dataTable-sorter" href="#">Cellphone</a></th>
                        <th class="{{ $sortField !== 'vat' ? '' : $sortClass }}"><a wire:click.prevent="sortBy('email')" class="dataTable-sorter" href="#">Email</a></th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if($customers->count() > 0)
                        @foreach ($customers as $customer)
                            <tr>
                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->vat_number }}</td>
                                <td>{{ $customer->cellphone }}</td>
                                <td>{{ $customer->email }}</td>
                                <td class="action-column"><a href="{{ route('customers.show', $customer->id) }}" class="action-column-link"><i class="fa-solid fa-magnifying-glass"></i></a><a href="{{ route('customers.edit', $customer->id) }}" class="action-column-link"><i class="fa-solid fa-pencil"></i></a></td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="8" style="text-align:center;"><strong> No customers found! </strong></td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        @if($customers->count() > 0)
            <div class="dataTable-bottom">
                <div class="dataTable-info">
                    Showing {{ $customers->firstItem() }} to {{ $customers->lastItem() }} of {{ $customers->total() }} entries
                </div>
                {{ $customers->links('livewire.pagination-links') }}
            </div>
        @endif
    </div>
</div>