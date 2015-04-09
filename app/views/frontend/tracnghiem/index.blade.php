@extends('master')
@section('content')

<form action="{{URL::route('tracnghiem_post')}}" method="POST">
		<?php $i=0; ?>
		@foreach($questions as $question)
		<?php $i++; ?>
		<h5 class="alert alert-success" role="alert">{{$i}}.{{$question->tencauhoi}}<span style="color:red">({{$question->diem}}đ)</span></h5>
		
		<?php $dapans = $question->dapan; ?>
			@foreach($dapans as $dapan)
			
				<div class="checkbox">
					<label>
						<input type="radio" value="{{$dapan->id}}" name="dapan[{{$question->id}}]">
					  {{$dapan->tendapan}}
					</label>
				  </div>
			@endforeach
		@endforeach
		<input type="submit" value="Submit" class="btn btn-primary" />
	</form>
@stop