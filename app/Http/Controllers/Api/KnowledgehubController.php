<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\Knowledgehub;

class KnowledgehubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $knowledgehub = Knowledgehub::all();
        
        return response()->json([
            'success' => true,
            'data' => $knowledgehub
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [

            'title' => 'required',
            'description' => 'required',
            'document' => 'required'
            
        ]);

        if ($validator->fails()) {
            // return response
            $response = [
                'success' => false,
                'message' => 'Validation Error.', $validator->errors(),
            ];
            return response()->json($response, 404);
        }

        $knowledgehub = Knowledgehub::create($input);

        // return response
        $response = [
            'success' => true,
            'message' => 'Knowledge successfully created!',
        ];
        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $knowledgehub = Knowledgehub::find($id);

        if (is_null($knowledgehub)) {
            // return response
            $response = [
                'success' => false,
                'message' => 'Data not found.',
            ];
            return response()->json($response, 404);
        }

        // return response
        $response = [
            'success' => true,
            'message' => 'Data retrieved successfully.',
        ];
        return response()->json($response, 200);
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
    public function update(Request $request, Knowledgehub $knowledgehub)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'title' => 'required',
            'description' => 'required',
            'document' => 'required'
        ]);

        if ($validator->fails()) {
            // return response
            $response = [
                'success' => false,
                'message' => 'Validation Error.', $validator->errors(),
            ];
            return response()->json($response, 404);
        }

        $knowledgehub->title = $input['title'];
        $knowledgehub->description = $input['description'];
        $knowledgehub->document = $input['document'];
        $knowledgehub->save();

        // return response
        $response = [
            'success' => true,
            'message' => 'Knowledge hub updated successfully.',
        ];
        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Knowledgehub $knowledgehub)
    {
        $knowledgehub->delete();

        // return response
        $response = [
            'success' => true,
            'message' => 'Data deleted successfully.',
        ];
        return response()->json($response, 200);
       
    }
}
