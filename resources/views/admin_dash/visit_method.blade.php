@extends('layouts.admin_dash')
@section('content')
    @include('inc.messages')
    <div class="row">
    <div class="col-md-12 c_text login_page col-md-4 wow fadeInRight"data-wow-duration="2s" data-wow-offset="300">
        <table class="table table-responsive table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>type</th>
                <th>update</th>
                <th>delete</th>
            </tr>
            </thead>
            <tbody>

            @foreach($methods as $method)

                <tr>
                    <td>{{ $method->id }} </td>
                    <td>{{ $method->type }}</td>
                    <td><button class="btn btn-success" id="edit" data-toggle="modal" data-target="#edit-modal-method" data-id="{{ $method->id }}" data-title="{{$method->type}}" >update</button></td>
                    <td>{{Form::open(['action' => ['VisitMethodsController@destroy',$method->id]])}}
                        {{method_field('DELETE')}}
                        {{Form::submit('Delete',['class' => 'btn btn-danger '])}}
                        {{ Form::close() }}</td>
                </tr>

            @endforeach



            </tbody>
        </table>

    </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter-new">Add new</button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter-new" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">update item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{Form::open(['action' => ['VisitMethodsController@store']])}}
                    {{Form::label('type', 'type')}}
                    {{Form::text('type','',['class' => 'form-control'])}}<br>
                    {{Form::submit('save changes',['class' => 'btn btn-primary btn-lg btn-block'])}}

                    {{ Form::close() }}

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="edit-modal-method" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">update item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{Form::open()}}
                    {{method_field('PUT')}}
                    {{Form::label('type', 'type')}}
                    {{Form::text('type', '' ,['class' => 'form-control','id' => 'type-edit'])}}<br>
                    {{Form::submit('save changes',['class' => 'btn btn-primary btn-lg btn-block'])}}
                    {{ Form::close() }}

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


@endsection
