@extends('layouts.admin')

@section('content')

<div class="container">
    <h1 class="text-center">Create Training Schedule</h1>
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="card mb-3 m-4">
                <div class="card-header"> 
                    <form>
                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputTitle">Training Title</label>
                                <input type="text" class="form-control" id="inputTitle" placeholder="Ex. NCII Carpentry/PC Servicing" required/>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Location</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="BRGY. HAll (Training Room 1)" required/>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputWorkers">Start Time</label>
                                <input type="time" class="form-control" id="inputWorkers" required/>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputDate">End Time</label>
                                <input type="time" class="form-control" id="inputWorkers" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputSalary">Date</label>
                                <input type="date" name="startdate" min="2019-09-01" class="form-control" id="inputDate" required>
                            </div>
                            
                            <div class="form-group col-md-12">
                                <label for="inputSalary">Training Description</label>
                                <div class="form-group">
                                    <textarea id="my-textarea" class="form-control" name="description" rows="5"></textarea>
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
