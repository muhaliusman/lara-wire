@props(['attribute'])

@error($attribute)
  <span class="text-sm text-red-600">{{ $message }}</span>
@enderror