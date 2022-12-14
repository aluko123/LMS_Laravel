<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateViewRequest;
use App\Http\Requests\UpdateViewRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ViewRepository;
use Illuminate\Http\Request;
use Flash;

class ViewController extends AppBaseController
{
    /** @var ViewRepository $viewRepository*/
    private $viewRepository;

    public function __construct(ViewRepository $viewRepo)
    {
        $this->viewRepository = $viewRepo;
    }

    /**
     * Display a listing of the View.
     */
    public function index(Request $request)
    {
        $views = $this->viewRepository->paginate(10);

        return view('views.index')
            ->with('views', $views);
    }

    /**
     * Show the form for creating a new View.
     */
    public function create()
    {
        return view('views.create');
    }

    /**
     * Store a newly created View in storage.
     */
    public function store(CreateViewRequest $request)
    {
        $input = $request->all();

        $view = $this->viewRepository->create($input);

        Flash::success('View saved successfully.');

        return redirect(route('views.index'));
    }

    /**
     * Display the specified View.
     */
    public function show($id)
    {
        $view = $this->viewRepository->find($id);

        if (empty($view)) {
            Flash::error('View not found');

            return redirect(route('views.index'));
        }

        return view('views.show')->with('view', $view);
    }

    /**
     * Show the form for editing the specified View.
     */
    public function edit($id)
    {
        $view = $this->viewRepository->find($id);

        if (empty($view)) {
            Flash::error('View not found');

            return redirect(route('views.index'));
        }

        return view('views.edit')->with('view', $view);
    }

    /**
     * Update the specified View in storage.
     */
    public function update($id, UpdateViewRequest $request)
    {
        $view = $this->viewRepository->find($id);

        if (empty($view)) {
            Flash::error('View not found');

            return redirect(route('views.index'));
        }

        $view = $this->viewRepository->update($request->all(), $id);

        Flash::success('View updated successfully.');

        return redirect(route('views.index'));
    }

    /**
     * Remove the specified View from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $view = $this->viewRepository->find($id);

        if (empty($view)) {
            Flash::error('View not found');

            return redirect(route('views.index'));
        }

        $this->viewRepository->delete($id);

        Flash::success('View deleted successfully.');

        return redirect(route('views.index'));
    }
}
