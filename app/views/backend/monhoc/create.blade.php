@extends('master')
@section('content')
    <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
		   		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		   		<h4 class="modal-title" id="exampleModalLabel"><h2>{{$title}}</h2></h4>
		  	</div>
		  	<div class="modal-body">
                {{Form::open(array('route'=>'create_post'))}}
                    <p class="minihead">Tên môn học:</p>
                    {{Form::text('tenmonhoc',Input::old('tenmonhoc'),array('class'=>'form-control'))}}<br />
                    {{Form::submit('Thêm mới',array('class'=>'btn btn-primary btn-lg'))}}
                {{Form::close()}}
            </div>
		  	<div class="modal-footer">
		   		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  	</div>
	 	</div>
	</div>
@endsection