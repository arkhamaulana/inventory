@extends('layouts.app2')

@section('content')

  <hr>
  <button id="btn_add" name="btn_add" class="btn btn-primary pull-right">Add New Product</button>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Products</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Code</th>
                  <th>Name</th>
                  <th>Details</th>
                  <th>Info</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody id="products-list" name="products-list">
                @foreach($products as $product)
                <tr class="odd gradeX">
                  <td>{{ $product->id }}</td>
                  <td>{{ $product->code }}</td>
                  <td>{{ $product->name }}</td>
                  <td><span class="label label-success">Available</span></td>
                  <td>{{ $product->details }}</td>
                  <td>
                    <button class="btn btn-warning btn-detail open_modal" value="{{$product->id}}">Edit</button>
                    <!-- <a href="#myAlert" data-toggle="modal" class="btn btn-danger">Delete Pop-up</a> -->
                    <button class="btn btn-danger btn-delete delete-product" value="{{$product->id}}">Delete</button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- <div id="myAlert" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">×</button>
        <h3>DELETE</h3>
      </div>
      <div class="modal-body">
        <p>Are you sure delete it?</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-danger btn-delete delete-product" value="{{$product->id}}">Delete</button> 
        <a data-dismiss="modal" class="btn" href="#">Cancel</a> 
      </div>
    </div> -->

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <h4 class="modal-title" id="myModalLabel">Product</h4>
              </div>
              <div class="modal-body">
                  <form id="frmProducts" name="frmProducts" class="form-horizontal" novalidate="">
                  {!! csrf_field() !!}
                      <div class="form-group row add">
                          <label class="control-label col-sm-12">Code </label>
                          <div class="col-sm-12">
                              <input type="text" class="form-control" id="code" name="code" placeholder="Code" value="">
                          </div>
                      </div>
                      <div class="form-group row add">
                          <label class="control-label col-sm-12">Name </label>
                          <div class="col-sm-12">
                              <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="">
                          </div>
                      </div>
                      <div class="form-group row add">
                          <label class="control-label col-sm-12">Details </label>
                          <div class="col-sm-12">
                              <textarea class="form-control" id="details" name="details" placeholder="Details"></textarea>
                          </div>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                  <button type="button" id="btn-save" class="btn btn-primary" value="add">Save Changes</button>
                  <input type="hidden" id="id" name="id" value="0">
              </div>
          </div>
      </div>
  </div>

@endsection
