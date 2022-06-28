<?php
   
namespace App\Http\Controllers\Api;
   
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use Validator;
use App\Models\Statistic;
use App\Http\Resources\Statistic as StatisticResource;
   
class StatisticController extends BaseController
{

    public function index()
    {
        $statistic = Statistic::all();
        return $this->sendResponse(StatisticResource::collection($statistic), 'Posts fetched.');
    }

    public function show($id)
    {
        $statistic = Statistic::find($id);
        if (is_null($statistic)) {
            return $this->sendError('Post does not exist.');
        }
        return $this->sendResponse(new StatisticResource($statistic), 'Post fetched.');
    }
}