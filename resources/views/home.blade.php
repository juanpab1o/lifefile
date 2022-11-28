@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                    <div class="col fw-bold text-uppercase">
                        {{\Carbon\Carbon::now()->format('m/d/Y h:i A')}}
                    </div>
                    <div class="col text-end fw-bold text-uppercase">
                        Welcome: {{ Auth::user()->email }}
                    </div>
                    </div>
                </div>
               {{-- <div class="card-body">

                </div>--}}
            </div>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-2 mb-2 mt-2 border-bottom"></div>
            <div class="col text-end mt-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                New employee
            </button>

            <!-- Modal -->
            <div class="modal fade modal-dialog modal-dialog-centered modal-dialog-scrollable" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">AGREGAR EMPLEADO</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">CANCELAR </button>
                            <button type="button" class="btn btn-success">GUARDAR</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
