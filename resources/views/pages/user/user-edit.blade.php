<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Edit Nasabah') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Nasabah</a></div>
            <div class="breadcrumb-item"><a href="{{ route('user') }}">Edit Nasabah</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-user action="updateUser" :userId="request()->userId" />
    </div>
</x-app-layout>
