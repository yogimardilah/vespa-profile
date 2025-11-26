@props(['icon' => 'bi bi-circle', 'label' => ''])

<div class="facility-item d-flex align-items-center mb-2">
    <div class="facility-icon me-2"><i class="{{ $icon }}"></i></div>
    <div>{{ $label }}</div>
</div>
