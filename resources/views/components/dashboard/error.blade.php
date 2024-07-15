@if ($errors->has($name))
    <p class="text-sm font-light text-danger-500">
        {{ $errors->first($name) }}
    </p>
@endif
