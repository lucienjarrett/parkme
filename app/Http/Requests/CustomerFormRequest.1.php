<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Route; 
class CustomerFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
       $id = Route::input('customer'); 
       

        return [
          
            'name' => 'required',
            'plate' =>'required|max:10|unique:customers,plate, '.$id, 
            'company_id' => 'required', 
            'customer_type_id'=> 'required'
       
        ];
    }
}
