<?php

namespace App\Models;

use App\Models\CustomerAddress;

class CustomerBillingAddress extends CustomerAddress
{
    protected $table = 'customer_billing_addresses';
}
