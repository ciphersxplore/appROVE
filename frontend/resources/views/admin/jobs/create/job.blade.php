@extends('layouts.admin')

@section('content')

<div class="container">
    <h1 class="text-center">Create Admin or Employer</h1>
    <div class="card mb-3 m-4">
        <div class="card-header"> 
            <form>
                
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
@endsection
