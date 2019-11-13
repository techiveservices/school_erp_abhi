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
 </style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <div class="modal fade" id="modal-xl">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <form action="{{url('/viewStudents')}}" method="POST" id="addNewsFomId" enctype="multipart/form-data">
               {{ csrf_field() }}
              <div class="modal-header">
                <h4 class="modal-title">Add student</h4>
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
                          <input type="text" name="st_name" class="form-control" id="exampleInputEmail1" placeholder="Enter student name" required="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <select name="sc_id" class="form-control">
                            <option>--Select school---</option>
                            @foreach($students as $student)

                            <option value="{{ $student->id }}">{{ $student->schl_name }}</option>

                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <select name="class_id" class="form-control">
                            <option>--Choose class--</option>
                            @php
                             $classes = DB::table('classes')->select('id','class')->get();
                             @endphp

                            @foreach($classes as $class)
                            <option value="{{ $class->class }}">{{ $class->class }}</option>

                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <select name="class_sec" class="form-control">
                            <option>--Choose section--</option>
                            @php
                             $sec  = DB::table('class_sections')->select('sec_id','section')->get(); 

                             @endphp
                            
                            @foreach($sec as $classSec)

                            <option value="{{ $classSec->section }}">{{ $classSec->section }}</option>

                            @endforeach

                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="email" name="st_email" class="form-control" id="exampleInputEmail1" placeholder="Enter student email" required="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <select name="st_gender" class="form-control">
                            <option>--Select gender--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="password" name="st_pass" class="form-control" id="exampleInputEmail1" placeholder="Create password" required="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="st_father_name" class="form-control" id="exampleInputEmail1" placeholder="Father's name" required="">
                        </div>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="f_mob_no" class="form-control" id="exampleInputEmail1" placeholder="Father's mobile no" required="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="st_mother_name" class="form-control" id="exampleInputEmail1" placeholder="Mother's name" required="">
                        </div>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="m_mob_no" class="form-control" id="exampleInputEmail1" placeholder="Mother's mobile no" required="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="st_mobile1" class="form-control" id="exampleInputEmail1" placeholder="Enter mobile 1" required="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="st_mobile2" class="form-control" id="exampleInputEmail1" placeholder="Enter mobile 2" required="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="st_dob" class="form-control" id="exampleInputEmail1" placeholder="Enter D.O.B" required="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="email" name="parents_email" class="form-control" id="exampleInputEmail1" placeholder="Enter parent's email" required="">
                        </div>
                        
                      </div>
                      <div class="col-md-6">
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="st_logo" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <textarea class="form-control h-25" name="sc_add" id="content" rows="3" placeholder="Enter school address" required=""></textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <textarea class="form-control h-25" name="f_office_add" id="content" rows="3" placeholder="Father's office address" required=""></textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <textarea class="form-control h-25" name="m_office_add" id="content" rows="3" placeholder="Mother's office address" required=""></textarea>
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
          <div  class="card">
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
                 <i class="fa fa-fw fa-plus"></i> Add students
                </button>
            </div>
            <!-- /.card-header -->
            <div style="overflow-x: auto;" class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>School</th>
                  <th>Class</th>
                  <th>Section</th>
                  <th>Gender</th>
                  <th>Email</th>
                  <th>Father's name</th>
                  <th>Father's office address</th>
                  <th>Father's mobile number</th>
                  <th>Mother's name</th>
                  <th>Mother's office address</th>
                  <th>Mother's mobile number</th>
                  <th>Address</th>
                  <th>Mobile1</th>
                  <th>Mobile2</th>
                  <th>D.O.B</th>
                  <th>Parents email</th>
                  <th>Date</th>
                </tr>
                </thead>
                <tbody>
                 @php

                 $datas = DB::table('create_students')->select('*')->orderByDesc('s_id')->get();
                 $i = 1;
                 @endphp

                 @foreach($datas as $value)
                 @php
                 $sc_id = $value->school_id;
                  $results = DB::select('select schl_name from insert_schools where id = ?', [$sc_id]);
                 @endphp
                    @foreach($results as $res)
                        <tr>
                          <td>{{ $i++ }}</td>
                          <td><img width="70px" height="70px" src="images/{{ $value->st_image }}" alt=""></td>
                          <td>{{ $value->name }}</td>
                          <td>{{ $res->schl_name }}</td>
                          <td>{{ $value->class }}</td>
                          <td>{{ $value->section }}</td>
                          <td>{{ $value->gender }}</td>
                          <td>{{ $value->email }}</td>
                          <td>{{ $value->father_name }}</td>
                          <td>{{ $value->f_office_add }}</td>
                          <td>{{ $value->f_mobile_no }}</td>
                          <td>{{ $value->mother_name }}</td>
                          <td>{{ $value->m_office_add }}</td>
                          <td>{{ $value->m_mobile_no }}</td>
                          <td>{{ $value->address }}</td>
                          <td>{{ $value->mob_no1 }}</td>
                          <td>{{ $value->mob_no2 }}</td>
                          <td>{{ $value->dob }}</td>
                          <td>{{ $value->parent_email }}</td>
                          <td>{{ $value->updated_at }}</td>
                          
                        </tr>
                      @endforeach

                    @endforeach
                
                </tbody>
                <tfoot>
                <tr>
                  <th>S.No</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>School</th>
                  <th>Class</th>
                  <th>Section</th>
                  <th>Gender</th>
                  <th>Email</th>
                  <th>Father's name</th>
                  <th>Father's office address</th>
                  <th>Father's mobile number</th>
                  <th>Mother's name</th>
                  <th>Mother's office address</th>
                  <th>Mother's mobile number</th>
                  <th>Address</th>
                  <th>Mobile1</th>
                  <th>Mobile2</th>
                  <th>D.O.B</th>
                  <th>Parents email</th>
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
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
