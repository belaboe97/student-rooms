<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateroomratingRequest;
use App\Http\Requests\UpdateroomratingRequest;
use App\Repositories\roomratingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB; 

class roomratingController extends AppBaseController
{
    /** @var  roomratingRepository */
    private $roomratingRepository;

    public function __construct(roomratingRepository $roomratingRepo)
    {
        $this->roomratingRepository = $roomratingRepo;
    }  


    public function rateroom($roomid)
    {
        return view('roomratings.rateroom')->with('roomid',$roomid);
    }


    public function showroomratings($roomid)
    {
        $roomratings = $this->roomratingRepository->all()->where('roomid',$roomid);
        return view('roomratings.index')
            ->with('roomratings', $roomratings);
    }

    public function index(Request $request)
    {
        $roomratings = $data = DB::select('select * from rooms, roomrating where roomrating.roomid = rooms.id');

        return view('roomratings.index')
            ->with('roomratings', $roomratings);
    }

    /**
     * Show the form for creating a new roomrating.
     *
     * @return Response
     */
    public function create()
    {
        return view('roomratings.create');
    }

    /**
     * Store a newly created roomrating in storage.
     *
     * @param CreateroomratingRequest $request
     *
     * @return Response
     */
    public function store(CreateroomratingRequest $request)
    {
        $input = $request->all();

        $roomrating = $this->roomratingRepository->create($input);

        Flash::success('Roomrating saved successfully.');

        return redirect(route('rooms.index'));
    }

    /**
     * Display the specified roomrating.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $roomrating = $this->roomratingRepository->find($id);

        if (empty($roomrating)) {
            Flash::error('Roomrating not found');

            return redirect(route('roomratings.index'));
        }

        return view('roomratings.show')->with('roomrating', $roomrating);
    }

    /**
     * Show the form for editing the specified roomrating.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $roomrating = $this->roomratingRepository->find($id);

        if (empty($roomrating)) {
            Flash::error('Roomrating not found');

            return redirect(route('roomratings.index'));
        }

        return view('roomratings.edit')->with('roomrating', $roomrating);
    }

    /**
     * Update the specified roomrating in storage.
     *
     * @param int $id
     * @param UpdateroomratingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateroomratingRequest $request)
    {
        $roomrating = $this->roomratingRepository->find($id);

        if (empty($roomrating)) {
            Flash::error('Roomrating not found');

            return redirect(route('roomratings.index'));
        }

        $roomrating = $this->roomratingRepository->update($request->all(), $id);

        Flash::success('Roomrating updated successfully.');

        return redirect(route('roomratings.index'));
    }

    /**
     * Remove the specified roomrating from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $roomrating = $this->roomratingRepository->find($id);

        if (empty($roomrating)) {
            Flash::error('Roomrating not found');

            return redirect(route('roomratings.index'));
        }

        $this->roomratingRepository->delete($id);

        Flash::success('Roomrating deleted successfully.');

        return redirect(route('roomratings.index'));
    }
}
