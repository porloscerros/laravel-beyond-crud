<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Domain\Customers\DataTransferObjects\CustomerData;

class CustomerController extends Controller
{

    public function store(CustomerRequest $request, Customer $customer)
    {
        $data = new CustomerData(...$request->validated());

        $customer->name = $data->name;
        $customer->email = $data->email;
        $customer->birth_date = $data->birth_date;
        //$customer->fill($data);
        //$customer->save();
    }
}
