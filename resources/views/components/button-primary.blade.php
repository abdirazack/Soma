@props([
  'type' => 'submit',
  'text',
])

<button type="{{ $type }}" {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 bg-rose-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-rose-700 active:bg-rose-800 focus:outline-none focus:border-rose-900 focus:ring focus:ring-rose-200 disabled:opacity-25 transition']) }}>
  {{ $text }}
</button>