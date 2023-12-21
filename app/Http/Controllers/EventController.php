<?php

namespace App\Http\Controllers;

use App\Event;
use App\Kegiatan;
use App\Http\Requests\EventRequest;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {

        return view('alumni.pages.calender.index', ['action'=> route('events.store')]);
    }
    // public function ajax(Request $request)
    // {

        // switch ($request->type) {
        // case 'add':
        // $event = Event::create([
        // 'title' => $request->title,
        // 'start' => $request->start,
        // 'end' => $request->end,]);
        // return response()->json($event);
        // break;
        // case 'update':
        // $event = Event::find($request->id)->update([
        // 'title' => $request->title,
        // 'start' => $request->start,
        // 'end' => $request->end,
        // ]);
        // return response()->json($event);
        // break;
        // case 'delete':
        // $event = Event::find($request->id)->delete();
        // return response()->json($event);
        // break;

        // default:
        // break;
        // }
        // }

    public function listEvent(Request $request)
    {
        $start = date('Y-m-d', strtotime($request->start));
        $end = date('Y-m-d', strtotime($request->end));
        $events = Event::where('event_start_date', '>=', $start)
        ->where('event_end_date', '<=' , $end)->get()
        ->map( fn ($item) => [
            'id' => $item->id,
            'title' => $item->event_title,
            'start' => $item->event_start_date,
            'end' => date('Y-m-d',strtotime($item->event_end_date. '+1 days')),
            'event_description' => $item->event_description,
            'event_start_time' => $item->event_start_time,
            'event_end_time' => $item->event_end_time,
            'className' => ['bg-'. $item->category]
        ]);

        return response()->json($events);
    }
    public function indexUNI()
    {

        return view('super.pages.master.calender');
    }

    public function listEventSuper(Request $request)
    {
        $start = date('Y-m-d', strtotime($request->start));
        $end = date('Y-m-d', strtotime($request->end));

        $events = Kegiatan::where('waktu', '>=', $start)
        ->where('waktu', '<=' , $end)->get()
        ->map( fn ($item) => [
            'id' => $item->id,
            'title' => $item->nama_kegiatan,
            'start' => $item->waktu,
            'end' => date('Y-m-d',strtotime($item->waktu. '+1 days')),
            'tempat' => $item->tempat,
            'penyelenggara' => $item->penyelenggara,
            'jenis_kegiatan' => $item->jenis_kegiatan,
            'keterangan' => $item->keterangan,
            'file' => $item->file,
            'tujuan' => $item->tujuan
        ]);

        return response()->json($events);
    }

    public function listEventSuper1(Request $request)
    {
        $start = date('Y-m-d', strtotime($request->start));
        $end = date('Y-m-d', strtotime($request->end));

        $events = Kegiatan::where('waktu', '>=', $start)
        ->where('waktu', '<=' , $end)->get()
        ->map( fn ($item) => [
            'id' => $item->id,
            'title' => $item->nama_kegiatan,
            'start' => $item->waktu,
            'end' => date('Y-m-d',strtotime($item->waktu. '+1 days')),
            'tempat' => $item->tempat,
            'penyelenggara' => $item->penyelenggara,
            'jenis_kegiatan' => $item->jenis_kegiatan,
            'keterangan' => $item->keterangan,
            'file' => $item->file,
            'tujuan' => $item->tujuan
        ]);

        return response()->json($events);
    }
    public function listEventSuperMahasiswa(Request $request)
    {
        $start = date('Y-m-d', strtotime($request->start));
        $end = date('Y-m-d', strtotime($request->end));

        $events = Kegiatan::where('waktu', '>=', $start)
        ->where('waktu', '<=' , $end)->get()
        ->map( fn ($item) => [
            'id' => $item->id,
            'title' => $item->nama_kegiatan,
            'start' => $item->waktu,
            'end' => date('Y-m-d',strtotime($item->waktu. '+1 days')),
            'tempat' => $item->tempat,
            'penyelenggara' => $item->penyelenggara,
            'jenis_kegiatan' => $item->jenis_kegiatan,
            'keterangan' => $item->keterangan,
            'file' => $item->file,
            'tujuan' => $item->tujuan
        ]);

        return response()->json($events);
    }
    public function create(Event $event)
    {

        return view('alumni.pages.calender.event-form', ['data' => $event,'action'=> route('events.store')]);
    }

    public function store1(Request $request,Event $event)
    {
       $event->event_title =$request->title;
       $event->event_start_date =$request->start_date;
       $event->event_end_date =$request->end_date;
       $event->event_start_time =$request->strat_time;
       $event->event_end_time =$request->end_strat_time;
       $event->event_description =$request->category;
       $event->save();
        return $event;
     }

    public function show(Event $event)
    {
        // ... (tidak ada perubahan pada metode ini)
    }

    public function edit(Event $event)
    {
        $action = route('events.update', $event->id);
        return view('alumni.pages.calender.index', compact('event', 'action'));
    }

    public function update1(Request $request,$id)
    {

        dd($request->all());
        // return response()->json(['message' => 'Event updated successfully']);
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Delete data successfully'
        ]);
    }
}
