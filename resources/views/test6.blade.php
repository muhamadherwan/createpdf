@if (!empty($errorMessage))
    <p>{{ $errorMessage }}</p>
@else
    <p>Page count: {{ $pageCount }}</p>
@endif
