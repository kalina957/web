<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DynamicPDFController extends Controller
{
    function index(){
        $items_data = $this->get_items_data();
        return view('item\pdf-index')->with('items_data',$items_data);
    }
    function get_items_data(){

        $items_data = DB::table('items')->limit(12)->get();
        return $items_data;
    }
    function pdf()
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->convert_items_data_to_html());
        return $pdf->stream();
    }
    function convert_items_data_to_html()
    {
        $items_data = $this->get_items_data();
        $output = '
     <h3 align="center">Customer Data</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%">ID</th>
    <th style="border: 1px solid; padding:12px;" width="30%">Name</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Description</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Type</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Price</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Available</th>
   </tr>
     ';
        foreach($items_data as $item)
        {
            $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$item->id.'</td>
       <td style="border: 1px solid; padding:12px;">'.$item->itemName.'</td>
       <td style="border: 1px solid; padding:12px;">'.$item->description.'</td>
       <td style="border: 1px solid; padding:12px;">'.$item->type.'</td>
       <td style="border: 1px solid; padding:12px;">'.$item->price.'</td>
       <td style="border: 1px solid; padding:12px;">'.$item->available.'</td>
      </tr>
      ';
        }
        $output .= '</table>';
        return $output;
    }


}
