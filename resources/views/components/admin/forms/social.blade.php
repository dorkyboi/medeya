<div class="form-group bmd-form-group">
    <label for="{{ $field }}" class="control-label bmd-label-static">{{ $label ?? $field }}</label>
    <input class="form-control" name="{{ $field }}" type="text" value="{{ $value ?? '' }}" id="{{ $field }}">
    @if($errors->has($field))
    <label id="{{ $field }}-error" class="error" for="{{ $field }}">
        @foreach($errors->get($field) as $message)
            {{ $message }}
            @if(!$loop->last)
                <br>
            @endif
        @endforeach
    </label>
    @endif

</div>
