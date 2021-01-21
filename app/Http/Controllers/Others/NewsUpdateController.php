<?php

namespace App\Http\Controllers\others;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Newsletter;
use App\Event;
use App\Leadership;

class NewsUpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newsupdates()
    {
        //
        $newsletter =Newsletter::all();
        return view('admin.knowledge.news')->with('newsletter',$newsletter);
    }

    //..........Events............
    public function events()
    {
        //
        $event = Event::all();
        return view('admin.knowledge.events')->with('event',$event);
    }
    public function storeEvents(Request $request)
    {

    $inputs = $request->all();
        $this->validate($request, [
            'eventName' => 'required',
            'eventDesc' => 'required',
            'venue' => 'required',
            'startdate' => 'required',
            'endate' => 'required',
        ]);
        
        $event = new Event;
        $event ->eventName=$request->input('eventName');
        $event ->eventDesc=$request->input('eventDesc');
        $event ->venue=$request->input('venue');
        $event ->startdate=$request->input('startdate');
        $event ->endate=$request->input('endate');
        $event  ->save();
        return redirect('/events')->with('success','Event Added');
    }
    public function editEvent(Request $request,$id)
    {
        $event = Event::find($id);
        $event ->eventName=$request->input('eventName');
        $event ->eventDesc=$request->input('eventDesc');
        $event ->venue=$request->input('venue');
        $event ->startdate=$request->input('startdate');
        $event ->endate=$request->input('endate');
        $event ->update();
        return redirect('/events')->with('success','Event updated!');
    }
    public function destroyEvent($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect('/events')->with('success','Event delete! ');
    }
    //..........leadership............
    public function leadership()
    {
        //
        $leadership = Leadership::all();
        return view('admin.knowledge.leadership')->with('leadership',$leadership);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeLeader(Request $request)
    {
        $inputs = $request->all();
        $this->validate($request, [
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);
            $leadership = new Leadership;
            $leadership ->name=$request->input('name');
            $leadership ->title=$request->input('title');
            $leadership ->description=$request->input('description');
            
            $leadership  ->save();
        return redirect('/leadership')->with('success','Leader Added');
    }
    public function editleader(Request $request,$id)
    {
        $leadership = Leadership::find($id);
        $leadership ->name=$request->input('name');
        $leadership ->title=$request->input('title');
        $leadership ->description=$request->input('description');
        $leadership ->update();
        return redirect('/leadership')->with('success','Detail updated!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeNews(Request $request)
    {
        $inputs = $request->all();
        $this->validate($request, [
            'newsTitle' => 'required',
            'newsCategory' => 'required',
            'newsDesc' => 'required',
            'image' => 'required|file|mimes:jpg,jpeg,bmp,png',
        ]);
          $news = new Newsletter;
          $news ->newsTitle=$request->input('newsTitle');
          $news ->newsCategory=$request->input('newsCategory');
          $news ->newsDesc=$request->input('newsDesc');
          if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension=$file ->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('uploads/news/',$filename);
                $news ->image=$filename;
            }
            $news  ->save();
        return redirect('/news')->with('success','News Added');
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editNews(Request $request,$id)
    {
        $news = Newsletter::find($id);
        $news ->newsTitle=$request->input('newsTitle');
        $news ->newsCategory=$request->input('newsCategory');
        $news ->newsDesc=$request->input('newsDesc');
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('uploads/news'), $filename);
            $news->image = $request->file('image')->getClientOriginalName();
        }
        $news ->update();
        return redirect('/news')->with('success','News updated!');
    }
    public function destroyNews($id)
    {
        $news = Newsletter::find($id);
        $news->delete();
        return redirect('/news')->with('success','News delete! ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
