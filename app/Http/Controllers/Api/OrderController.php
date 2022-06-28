<?php
   
namespace App\Http\Controllers\Api;
   
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use Validator;
use App\Models\Order;
use App\Http\Resources\Order as OrderResource;
   
class OrderController extends BaseController
{

    public function index()
    {
        $order = Order::all();
        return response()->json($order);
    }

   
    public function store(Request $request)
    {
        $input = $request->all();
    

        $validator = Validator::make($input, [
            'product_name' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError($validator->errors());       
        }
        $order = Order::create($input);

        return $this->sendResponse(new OrderResource($order), 'Post created.');
    }

   
    public function show($id)
    {
        $order = Order::find($id);
        if (is_null($order)) {
            return $this->sendError('Post does not exist.');
        }
        return response()->json($order);
    }
    

    // public function update($id, Request $request)
    // {
    //     $product=Offer::find($id);
    //     $product->update($request->all());
        
    //     return $this->sendResponse($product, 'Post updated.');
    // }
   
    // public function destroy($id)
    // {
    //     $offer = Offer::where('id', $id)->delete();
    //     return $this->sendResponse([], 'Post deleted.');
    // }
}