@extends('layouts.master')

@push('title')
    <title>Interview Task | Admin Dashboard</title>
@endpush

@section('main-content')
<div class="container-fluid">
    @include('layouts.notification')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    @livewire('admin.dashboard')

</div>
@endsection
