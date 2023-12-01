<div class="form-group row">
    <label for="{{ $name }}" class="col-sm-2 col-form-label">{{ $label }}</label>
    <div class="col-sm-10">
        <input type="{{ $type }}" class="form-control" name="{{ $name }}" value="{{ old($name) }}">
        <span class="text-danger">
            @error($name)  
                {{ $message }}
            @enderror
        </span>
    </div>
</div>