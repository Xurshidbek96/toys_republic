<?php
   
namespace App\Http\Controllers\Api;
   
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use Validator;
use App\Models\Offer;
use App\Http\Resources\Offer as OfferResource;
   
class OfferController extends BaseController
{

    public function index()
    {
        $offer = Offer::all();
        return response()->json($offer);
    }

   
    // public function store(Request $request)
    // {
    //     $input = $request->all();
    //     $user=\Auth::user();
        
    //     // $input['user_id'] = $user->id;

    //     $validator = Validator::make($input, [
    //         'name' => 'required',
    //     ]);

    //     if($validator->fails()){
    //         return $this->sendError($validator->errors());       
    //     }
    //     $offer = Offer::create($input);

    //     return $this->sendResponse(new OfferResource($offer), 'Post created.');
    // }

   
    public function show($id)
    {
        $offer = Offer::find($id);
        if (is_null($offer)) {
            return $this->sendError('Post does not exist.');
        }
        return response()->json($offer);
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