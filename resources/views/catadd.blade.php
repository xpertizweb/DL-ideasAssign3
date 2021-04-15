<x-app-layout>

    <div id="main-wrapper" data-theme="light" 
 data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" 
 data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">


@extends('include/header')

<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Category ADD</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="dashboard" class="text-muted">Home</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">ADD NEW</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-5 align-self-center">
                <div class="customize-input float-right"> </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Category Add Here</h4>
                      
                        <form method="post" action="catadd"> @csrf
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" name="catagory_name" 
                                    placeholder=" Enter Category Name">

                                    <div class="alert alert-light" role="alert">
                                @error('catagory_name')
                                {{$message}}
                                @enderror
                                    </div>
                                </div>
                                
                            </div>
                            <br>
                            <div class="row">
                                
                                <div class="col">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



</div>
</div>

    </div>

    @extends('include/footer')
    
</x-app-layout>
