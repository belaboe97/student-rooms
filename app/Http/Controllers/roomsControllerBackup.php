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
use Illuminate\Support\Str;


class roomsController extends AppBaseController
{
    /** @var  roomsRepository */
    private $roomsRepository;

    public function __construct(roomsRepository $roomsRepo)
    {
        $this->roomsRepository = $roomsRepo;
    }

    /**
     * Display a listing of the rooms.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function showRooms(Request $request)
    {

        $data = DB::select('select * from rooms, owners where owners.id = rooms.id');

        return view ('mainpage')->with('rooms', $data);
    }

    
    public function index(Request $request)
    {
        $rooms = $this->roomsRepository->all();

        return view('rooms.index')
            ->with('rooms', $rooms);
    }

    /**
     * Show the form for creating a new rooms.
     *
     * @return Response
     */
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
        $input = $request->all();



        $rooms = $this->roomsRepository->create($input);

        Flash::success('Rooms saved successfully.');

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

        return view('rooms.edit')->with('rooms', $rooms);
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
