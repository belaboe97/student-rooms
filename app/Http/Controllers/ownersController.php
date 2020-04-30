<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateownersRequest;
use App\Http\Requests\UpdateownersRequest;
use App\Repositories\ownersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ownersController extends AppBaseController
{
    /** @var  ownersRepository */
    private $ownersRepository;

    public function __construct(ownersRepository $ownersRepo)
    {
        $this->ownersRepository = $ownersRepo;
    }

    /**
     * Display a listing of the owners.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $owners = $this->ownersRepository->all();

        return view('owners.index')
            ->with('owners', $owners);
    }

    /**
     * Show the form for creating a new owners.
     *
     * @return Response
     */
    public function create()

    {   
        $user = auth()->user();

        return view('owners.create')
            ->with('user', $user);
    }

    /**
     * Store a newly created owners in storage.
     *
     * @param CreateownersRequest $request
     *
     * @return Response
     */
    public function store(CreateownersRequest $request)
    {
        $input = $request->all();

        $owners = $this->ownersRepository->create($input);

        Flash::success('Owners saved successfully.');

        return redirect(route('owners.index'));
    }

    /**
     * Display the specified owners.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $owners = $this->ownersRepository->find($id);

        if (empty($owners)) {
            Flash::error('Owners not found');

            return redirect(route('owners.index'));
        }

        return view('owners.show')->with('owners', $owners);
    }

    /**
     * Show the form for editing the specified owners.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $owners = $this->ownersRepository->find($id);

        if (empty($owners)) {
            Flash::error('Owners not found');

            return redirect(route('owners.index'));
        }

        return view('owners.edit')->with('owners', $owners);
    }

    /**
     * Update the specified owners in storage.
     *
     * @param int $id
     * @param UpdateownersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateownersRequest $request)
    {
        $owners = $this->ownersRepository->find($id);

        if (empty($owners)) {
            Flash::error('Owners not found');

            return redirect(route('owners.index'));
        }

        $owners = $this->ownersRepository->update($request->all(), $id);

        Flash::success('Owners updated successfully.');

        return redirect(route('owners.index'));
    }

    /**
     * Remove the specified owners from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $owners = $this->ownersRepository->find($id);

        if (empty($owners)) {
            Flash::error('Owners not found');

            return redirect(route('owners.index'));
        }

        $this->ownersRepository->delete($id);

        Flash::success('Owners deleted successfully.');

        return redirect(route('owners.index'));
    }
}
