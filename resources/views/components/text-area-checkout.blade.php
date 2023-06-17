@props(['disabled' => false])

<textarea cols="30" rows="4" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-main focus:ring-main/20 rounded-md shadow-sm']) !!}></textarea>