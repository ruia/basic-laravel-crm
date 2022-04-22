<div class="mb-3">
    <label class="form-label" for="{{ $name }}">{{ __($label) }}</label>
    <select class="form-select" id="{{ $name }}" name="{{ $name }}" {{ $args }}>
        @foreach ($vats as $vat)
            <option value="{{ $vat->id }}">{{ $vat->name }}
        @endforeach
    </select>
    @if($showAlert)
        @error($name)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    @endif
</div>