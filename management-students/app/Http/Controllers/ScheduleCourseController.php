<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Room;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Models\ScheduleCourse;
use Illuminate\Support\Facades\Auth;

class ScheduleCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // mendapatkan user yang sedang login
        $user = Auth::user();

        if ($user) {
            // ambil jadwal pelajaran berdasarkan kelas murid yang sedang login
            return view("dashboard.index", [
                "title" => "Dashboard",
                "jadwalPelajaran" => $user->room->scheduleCourse,
                // "jadwalPelajaran" => ScheduleCourse::with("schedule")->get(),
                "schedules" => $user->room->scheduleCourse,
                "room" => Room::where("id", auth()->user()->room_id)->get(),
            ]);
        }
    }

    /** 
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.createSchedule", [
            "title" => "Buat Jadwal",
            "schedules" => Schedule::all(),
            "room" => Room::where("id", auth()->user()->room_id)->get(),
            "courses" => Course::all(),
            "rooms" => Room::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "schedule_id" => "required",
            "course_id" => "required",
            "room_id" => "required",
        ]);

        ScheduleCourse::create($validatedData);

        return redirect("/dashboard");
    }

    /**
     * Display the specified resource.
     */
    public function show(ScheduleCourse $scheduleCourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {

        return view("dashboard.editSchedule", [
            "title" => "Edit Jadwal",
            "room" => Room::where("id", auth()->user()->room_id)->get(),
            "jadwalPelajaran" => ScheduleCourse::where("id", $id)->get(),
            "pelajaran" => Schedule::with("room", "course")->get(),
            "schedules" => Schedule::all(),
            "courses" => Course::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $update = $request->validate([
            "course_id" => "required",
        ]);

        ScheduleCourse::where("id", $id)->update($update);

        return redirect("/dashboard");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        ScheduleCourse::destroy($id);

        return redirect("/dashboard");
    }
}
