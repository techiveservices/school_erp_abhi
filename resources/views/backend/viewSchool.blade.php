@extends('../layout/adminmaster')

@section('body')
 <style>
   textarea.form-control{
    height: 200px;
   }
   img.news-image {
    height: 89px;
    width: 135px;
}
.color-palette{
    opacity: .65;
    width: 170px;
    margin-left: 24px;
    padding: 5px;
    text-align: center;
    border-radius: 5px;
    font-size: 15px;
   }
   span.select2.select2-container.select2-container--default.select2-container--above{
    width: 100% !important;
   }
    span.select2.select2-container.select2-container--default.select2-container--focus {
    width: 100% !important;
}
span.select2.select2-container.select2-container--default {
    width: 100% !important;
}
input.select2-search__field {
    width: 100% !important;
}
   li.select2-search.select2-search--inline {
    width: 100%;
}
 </style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage news</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div style="overflow-x: auto;" class="card">
            
           <div class="card-header">
            @if (count($errors) > 0)
              <div class="alert alert-danger succesMSG">
               Upload Validation Error<br><br>
               <ul>
                @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
                @endforeach
               </ul>
              </div>
             @endif
            @if ($message = Session::get('success'))
                <div  class="btn btn-success swalDefaultSuccess succesMSG">{{ $message }}</div>
                @endif
              <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-xl">
                 <i class="fa fa-fw fa-plus"></i> Add school
                </button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Logo</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Phone No</th>
                  <th>Principle</th>
                  <th>Website</th>
                  <th>Total students</th>
                  <th>Classes(To-Form)</th>
                  <th>Date</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i = 1;?>
                  @foreach($users as $data)
                    @php

                    $sc_id = $data->id;

                    $cls = $data->class;

                    list($first) = explode(',', $cls);

                    $lastNumber = explode(',', $cls);

                    $last = end($lastNumber);

                    $sel = DB::select('select school_id from create_students where school_id = ?', [$sc_id]);

                    $wordCount = count($sel);

                    //get class to-from
                    $selClassFirst = DB::select('select class from classes where id = ?',[$first]);

                    @endphp
                      @foreach($selClassFirst as $val) 
                       @php
                       $selClassLast = DB::select('select class from classes where id = ?',[$last]);
                       @endphp 
                        @foreach($selClassLast as $valLast)  
                          <tr>
                            <td><?php echo $i++;?></td>
                            <td><img width="70px" height="70px" src="images/{{ $data->schl_logo }}" alt=""></td>
                            <td>{{ $data->schl_name }}</td>
                            <td>{{ $data->schl_add }}</td>
                            <td>{{ $data->ph_no }}</td>
                            <td>{{ $data->principle_name }}</td>
                            <td>{{ $data->website }}</td>
                            <td>{{ $wordCount }}</td>
                            <td>{{ $val->class }}-{{ $valLast->class }}</td>
                            <td>{{ $data->created_at }}</td>
                          </tr>
                          @endforeach
                      @endforeach
                    @endforeach
                
                </tbody>
                <tfoot>
                <tr>
                  <th>S.No</th>
                  <th>Logo</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Phone No</th>
                  <th>Principle</th>
                  <th>Website</th>
                  <th>Total students</th>
                  <th>Classes(To-Form)</th>
                  <th>Date</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->          
        </div>
      </div>
        <div class="modal fade" id="modal-xl">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <form method="post" action="{{url('/viewSchool')}}" id="addNewsFomId" enctype="multipart/form-data">
                {{ csrf_field() }}

              <div class="modal-header">
                <h4 class="modal-title">Add school</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="card card-primary">
                
                <!-- /.card-header -->
                <!-- form start -->
                
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="sc_name" class="form-control" id="exampleInputEmail1" placeholder="School name" required="">
                        </div>                       
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="sc_reg" class="form-control" id="exampleInputEmail1" placeholder="School registration no" required="">
                        </div>  
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="sc_board" class="form-control" id="exampleInputEmail1" placeholder="Board/University" required="">
                        </div>  
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <select name="sc_medium" class="form-control">
                            <option>--Select medium--</option>
                            <option value="Male">English</option>
                            <option value="Female">Hindi</option>
                            <option value="Other">Other</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="sc_phno" class="form-control" id="exampleInputEmail1" placeholder="Phone number" required="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="sc_email" class="form-control" id="exampleInputEmail1" placeholder="School email" required="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="sc_pass" class="form-control" id="exampleInputEmail1" placeholder="Create school password" required="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="sc_concern_name" class="form-control" id="exampleInputEmail1" placeholder="Concern person name" required="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="email" name="sc_concern_email" class="form-control" id="exampleInputEmail1" placeholder="Concern person email" required="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="sc_concern_no" class="form-control" id="exampleInputEmail1" placeholder="Concern person contact number" required="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="sc_website" class="form-control" id="exampleInputEmail1" placeholder="Website" required="">
                          <input type="hidden" id="inputClass" value="" name="class_array">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          {{-- <label for="">Add class</label> --}}
                          <select id="multipleSelect" class="js-example-basic-multiple leaderMultiSelctdropdown" name="states[]" multiple="multiple">
                            @php
                            $res = DB::select('select id, class from classes');
                            @endphp

                            @foreach($res as $class)
                            <option value="{{ $class->id }}">{{ $class->class }}</option>
                            @endforeach
                            
                        </select>
                        </div>
                        
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <textarea class="form-control h-50" name="sc_add" id="content" rows="3" placeholder="School address" required=""></textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="sc_logo" class="form-control" >
                          </div>
                        </div>
                      </div>
                      
                    </div>                    
                  </div>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" id="saveNews" class="btn btn-primary">Save</button>
              </div>
            </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

        <!-- edit category -->
        <div class="modal fade" id="modal-xl2">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <form role="form">
                  <div class="modal-header">
                    <h4 class="modal-title">Update News</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="card card-primary">
                
                    <!-- /.card-header -->
                    <!-- form start -->
                
                  <div class="card-body">
                    <div class="form-group"><input type="hidden" id="updateID" value="">
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Headlines">
                    </div>
                    <div class="form-group">
                      <textarea class="form-control h-25" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    <div class="row">
                    	<div class="col-md-3">
                    		<div class="form-group">
  	                    <label for="exampleInputFile">Main image 
  	                    	<span>
  	                    		<div class="image">
  						          <img src="no-image.jpg" class="elevation-2 w-25" alt="User Image">
  						        </div>
  	                    	</span>
  	                    </label>
  	                    <div class="input-group">
  	                      <div class="custom-file">
  	                        <input type="file" class="form-control">
  	                      </div>
  	                    </div>
  	                  </div>
                    	</div>
                    	<div class="col-md-3">
                    		<div class="form-group">
  	                    <label for="exampleInputFile">Sub image 1
  	                    	<span>
  	                    		<div class="image">
  						          <img src="no-image.jpg" class="elevation-2 w-25" alt="User Image">
  						        </div>
  	                    	</span>
  	                    </label>
  	                    <div class="input-group">
  	                      <div class="custom-file">
  	                        <input type="file" class="form-control">
  	                      </div>
  	                    </div>
  	                  </div>
                    	</div>
                    	<div class="col-md-3">
                    		<div class="form-group">
  	                    <label for="exampleInputFile">Sub image 2
  	                    	<span>
  	                    		<div class="image">
  						          <img src="no-image.jpg" class="elevation-2 w-25" alt="User Image">
  						        </div>
  	                    	</span>
  	                    </label>
  	                    <div class="input-group">
  	                      <div class="custom-file">
  	                        <input type="file" class="form-control">
  	                      </div>
  	                    </div>
  	                  </div>
                    	</div>
                    	<div class="col-md-3">
                    		<div class="form-group">
  	                    <label for="exampleInputFile">Sub image 3
  	                    	<span>
  	                    		<div class="image">
  						          <img src="no-image.jpg" class="elevation-2 w-25" alt="User Image">
  						        </div>
  	                    	</span>
  	                    </label>
  	                    <div class="input-group">
  	                      <div class="custom-file">
  	                        <input type="file" class="form-control">
  	                      </div>
  	                    </div>
  	                  </div>
                    	</div>
                    	<div class="col-md-3">
                    		<div class="form-group">
  	                    <label for="exampleInputFile">Sub image 4
  	                    	<span>
  	                    		<div class="image">
  						          <img src="no-image.jpg" class="elevation-2 w-25" alt="User Image">
  						        </div>
  	                    	</span>
  	                    </label>
  	                    <div class="input-group">
  	                      <div class="custom-file">
  	                        <input type="file" class="form-control">
  	                      </div>
  	                    </div>
  	                  </div>
                    	</div>
                    	<div class="col-md-3">
                    		<div class="form-group">
  	                    <label for="exampleInputFile">Sub image 5
  	                    	<span>
  	                    		<div class="image">
  						          <img src="no-image.jpg" class="elevation-2 w-25" alt="User Image">
  						        </div>
  	                    	</span>
  	                    </label>
  	                    <div class="input-group">
  	                      <div class="custom-file">
  	                        <input type="file" class="form-control">
  	                      </div>
  	                    </div>
  	                  </div>
                    	</div>
                    	<div class="col-md-3">
                    		<div class="form-group">
  	                    <label for="exampleInputFile">Sub image 6
  	                    	<span>
  	                    		<div class="image">
  						          <img src="no-image.jpg" class="elevation-2 w-25" alt="User Image">
  						        </div>
  	                    	</span>
  	                    </label>
  	                    <div class="input-group">
  	                      <div class="custom-file">
  	                        <input type="file" class="form-control">
  	                      </div>
  	                    </div>
  	                  </div>
                    	</div>
                    	<div class="col-md-3">
                    		<div class="form-group">
  	                    <label for="exampleInputFile">Sub image 7
  	                    	<span>
  	                    		<div class="image">
  						          <img src="no-image.jpg" class="elevation-2 w-25" alt="User Image">
  						        </div>
  	                    	</span>
  	                    </label>
  	                    <div class="input-group">
  	                      <div class="custom-file">
  	                        <input type="file" class="form-control">
  	                      </div>
  	                    </div>
  	                  </div>
                    	</div>
                    	<div class="col-md-3">
                    		<div class="form-group">
  	                    <label for="exampleInputFile">Sub image 8
  	                    	<span>
  	                    		<div class="image">
  						          <img src="no-image.jpg" class="elevation-2 w-25" alt="User Image">
  						        </div>
  	                    	</span>
  	                    </label>
  	                    <div class="input-group">
  	                      <div class="custom-file">
  	                        <input type="file" class="form-control">
  	                      </div>
  	                    </div>
  	                  </div>
                    	</div>
                    	<div class="col-md-3">
                    		<div class="form-group">
  	                    <label for="exampleInputFile">Sub image 9
  	                    	<span>
  	                    		<div class="image">
  						          <img src="no-image.jpg" class="elevation-2 w-25" alt="User Image">
  						        </div>
  	                    	</span>
  	                    </label>
  	                    <div class="input-group">
  	                      <div class="custom-file">
  	                        <input type="file" class="form-control">
  	                      </div>
  	                    </div>
  	                  </div>
                    	</div>
                    	<div class="col-md-3">
                    		<div class="form-group">
  	                    <label for="exampleInputFile">Sub image 10
  	                    	<span>
  	                    		<div class="image">
  						          <img src="no-image.jpg" class="elevation-2 w-25" alt="User Image">
  						        </div>
  	                    	</span>
  	                    </label>
  	                    <div class="input-group">
  	                      <div class="custom-file">
  	                        <input type="file" class="form-control">
  	                      </div>
  	                    </div>
  	                  </div>
                    	</div>
                    </div>
                    
                    
                  </div>
                  </div>
                   <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Update</button>
                  </div>
            </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
