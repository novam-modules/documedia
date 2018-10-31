@extends('documedia::layouts.master')

@section('content')
@component('_partials.main.heading', ['title' => 'Files Upload'])
<li class="breadcrumb-item active">Multiple files upload </li>
@endcomponent
<section>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4>Multiple files upload</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-8">
                        <form id="demo-upload" action="/upload" class="dropzone">
                            <div class="dz-message">
                                <p>Drop files here or click to upload.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
