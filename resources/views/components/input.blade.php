
<div {{ $attributes }}>
    <label class="block text-gray-700">{{ $label }}</label>
    <input name="{{ $name }}" value="{{ old($name) }}" type="{{ $type ?? 'text' }}" class="mt-2 p-2 border border-gray-500 w-full focus:outline-none focus:border-purple-700 rounded"/>
    @error($name)
        <span class="text-red-500 text-sm">{{ $message }}</span>
    @enderror
</div>
