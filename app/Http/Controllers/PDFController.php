<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;


class PDFController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'title' => 'Genome .....',
            'date' => date('m/d/Y')
        ];
          
        $pdf = PDF::loadView('admin/createPDF', $data);
        
        return $pdf->download('test.pdf');
    }
}
