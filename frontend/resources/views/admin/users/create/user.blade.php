@extends('layouts.admin')

@section('content')

<div class="container">
    <h1 class="text-center">Create Admin or Employer</h1>
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="card mb-3 m-4">
                <div class="card-header"> 
                    <form>
                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputTitle">First Name</label>
                                <input type="text" class="form-control" placeholder="Ex. Mang" required/>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Last Name</label>
                                <input type="text" class="form-control"  placeholder="Ex. Juan" required/>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputWorkers">Contact Number</label>
                                <input type="number" class="form-control" name="contactNumber" placeholder="0912-345-6789" required/>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputGender">Gender</label>
                                <select id="inputGender" class="form-control " name="gender" required>
                                        <option value="admin">Male</option>
                                        <option value="employer">Female</option>
                                    </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputSalary">Access Type</label>
                                    <select class="form-control " name="access" required>
                                        <option value="admin">Admin</option>
                                        <option value="employer">Employer</option>
                                    </select>
                            </div>
                            
                            <div class="form-group col-md-12">
                                <label for="inputSalary">Skills</label>
                                <div class="form-group">
                                    <textarea id="my-textarea" class="form-control" name="description" rows="3"></textarea>
                                </div>
                            </div>
                            
                            
                            <div class="form-group col-md-12 mt-3">
                                <label><strong>Working Details</strong></label>
                                
                            </div>
                            
                            <div class="form-group col-md-12">
                                <label>Currently Working?: </label>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline3" name="customRadioInline3" class="custom-control-input" required/>
                                    <label class="custom-control-label" for="customRadioInline3">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline4" name="customRadioInline3" class="custom-control-input" required/>
                                    <label class="custom-control-label" for="customRadioInline4">No</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
