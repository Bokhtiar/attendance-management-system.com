@extends('layouts.app')
@section('content')

@section('title', 'Product List')

@section('css')
@endsection

<section class="section">
    <div class="row">
        <div class="col-lg-8">

            <!-- table resource show componemts -->
            @component('components.table.table', [
                'title' => 'List of role',
                'data' => $roles,
                'id' => 'id',
                'route' => 'role',
            
                'thead1' => 'Name',
                'tdata1' => 'name',
            ])
            @endcomponent

        </div>

        <div class="col-lg-4">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Vertical Form</h5>
                    @component('components.form.role', [
                        'edit' => @$edit,
                    ])
                    @endcomponent
                </div>
            </div>




            @section('js')
            @endsection
        @endsection
