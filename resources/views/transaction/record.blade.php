@extends('layouts.app')

@section('title', ' | Record')


@section('content')

    <div class="col-md-8">
{{-- {{    dd($customers->customer_type->rate) }}  --}}
        {!! Form::open(['id'=>'calcForm']) !!}
        <div class="form-group">
        {{ Form::label('Customer') }}
        {{ Form::input('customer_id', 'customer_id', $customers->name, ['class'=>'form-control', 'value'=>$customers->id, 'readonly'=>'true']) }}
        </div>

        <div class="form-group">
        {{ Form::label('Time In','Time In') }}
        {{ Form::input('time_in', 'time_in', null, ['class'=>'form-control date', 'id'=>'time_in', 'onkeyup'=>'getTotal(this)', 'type'=>'datetime']) }}
        </div>

         <div class="form-group">
        {{ Form::label('time_out','Time Out') }}
        {{ Form::input('time_out', 'time_out', null, ['class'=>'form-control', 'id'=>'time_out',  'onkeyup'=>'getTotal(this)']) }}
        </div>


        <div class="form-group">
        {{ Form::label('diff','Difference') }}
        {{ Form::input('diff', 'diff', null, ['class'=>'form-control', 'id'=>'diff']) }}

        </div>

         <div class="form-group">
        {{ Form::label('rate','Rate') }}
        {{ Form::input('rate', 'rate', $customers->customer_type->rate, ['class'=>'form-control', 'id'=>'rate', 'readonly'=>'true']) }}
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


        function getQuantity1()
        {
            var theForm = document.forms['calcForm']; 
            var quantity = theForm.elements['time_in']; 
            
            
            return parseInt(quantity.value); 

        }

        function getQuantity2()
        {
            var theForm = document.forms['calcForm']; 
            var quantity = theForm.elements['time_out']; 
            
            
            return parseInt(quantity.value); 

        }



   

        function getTotal()
        {

            getPaidStatus(); 

            //console.log(getPaidStatus()); 

            var total = 0; 
            var diff = 0; 
            var theForm = document.forms['calcForm']; 
            var time_in = theForm.elements['time_in']; 
            var time_out = theForm.elements['time_out']; 
            var diff = theForm.elements['diff'];
        
            
             total = theForm.elements['amount']; 

            
            total.value = (parseInt(time_out.value) - parseInt(time_in.value)) * getRate(); 

            diff.value =  (parseInt(time_out.value) - parseInt(time_in.value)) ; 
            
            //console.log(parseInt(time_in.value) - parseInt(time_out.value)); 
           
            return total; 

        }

        function getPaidStatus()
        {
            
            var theForm = document.forms['calcForm'];
            var paid = theForm.elements['paid'];
            var amount = theForm.elements['amount'];

            var tIn = theForm.elements['time_in']; 
            var tOut = theForm.elements['time_out']; 
           

         

            if(paid.checked == true )
            {
                
                document.getElementById('amount').readOnly = true; 
                document.getElementById('time_in').readOnly = true;
                document.getElementById('time_out').readOnly = true; 
                document.getElementById('diff').readOnly = true; 
                //document.getElementById('rate').readOnly = true; 
            }
            else 
            {
                document.getElementById('amount').readOnly = false;
                document.getElementById('time_in').readOnly = false;
                document.getElementById('time_out').readOnly = false; 
                document.getElementById('diff').readOnly = false; 
                //document.getElementById('rate').readOnly = false; 
            }

              
        }

    </script>

@endsection