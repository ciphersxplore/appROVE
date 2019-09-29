@extends('layouts.admin')

@section('content')

<h1 class="text-center">Active Jobs</h1>
<div class="card mb-3 m-4">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Job Table
            <a class="btn btn-success float-right" style="color:white" href="">
                <i class="fa fa-briefcase" aria-hidden="true"></i> Create Job Posting </a>
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
                        <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
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
                        <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>

@endsection
