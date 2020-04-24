@extends('ivy.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">WELCOME</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                        <a href="students.blade.php" class="btn btn-md btn-dark">Add a new student</a>
                        </div>
                        <div class="col-md-6">
                            <a href="fees.blade.php" class="btn btn-md btn-dark">Add a new fee payment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

