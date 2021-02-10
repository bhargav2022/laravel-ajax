<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use DB;


class productsController extends Controller
{
    // public function list()
    // {
    //     return view('list');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $values=$_POST;
       // print_r($_POST);
        // die();
       // DB::table('products')->insert($values);
        $products = new products;
                $products->name = $values['name'];
                $products->price = $values['price'];
				$products->desc = $values['desc'];
                $products->qty = $values['qty'];
                $products->discount = $values['discount'];
                $products->total = $values['total'];
                $products->save();

                if(empty($product)){
                    echo "1";
                }
                else{
                    echo "0";
                }
			//	return redirect('create')->with('status',"Insert successfully");
         //die();
       //echo 'WERFG';
       //return $data = $request->all();
           //echo "hello";
        //  $request->validate([
        //     'name' => 'required',
        //     'price' => 'required',
        //     'description' => 'required',
        //     'qty' => 'required',
            
        // ]);
        //  products::store($request->all());
        // return json_encode(array(
        //   "statusCode"=>200
        //  ));
   
        //  $data=new products;
        //  $data->name= $request('name');
        // //  print_r($data->name);
        //  $data->price=$request('price');
        //  $data->description=$request('desc');
        //  $data->qty=$request('qty');
        //  $data->discount=$request('discount');
        //  $data->total=$request('total');
        //  $data->save();
        // products::create([
        //     'name'=>$request-> name,
        //     'price'=>$request-> price,
        //     'description'=>$request-> description,
        //     'qty'=>$request-> qty,
        //     'discount'=>$request-> discount,
        //     'total'=> $request->total,  
        //   ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     function prolist()
    {

    
     // $pro= DB::table('products')->get();

      $product = DB::table('products')->select( 'id','name', 'price','desc','qty','discount','total',)->get();

        // $blog = products::find(1);
        // print_r($blog);
       return response($product);
       //return view('list',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
