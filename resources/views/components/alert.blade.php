@props(['type' => 'success', 'message'])

<div style="padding:10px; border:1px solid {{ $type === 'error' ? 'red' : 'green' }}; margin:10px 0; background:#fff;">
    <strong>{{ ucfirst($type) }}:</strong> {{ $message }}
</div>