<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateroomsRequest;
use App\Http\Requests\UpdateroomsRequest;
use App\Repositories\roomsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\room;
use Flash;
use Response;
use DB;

class roomsController extends AppBaseController
{
    /** @var  roomsRepository */
    private $roomsRepository;

    public function __construct(roomsRepository $roomsRepo)
    {
        $this->roomsRepository = $roomsRepo;
    }


    public function showRooms(Request $request)
    {

        $data = DB::select('select * from rooms, owners where owners.id = rooms.ownerid');

        return view ('mainpage')->with('rooms', $data);
    }
    /**
     * Display a listing of the rooms.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $rooms = $this->roomsRepository->all();

        return view('rooms.index')
            ->with('rooms', $rooms);
    }

    public function create()
    {   
        $user = auth()->user();
        
        return view('rooms.create')
            ->with('user', $user); 
    }

    /**
     * Store a newly created rooms in storage.
     *
     * @param CreateroomsRequest $request
     *
     * @return Response
     */
    public function store(CreateroomsRequest $request)
    {
        if($request->hasFile('image')){
            $room = new room;
            $room->adress = $request->adress;
            $room->price = $request->price;
            $room->ownerid = $request->ownerid;
            $imageRoom = $request->file('image');
            $path = public_path(). '/images/';
            $filename = time() . '.' . $imageRoom->getClientOriginalExtension();
            $imageRoom->move($path, $filename);
            $room->image = $filename;
            $room->save();
        }
         

        return redirect(route('rooms.index'));
    }

    /**
     * Display the specified rooms.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rooms = $this->roomsRepository->find($id);

        if (empty($rooms)) {
            Flash::error('Rooms not found');

            return redirect(route('rooms.index'));
        }
        $data = DB::select('select * from owners where owners.id = rooms.id');

        return view('rooms.show')->with('rooms', $rooms);
    }

    /**
     * Show the form for editing the specified rooms.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rooms = $this->roomsRepository->find($id);

        if (empty($rooms)) {
            Flash::error('Rooms not found');

            return redirect(route('rooms.index'));
        }
        $user = auth()->user();
        return view('rooms.edit')
            ->with('rooms', $rooms)
            ->with('user',$user);
    }

    /**
     * Update the specified rooms in storage.
     *
     * @param int $id
     * @param UpdateroomsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateroomsRequest $request)
    {
        $rooms = $this->roomsRepository->find($id);

        if (empty($rooms)) {
            Flash::error('Rooms not found');

            return redirect(route('rooms.index'));
        }

        $rooms = $this->roomsRepository->update($request->all(), $id);

        Flash::success('Rooms updated successfully.');

        return redirect(route('rooms.index'));
    }

    /**
     * Remove the specified rooms from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rooms = $this->roomsRepository->find($id);

        if (empty($rooms)) {
            Flash::error('Rooms not found');

            return redirect(route('rooms.index'));
        }

        $this->roomsRepository->delete($id);

        Flash::success('Rooms deleted successfully.');

        return redirect(route('rooms.index'));
    }
}
