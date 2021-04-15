<x-app-layout>

    <div id="main-wrapper" data-theme="light" 
 data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" 
 data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">


@extends('include/header')

<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Task Management</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="dashboard" class="text-muted">Home</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Task Update</li>
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
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif                      
                        <form method="post" action="/taskedit"> @csrf
                            <input type="hidden" name="id" value="{{$data->id}}"/>
                            <div class="row">
                                <div class="col">
                                    <select name="catagory_id">
                                     @foreach($catagories as $value)
                                     <option value="{{$value['id']}}" @if($data->catagories_id == $value['id']) selected="selected"
                                         @endif>{{$value['catagory_name']}}</option>
                                     @endforeach
                                    </select>

                                    <div class="alert alert-light" role="alert">
                                @error('catagories_id')
                                {{$message}}
                                @enderror
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" name="task_code" 
                                    placeholder=" Enter Task Code" value="{{$data->task_code}}">

                                    <div class="alert alert-light" role="alert">
                                @error('hobby_code')
                                {{$message}}
                                @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="task_name" 
                                    placeholder=" Enter Task Name" value="{{$data->task_name}}">

                                    <div class="alert alert-light" role="alert">
                                @error('hobby_name')
                                {{$message}}
                                @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="task_info" 
                                    placeholder="Enter Task Info" value="{{$data->task_info}}">
                                    <div class="alert alert-light" role="alert">
                                    @error('hobby_info')
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
