<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCourseUserRequest;
use App\Http\Requests\UpdateCourseUserRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\CourseUserRepository;
use Illuminate\Http\Request;
use Flash;

class CourseUserController extends AppBaseController
{
    /** @var CourseUserRepository $courseUserRepository*/
    private $courseUserRepository;

    public function __construct(CourseUserRepository $courseUserRepo)
    {
        $this->courseUserRepository = $courseUserRepo;
    }

    /**
     * Display a listing of the CourseUser.
     */
    public function index(Request $request)
    {
        $courseUsers = $this->courseUserRepository->paginate(10);

        return view('course_users.index')
            ->with('courseUsers', $courseUsers);
    }

    /**
     * Show the form for creating a new CourseUser.
     */
    public function create()
    {
        return view('course_users.create');
    }

    /**
     * Store a newly created CourseUser in storage.
     */
    public function store(CreateCourseUserRequest $request)
    {
        $input = $request->all();

        $courseUser = $this->courseUserRepository->create($input);

        Flash::success('Course User saved successfully.');

        return redirect(route('courseUsers.index'));
    }

    /**
     * Display the specified CourseUser.
     */
    public function show($id)
    {
        $courseUser = $this->courseUserRepository->find($id);

        if (empty($courseUser)) {
            Flash::error('Course User not found');

            return redirect(route('courseUsers.index'));
        }

        return view('course_users.show')->with('courseUser', $courseUser);
    }

    /**
     * Show the form for editing the specified CourseUser.
     */
    public function edit($id)
    {
        $courseUser = $this->courseUserRepository->find($id);

        if (empty($courseUser)) {
            Flash::error('Course User not found');

            return redirect(route('courseUsers.index'));
        }

        return view('course_users.edit')->with('courseUser', $courseUser);
    }

    /**
     * Update the specified CourseUser in storage.
     */
    public function update($id, UpdateCourseUserRequest $request)
    {
        $courseUser = $this->courseUserRepository->find($id);

        if (empty($courseUser)) {
            Flash::error('Course User not found');

            return redirect(route('courseUsers.index'));
        }

        $courseUser = $this->courseUserRepository->update($request->all(), $id);

        Flash::success('Course User updated successfully.');

        return redirect(route('courseUsers.index'));
    }

    /**
     * Remove the specified CourseUser from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $courseUser = $this->courseUserRepository->find($id);

        if (empty($courseUser)) {
            Flash::error('Course User not found');

            return redirect(route('courseUsers.index'));
        }

        $this->courseUserRepository->delete($id);

        Flash::success('Course User deleted successfully.');

        return redirect(route('courseUsers.index'));
    }
}
