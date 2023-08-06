@extends('layout.index')
@section('content')

<div class="wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product File</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product File</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
          
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-sm">
                   <select id="exportLink" class="form-control">
                        <option>Export Data Table</option>
                        <option id="csv">Export as CSV</option>
                        <option id="excel">Export as XLS</option>
                        <option id="copy">Copy to clipboard</option> 
                        <option id="pdf">Export as PDF</option>
                      </select>  
                  </div>
                  <div class="col-sm">

                  </div>
                  <div class="col-sm">
                  </div>
                  <div class="col-sm">
                  <a href="/add-product" class="btn btn-primary">Add</a>
                    <a id="url" href="" class="btn btn-warning">Edit</a>
                    <button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete">Delete</button>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                                   <div class="table-responsive">
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                        <th>Select</th>
                      <th>Product Code</th>
                      <th>Product Name</th>
                      <th>Product Image</th>
                      <th>Product Alias</th>
                      <th>Spesification</th>
                      <th>Product Type</th>       
                  </tr>
                                    </thead>
                                    <tfoot>
                  <tr>
                      <th>Select</th>
                      <th>Product Code</th>
                      <th>Product Name</th>
                      <th>Product Image</th>
                      <th>Product Alias</th>
                      <th>Spesification</th>
                      <th>Product Type</th>
                  </tr>
                  </tfoot>
                  <tbody>
                                 
                                    </tbody>
                                </table>
                              </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection