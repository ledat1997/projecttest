<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
        return [
            'name' => 'required|max:30',
            'email' => 'required|email|min:10',
            'address' => 'required|min:10',
            'role' => 'required|max:1',
            'active' => 'required|max:1'
        ];
    }

    /**
     * 
     * @return array message error
     */
    public function messages()
    {
        return [
            'name.required' =>'Vui lòng nhập tên người dùng',
            'name.max' =>'Không nhập quá 30 ký tự',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Email không hợp lệ',
            'email.min' => 'Vui lòng nhập email từ 10 ký tự',
            'address.required' => 'Vui lòng nhập thông tin địa chỉ của bạn',
            'address.min' => 'Địa chỉ phải ít nhất 10 ký tự',
            'role.required' => 'Vui lòng điền quyền hạn',
            'role.max' => 'Vui lòng không điền lại quyền',
            'active.required' => 'Vui lòng nhập trang thái tài khoản',
            'active.max' => 'Vui lòng không điền lại thông tin trang thái',
        ];
    }
}
