<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function viewProduct()
    {

        return view('addproduct');
    }    public function viewproductlist()
    {
        $datas  = product::all();
        return view('view/product_view',compact('datas'));
    }

    public function productstore(Request $request)
    {
        $data = new product();
        $data->pro_name =  $request->pro_name;
        $data->pro_select =  $request->pro_select;
        $data->purchas_prise =  $request->purchas_prise;
        $data->sell_prise =  $request->sell_prise;
        $data->pro_stock =  $request->pro_stock;
        $data->pro_descriotion =  $request->pro_descriotion;
        $data->proImg =  $request->proImg;
        $data->pro_qnt =  $request->pro_qnt;
        $data->pro_stock =  $request->pro_stock;

        if ($request->hasFile('image')) {
            $img = $request->file('image')->extension();

            $file_name = uniqid() . "catagory" . "." . $img;
            $image = $request->image->storeAs('upload/', $file_name, 'public');
            $data->cat_img = $file_name;
        }
        $data->save();
        return redirect()->route('viewproductlist')->with('massage', 'product successfully add');
    }
}
