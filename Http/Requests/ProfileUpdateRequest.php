<?php

namespace Gkiokan\Profile\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
{

    public function xmessages(){
        return [
            'validation.alpha_spaces' => 'FU',
            'alpha_spaces' => "The :attribute may only contain letters and spaces. XX",
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname' => 'required|min:3|alpha_spaces',
            'lastname'  => 'required|min:3|alpha_spaces',
            'bday'      => 'date_format:d.m.Y',

            'street'=> 'alpha_spaces',
            'plz'   => 'numeric',
            'city'  => 'required|min:3|alpha_dash',
            'state' => 'alpha_spaces',
            'country' => 'alpha_spaces',

            'tel'   => 'alpha_spaces',
            'fax'   => 'alpha_spaces',
            'mobil' => 'alpha_spaces'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
