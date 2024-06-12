<?php

namespace App\Http\Controllers;
use App\Models\Item;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
class ItemController extends Controller
{
//    public function index()
//    {
//     return Item :: orderBy('created_at', 'DESC')->get();
//    } 
public function index()
{
    $items = Item::orderBy('created_at', 'DESC')->get();
    if ($items->count() > 0) {
        return response()->json([
            'status' => 200,
            'items' => $items
        ], 200);
    } else {
        return response()->json([
            'status' => 404,
            'message' => 'No records found',
            'csrf' => csrf_token()
        ], 404);
    }
}
public function store(Request $request) // Fix typo in parameter name
{
    $newItem = new Item;
    $newItem->name = $request->item["name"]; // Access request data correctly
    $newItem->save();

    return $newItem; // Return the new item object, not a function call
}

// public function store(Request $request)
// {
//     $validator = Validator::make($request->all(), [
//         'name' => 'required|string|max:255',
//     ]);
  
//     if ($validator->fails()) {
//         return response()->json([
//             'status' => 422,
//             'errors' => $validator->messages()
//         ], 422);
//         console.log('am here');
//     } else {
//         try {
//             $item = Item::create([
//                 'name' => $request->name,
//             ]);

//             return response()->json([
//                 'status' => 200,
//                 'message' => 'Item created successfully'
//             ], 200);
//         } catch (\Exception $e) {
//             return response()->json([
//                 'status' => 500,
//                 'message' => 'Something went wrong',
//                 'error' => $e->getMessage()
//             ], 500);
//         }
//     }
// } 
public function update(Request $request, $id)
{
    $exstingItem = Item::find($id);
    if($exstingItem){
        $exstingItem->completed = $request->item['completed'] ? true:false;
        $exstingItem->completed_at = $request->item['completed'] ? Carbon::now():null;
        $exstingItem->save();
        return $exstingItem;
    }
    return "Item not found..";
}
public function destroy(Request $request, $id)
{
    $exstingItem = Item::find($id);
    if($exstingItem){
        $exstingItem->delete();
        return "deleted successfully";
    }
    return "Item not found..";
}
}
