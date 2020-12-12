<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\Corporate;

class CorporateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $corporate = Corporate::all();
        
        return response()->json([
            'success' => true,
            'data' => $corporate
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
            'orgName' => 'required',
            'postalAddress' => 'required',
            'telephone' => 'required',
            'fax' => 'required',
            'email' => 'required',
            'physicalAddress' => 'required',
            'contactPerson' => 'required',
            'title' => 'required',
            'sector' => 'required',
            'noOfstaff' => 'required',
            'interest' => 'required'
        ]);

        if ($validator->fails()) {
            // return response
            $response = [
                'success' => false,
                'message' => 'Validation Error.', $validator->errors(),
            ];
            return response()->json($response, 404);
        }

        $corporate = Corporate::create($input);

        // return response
        $response = [
            'success' => true,
            'message' => 'Application successfully.',
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
        // return $id;
        $corporate = Corporate::find($id);
        return $corporate;

        if (is_null( $corporate )) {
            // return response
            $response = [
                'success' => false,
                'message' => 'Application not found.',
            ];
            return response()->json($response, 404);
        }

        // return response
        $response = [
            'success' => true,
            'message' => 'Applicant retrieved successfully.',
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
    public function update(Request $request, Corporate $corporate)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'orgName' => 'required',
            'postalAddress' => 'required',
            'telephone' => 'required',
            'fax' => 'required',
            'email' => 'required',
            'physicalAddress' => 'required',
            'contactPerson' => 'required',
            'title' => 'required',
            'sector' => 'required',
            'noOfstaff' => 'required',
            'interest' => 'required'
        ]);

        if ($validator->fails()) {
            // return response
            $response = [
                'success' => false,
                'message' => 'Validation Error.', $validator->errors(),
            ];
            return response()->json($response, 404);
        }

        $corporate->orgName = $input['orgName'];
        $corporate->postalAddress = $input['postalAddress'];
        $corporate->telephone = $input['telephone'];
        $corporate->fax = $input['fax'];
        $corporate->email = $input['email'];
        $corporate->mailingAdd = $input['mailingAdd'];
        $corporate->physicalAddress = $input['physicalAddress'];
        $corporate->contactPerson = $input['contactPerson'];
        $corporate->title = $input['title'];
        $corporate->sector = $input['sector'];
        $corporate->noOfstaff = $input['noOfstaff'];
        $corporate->interest = $input['interest'];
        $corporate->save();

        // return response
        $response = [
            'success' => true,
            'message' => 'Applicant updated successfully.',
        ];
        return response()->json($response, 200);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Corporate $corporate)
    {
        $corporate->delete();

        // return response
        $response = [
            'success' => true,
            'message' => 'Apllicant deleted successfully.',
        ];
        return response()->json($response, 200);
       
    }
}
