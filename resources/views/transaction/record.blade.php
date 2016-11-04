@extends('layouts.app')

@section('title', ' | Record')


@section('content')

    <div class="col-md-8">
{{-- {{    dd($customer) }} --}}
        {!! Form::open(['id'=>'calcForm']) !!}
        <div class="form-group">
        {{ Form::label('Customer') }}
        {{ Form::select('customer_id', $customer, null, ['class'=>'form-control']) }}
        </div>

        <div class="form-group">
        {{ Form::label('Time In','Time In') }}
        {{ Form::input('time_in', 'time_in', null, ['class'=>'form-control date', 'id'=>'time_in', 'onkeyup'=>'getTotal(this)']) }}
        </div>

         <div class="form-group">
        {{ Form::label('time_out','Time Out') }}
        {{ Form::input('time_out', 'time_out', null, ['class'=>'form-control', 'id'=>'time_out']) }}
        </div>

         <div class="form-group">
        {{ Form::label('rate','Rate') }}
        {{ Form::input('rate', 'rate', 12, ['class'=>'form-control', 'id'=>'rate']) }}
        </div>

      <div class="form-group">
        {{ Form::label('amount','Amount: ') }}
        {{ Form::input('amount', 'amount', null, ['class'=>'form-control', 'id'=>'amount']) }}
        </div>



         <div class="form-group">
          {{ Form::label('paid', 'Paid?') }}  
        {{ Form::checkbox('paid', 1, null, ['class' => 'checkbox', 'id'=>'paid', 'onclick'=>'getPaidStatus(this)']) }}
        </div>

        {{ Form::submit('Save', ['class'=>'btn btn-primary pull-right']) }}

        {!! Form::close() !!}
    
    </div>

    <script>    
        function getRate()
        {
            var theForm = document.forms['calcForm']; 
            var rate = theForm.elements['rate'];

            var howMany = 0; 
            if(rate.value!="")
            {
                howMany = parseInt(rate.value);
            } 
            return howMany; 
        }


        function getQuantity()
        {
            var theForm = document.forms['calcForm']; 
            var quantity = theForm.elements['time_in']; 
            
            
            return parseInt(quantity.value); 

        }


        function getTotal()
        {

            getPaidStatus(); 

            var total = 0; 
            var theForm = document.forms['calcForm']; 
            total = theForm.elements['amount']; 

            total.value = getQuantity() * getRate(); 
            
           
            return total; 

        }

        function getPaidStatus()
        {
            var theForm = document.forms['calcForm'];
            var paid = theForm.elements['paid'];

            if(paid.checked == true)
            {
                document.getElementById('amount').readOnly = true; 
            }
            else 
            {
                document.getElementById('amount').readOnly = false;
            }

              
        }

    </script>

@endsection