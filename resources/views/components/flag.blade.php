@switch($icon)
    @case('es')
        <x-flag-spain class="{{ $class ?? '' }}" />
        @break
    @case('zh-cn')
        <x-flag-china class="{{ $class ?? '' }}" />
        @break
    @case('pt_BR')
        <x-flag-brazil class="{{ $class ?? '' }}" />
        @break
    @default
        <x-flag-usa class="{{ $class ?? '' }}" />
@endswitch