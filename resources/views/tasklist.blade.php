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
                            <li class="breadcrumb-item text-muted active" aria-current="page">Manage Tasks</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-5 align-self-center">
                <div class="customize-input float-right">
                    
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
<div class="container-fluid">
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                         
                        <a href="taskadd" class="btn waves-effect waves-light btn-rounded btn-outline-success"> 
                         ADD NEW</a><br><br>
                         {{session('message')}}
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                <thead>
                                    <tr>
                                        <th>SR No</th>
                                        <th>CATEGORY_NAME</th>
                                        <th>TASK_CODE</th>
                                        <th>TASK_NAME</th>
                                        <th>TASK_INFO</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {{$i=""}}
                               @foreach($keys as $value)
                               <tr>
                                   <td>{{++$i}}</td>
                                   <td>{{$value->catagory->catagory_name}}</td>
                                   <td>{{$value['task_code']}}</td>
                                   <td>{{$value['task_name']}}</td>
                                   <td>{{$value['task_info']}}</td>
                                   <td><a href={{"edit/".$value['id']}} class="btn btn-outline-warning" ><i class="far fa-edit"></i></a> 
                                      <a href={{"delete/".$value['id']}} class="btn btn-outline-danger" ><i class="far fa-trash-alt"></a></td>

                               </tr>
                                </tbody>
                              @endforeach
                            </table>

                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>


@extends('include/footer')

</div>
    </div>


    
</x-app-layout>

