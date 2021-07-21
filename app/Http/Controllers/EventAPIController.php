<?php
namespace App\Http\Controllers;


use App\Http\Resources\EventResource;
use App\Http\Resources\EventResourceCollection;
use App\Event;
use Illuminate\Http\Request;

class EventAPIController extends Controller
{
    /**
     * @return EventResourceCollection
     */
    public function index(): EventResourceCollection {
        return new EventResourceCollection(Event::paginate(100));
    }

    /**
     * @param Event $event
     * @return EventResource
     */
    public function show(Event $event): EventResource {
        return new EventResource($event);
    }

    /**
     * @param Request $request
     * @return EventResource
     */
    public function store(Request $request) {
        $request->validate([
        //    'venue_id'=>'required',
           'eventName'=>'required',
        //    'slug'=>'required',
        //    'eventPhoto'=>'required',
           'eventDate'=>'required',
           'eventTimeStart'=>'required',
           'eventTimeEnd'=>'required',
           'eventType'=>'required',
           'eventCost'=>'required'
            // 'is_live'=>'required'
        ]);

        $event = Event::create($request->all());

        return new EventResource($event);
    }

    public function update(Event $event, Request $request): EventResource {

        //update our event
        $event->update($request->all());

        return new EventResource($event);
    }

    /**
     * @param Event $event
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function destroy(Event $event) {
        $event->delete();

        return response()->json();
    }
}

