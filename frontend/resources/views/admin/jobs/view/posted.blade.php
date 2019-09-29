@extends('layouts.admin')

@section('content')

<h1 class="text-center">Posted Jobs</h1>
<div class="card mb-3 m-4">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Jobs Table
            <a class="btn btn-success float-right" style="color:white" href="">
                <i class="fa fa-briefcase" aria-hidden="true"></i> Create Job Posting</a>
        </div>
          <div class="card-body">
            <div class="table-responsive"></div>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>
                        <button class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></button>
                        <button class="btn btn-primary" ><i class="fas fa-edit"></i></button>
                        <button class="btn btn-danger" ><i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>Michael Bruce</td>
                    <td>Javascript Developer</td>
                    <td>Singapore</td>
                    <td>29</td>
                    <td>2011/06/27</td>
                    <td>$183,000</td>
                    <td>
                        <button class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></button>
                        <button class="btn btn-primary" ><i class="fas fa-edit"></i></button>
                        <button class="btn btn-danger" ><i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>Donna Snider</td>
                    <td>Customer Support</td>
                    <td>New York</td>
                    <td>27</td>
                    <td>2011/01/25</td>
                    <td>$112,000</td>
                    <td>
                        <button class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></button>
                        <button class="btn btn-primary" ><i class="fas fa-edit"></i></button>
                        <button class="btn btn-danger" ><i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>


            {{-- Edit item modal --}}
    {{-- @foreach ($buses as $bus) --}}
    <div class="modal fade" id="{{-- edit_bus{{ $bus->_id }} --}}" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title ml-auto" id="my-modal-title">Edit Bus</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="/Edit_bus/{{-- {{ $bus->_id }} --}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputTitle">Job Title</label>
                        <input type="text" class="form-control" id="inputTitle" placeholder="Ex. Welder/House Maid/Carpenter" required/>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Location</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Work Place" required/>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputWorkers">No. of Workers Needed</label>
                        <input type="number" class="form-control" id="inputWorkers" min="0" step="1" placeholder="0" required/>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputDate">Start Date</label>
                        <input type="date" name="startdate" min="2019-09-01" class="form-control" id="inputDate">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputSalary">Salary</label>
                        <input type="number" class="form-control" id="inputSalary" min="0" step="1" placeholder="P">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="inputSalary">Job Description</label>
                        <div class="form-group">
                            <textarea id="my-textarea" class="form-control" name="description" rows="3"></textarea>
                        </div>
                    </div>
                    
                    
                    <div class="form-group col-md-12 mt-3">
                        <label><strong>Working Details</strong></label>
                        
                    </div>
                    
                    <div class="form-group col-md-12">
                        <label>Status:</label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" required/>
                            <label class="custom-control-label" for="customRadioInline1">Full Time</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input" required/>
                            <label class="custom-control-label" for="customRadioInline2">Part Time</label>
                        </div>
                    </div>
                    
                    <div class="form-group col-md-12">
                        <label>Project-based? </label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline3" name="customRadioInline3" class="custom-control-input" required/>
                            <label class="custom-control-label" for="customRadioInline3">Yes</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline4" name="customRadioInline3" class="custom-control-input" required/>
                            <label class="custom-control-label" for="customRadioInline4">No</label>
                        </div>
                    </div>
                    
                    <div class="form-group col-md-12 mt-3">
                        <label><strong>Contact Person</strong></label>
                        
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" id="inputName" placeholder="" required/>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="inputPhone">Phone Number</label>
                        <input type="tel" pattern="^\d{4}-\d{3}-\d{4}$" class="form-control" id="inputPhone" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" maxlength="12"  title="Ten digits code" required/>
                    </div>
                    
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endforeach



    {{-- Delete item modal --}}
    {{-- @foreach ($buses as $bus) --}}
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true" id="{{-- delete_bus{{ $bus->_id }} --}}">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="my-modal-title">Delete Bus</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="/Delete_bus/{{-- {{ $bus->_id }} --}}">
                        @csrf
                        @method('DELETE')
                        Are you sure you want to delete {{-- {{ $bus->busName }} --}}?

                        <hr>
                        <div class="text-right">

                            <button class="btn btn-danger">Delete</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
