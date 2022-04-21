<div class="mb-3">
    <label class="form-label" for="{{ $name }}">{{ __($label) }}</label>
    <textarea 
        class="form-control @error($name) is-invalid @enderror" 
        id="{{ $name }}"  
        name="{{ $name }}" 
        type="{{ $type }}" 
        placeholder="{{ __($label) }}" 
        rows="{{ $rows }}" 
        {{ $args }} 
    >{{ old($name, $model ? $model->{$name} : '') }}</textarea>
    @if($showAlert)
        @error($name)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    @endif
</div>