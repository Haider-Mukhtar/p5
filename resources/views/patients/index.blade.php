@extends('layouts.app')
@section('title')
    {{ __('Member') }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-flex flex-column">
            @include('flash::message')
            {{Form::hidden('patientUrl',url('patients'),['id'=>'indexPatientUrl'])}}
            {{ Form::hidden('patients', __('Member'), ['id' => 'Patients']) }}
            <livewire:patient-table/>
            @include('accountants.templates.templates')
            @include('partials.page.templates.templates')
        </div>
    </div>
@endsection
{{-- JS File :- assets/js/patients/patients.js --}}
