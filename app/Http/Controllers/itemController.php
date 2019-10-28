<?php

namespace Bulkly\Http\Controllers;

use Illuminate\Http\Request;
use Bulkly\Item;

class itemController extends Controller
{
    public function index(Request $request){
    	$items=Item::leftjoin('social_post_groups','social_post_groups.id','=','buffer_postings.group_id')
    			->leftjoin('social_accounts','social_accounts.id','=','buffer_postings.account_id')

    			->get(['social_post_groups.name as group_name','social_post_groups.type as group_type', 'social_accounts.name as account_name','buffer_postings.*']);
    			$items =Item::paginate(15);

    			if ($request->search) {
    				
    			}
    			if ($request->date) {
    				$dates=Item::whereDate('date',$request->date)
    				->get();
    			}
    			if ($request->group) {
    				$group=Item::where('upload',$request->upload)
    				->orwhere('curation',$request->curation)
    				->orwhere('Autometion',$request->Autometion)
    				->get();
    			}

    			



    	return view('item',['items' => 'items']);
    }
}
