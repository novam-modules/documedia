@extends('documedia::layouts.master')

@section('content')
     <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Current Files</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Stored files            </li>
            </ul>
          </div>
          <section>
            <div class="card">
                <div class="card-header">
                  <h4></h4>
                </div>
                <div class="card-body table-responsive">
                    <data-table></data-table>
                </div>
              </div>
          </section>
@endsection
