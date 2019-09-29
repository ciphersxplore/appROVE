@extends('layouts.admin')

@section('content')

<div class="container">
    <h1 class="text-center">Create Transport Schedule</h1>
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="card mb-3 m-4">
                <div class="card-header"> 
                    <form>
                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputTitle">Vehicle Plate#</label>
                                <input type="text" class="form-control" id="inputTitle" placeholder="Ex. ABC123" required/>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Departure Location</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="BRGY. Hall Entrance" required/>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputWorkers">Departure Time</label>
                                <input type="time" class="form-control" id="inputWorkers" required/>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputDate">Arrival Time</label>
                                <input type="time" class="form-control" id="inputWorkers" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputSalary">Arrival Locations</label>  
                                <input type="text" name="startdate" class="form-control" id="inputDate" placeholder="Makati, Cubao, Ortigas, .." required>
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
