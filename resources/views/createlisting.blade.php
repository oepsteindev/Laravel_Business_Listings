 @extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
            Create Listing
            <a href="/larabiz/public/dashboard" class="btn btn-success btn-xs float-right">Go Back</a></span>
        </div>
            <div class="card-body">
            	{!! Form::open(['action' => 'ListingsController@store', 'method' =>'POST']) !!}
     				{{Form::bsText('name','',['placeholder' => 'Company Name'])}}
     				{{Form::bsText('email','',['placeholder' => 'Contact Email'])}}
     				{{Form::bsText('website','',['placeholder' => 'Company Website'])}}
     				{{Form::bsText('phone','',['placeholder' => 'Contact Phone'])}}
     				{{Form::bsText('address','',['placeholder' => 'Business Address'])}}
     				{{Form::bsTextArea('bio','',['placeholder' => 'About this business'])}}
     				{{Form::bsSubmit('submit')}}
				{!! Form::close() !!}
           	 </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection