<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class DashboardRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
        ];
    }

    /**
     * Get the data needed to fulfill the request.
     *
     * @return array
     */
    public function data()
    {
        return match ($this->user()->type) {
            'admin'     => $this->adminDashboardData(),
            'masseur'   => $this->massuerDashboardData(),
            'client'    => $this->clientDashboardData()
        };
    }

    public function adminDashboardData()
    {
        return [
            'page'              => 'Admin | Dashboard',
            'admin_count'       => User::admin()->count(),
            'therapist_count'   => User::therapist()->count(),
            'therapists'        => User::therapist()->get(),
            'client_count'      => User::client()->count(),

        ];
    }

    public function massuerDashboardData()
    {
        return [
            'page' => 'Admin | Dashboard',
            'users'  => 0
        ];
    }

    public function clientDashboardData()
    {
        return [
            'page' => 'Dashboard',
            'services'  => 0
        ];
    }
}
