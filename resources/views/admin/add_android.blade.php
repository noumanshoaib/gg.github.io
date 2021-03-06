@extends('admin.layout.app')
@section('content')

    
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">
            <h3>Add Android Requirement</h3>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content">
                <div class="col-lg-6">
                 <form action="{{URL('/')}}/admin/view/order/active/reporting/add/android/{{$id}}" method="post" enctype="multipart/form-data">
                  {{csrf_field()}} 
                  <div class="row">
                    
                      <div class="form-group col-lg-12 col-sm-12 col-md-12">
                      <label>Week Name</label>
                          <input name="week_name" type="text" class="form-control">
                      </div>
                      <div class="form-group col-lg-12 col-sm-12 col-md-12">
                      <label>Requirments </label>
                         <textarea class="form-control" name="requirements" rows="9" id="description" placeholder="Enter Your Message" pattern="[a-zA-Z0-9\s]+" maxlength="500"></textarea>
                      </div>
                      <div class="row" id="image_preview"></div><br>
                      <div class="col-md-6">
                        <button id="send" type="submit" class="btn btn-success">Done</button>
                      </div>
                      <div class="col-md-6"> <a href="reporting.html" type="submit" class="btn btn-success pull-right">Cancel</a> </div>
                    </div>
                  </form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /page content --> 
  @endsection