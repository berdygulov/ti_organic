<?php

namespace App\Http\Controllers;

use App\Exports\TestExport;
use Maatwebsite\Excel\Facades\Excel;

class Test extends Controller
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        return (new TestExport)->store('products.csv', 'excel');
    }
}
