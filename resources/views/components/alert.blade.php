<div {{ $attributes->merge(['class' => 'flex justify-between items-center px-6 py-4 rounded' . $errorType() ]) }} >
    <div>{{ $slot }}</div>
    <button>&times;</button>
</div>