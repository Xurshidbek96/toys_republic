<?php
   
namespace App\Http\Controllers\Api;
   
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use Validator;
use App\Models\Partner;
use App\Http\Resources\Partner as PartnerResource;
   
class PartnerController extends BaseController
{

    public function index()
    {
        $partner = Partner::all();
        return $this->sendResponse(PartnerResource::collection($partner), 'Posts fetched.');
    }

    public function show($id)
    {
        $partner = Partner::find($id);
        if (is_null($partner)) {
            return $this->sendError('Post does not exist.');
        }
        return $this->sendResponse(new PartnerResource($partner), 'Post fetched.');
    }
}