<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offer = Offer::orderBy('id', 'desc')->paginate(6);
        
        return view('admin.offers.index', compact('offer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $offer = DB::table('offers');
        
        return view('admin.offers.create',compact('offer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        if($request->hasfile('img1')) {
            $obg1 = new Offer();
            $destinationPath = 'img';
            $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img1->   getClientOriginalExtension();
            $request->img1->move($destinationPath, $imageName);
            $obg1->img1 = '/' . $destinationPath . '/' . $imageName;

            $img1 = $obg1->img1;
        }

        else
            $img1 = "";

        if($request->hasfile('img2')) {
            $obg2 = new Offer();
            $destinationPath = 'img';
            $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img2->   getClientOriginalExtension();
            $request->img2->move($destinationPath, $imageName);
            $obg2->img2 = '/' . $destinationPath . '/' . $imageName;

            $img2 = $obg2->img2 ;
        }

        else
            $img2 = "";

        if($request->hasfile('img3')) {
            $obg3 = new Offer();
            $destinationPath = 'img';
            $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img3->   getClientOriginalExtension();
            $request->img3->move($destinationPath, $imageName);
            $obg3->img3 = '/' . $destinationPath . '/' . $imageName;

            $img3 = $obg3->img3;
        }

        else
            $img3 = "";

        if($request->hasfile('file'))
            $path = $request->file('file')->store('files');
        else
            $path = "";

        
        DB::table('offers')
             ->insert(array(
            'type' => $request->type,
            'name' => $request->name_uz,
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'price' => $request->price,
            'articul' => $request->articul,
            'qr' => $request->qr,
            'size_toy' => $request->size_toy,
            'case_uz' => $request->case_uz,
            'case_ru' => $request->case_ru,
            'case_en' => $request->case_en,
            'size_case' => $request->size_case,
            'casegroup_uz' => $request->casegroup_uz,
            'casegroup_ru' => $request->casegroup_ru,
            'casegroup_en' => $request->casegroup_en,
            'weight' => $request->weight,
            'count' => $request->count,
            'img1' =>  $img1,
            'img2' =>  $img2,
            'img1' =>  $img1,
            'file' =>  $path
        ));

          return redirect()->route('offer.index')
                                    ->with('success','Yangilik qo`shildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offer = DB::table('offers')->where('id', $id)->get(); // id
        return view('admin.offers.edit',compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {

        if($request->img1) {
            $obg1 = new Offer();
            $destinationPath = 'img';
            $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img1->   getClientOriginalExtension();
            $request->img1->move($destinationPath, $imageName);
            $obg1->img1 = '/' . $destinationPath . '/' . $imageName;

            DB::table('offers')->where('id', $id)->update(['img3'=>$obg3->img3]);
        }

        if($request->img2) {
            $obg2 = new Offer();
            $destinationPath = 'img';
            $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img2->   getClientOriginalExtension();
            $request->img2->move($destinationPath, $imageName);
            $obg2->img2 = '/' . $destinationPath . '/' . $imageName;

            DB::table('offers')->where('id', $id)->update(['img2'=>$obg2->img2]);
        }

        if($request->img3) {
            $obg3 = new Offer();
            $destinationPath = 'img';
            $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img3->   getClientOriginalExtension();
            $request->img3->move($destinationPath, $imageName);
            $obg3->img3 = '/' . $destinationPath . '/' . $imageName;

            DB::table('offers')->where('id', $id)->update(['img3'=>$obg3->img3]);
        }

        if ($request->file) {
            $obg = new Offer();
             $destinationPath = 'files';
             $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->file->getClientOriginalExtension();
             $request->file->move($destinationPath, $imageName);
             $obg->file = '/' . $destinationPath . '/' . $imageName;
            
             $im =  $obg->file;
             DB::table('offers')->where('id', $id)->update(['file' => $im]);
        }


        $arrayName = array(
            'type' => $request->type,
            'name' => $request->name_uz,
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'price' => $request->price,
            'articul' => $request->articul,
            'qr' => $request->qr,
            'size_toy' => $request->size_toy,
            'case_uz' => $request->case_uz,
            'case_ru' => $request->case_ru,
            'case_en' => $request->case_en,
            'size_case' => $request->size_case,
            'casegroup_uz' => $request->casegroup_uz,
            'casegroup_ru' => $request->casegroup_ru,
            'casegroup_en' => $request->casegroup_en,
            'weight' => $request->weight,
            'count' => $request->count        
        );

         $offer = DB::table('offers')->where('id', $id)->update($arrayName);
    

            return redirect()->route('offer.index')
                            ->with('success','Yangilanish bajarildi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offer=DB::table('offers')->where('id', $id)->delete();

        return redirect()->route('offer.index')
                        ->with('success','Ma`lumot o`chirildi');
    }
}
