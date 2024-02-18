<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Room;
use App\Models\User;
use App\Models\Course;
use App\Models\Schedule;
use App\Models\ScheduleCourse;
use App\Models\Schedule_Course;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // create data Student
        User::create([
            "nis" => 7202023,
            "nama" => "M. Usman Maulana",
            "room_id" => 1,
            "alamat" => "Pandeglang",
            "gender" => "laki_laki",
            "password" => "usman123"
        ]);
        User::create([
            "nis" => 8012023,
            "nama" => "Adit",
            "room_id" => 2,
            "alamat" => "Pandeglang",
            "gender" => "laki_laki",
            "password" => "adit123"
        ]);
        User::create([
            "nis" => 8042023,
            "nama" => "Dinda",
            "room_id" => 2,
            "alamat" => "Pandeglang",
            "gender" => "perempuan",
            "password" => "dinda123"
        ]);
        User::create([
            "nis" =>9282023,
            "nama" => "Risa",
            "room_id" => 3,
            "alamat" => "Pandeglang",
            "gender" => "perempuan",
            "password" => "risa123"
        ]);
        User::create([
            "nis" =>9202023,
            "nama" => "Nanda",
            "room_id" => 3,
            "alamat" => "Pandeglang",
            "gender" => "perempuan",
            "password" => "nanda123"
        ]);
        User::create([
            "nis" =>9052023,
            "nama" => "Eka",
            "room_id" => 1,
            "alamat" => "Pandeglang",
            "gender" => "perempuan",
            "password" => "eka123"
        ]);

        // create data rooms
        Room::create([
            "kelas" => 7
        ]);
        Room::create([
            "kelas" => 8
        ]);
        Room::create([
            "kelas" => 9
        ]);

        // create data schedule
        // kelas 7
        Schedule::create([
            "hari" => "Senin",
            // "room_id" => 1,
        ]);
        Schedule::create([
            "hari" => "Selasa",
            // "room_id" => 1,
        ]);
        Schedule::create([
            "hari" => "Rabu",
            // "room_id" => 1,
        ]);
        Schedule::create([
            "hari" => "Kamis",
            // "room_id" => 1,
        ]);
        Schedule::create([
            "hari" => "Jumat",
            // "room_id" => 1,
        ]);

        // // kelas 8
        // Schedule::create([
        //     "hari" => "Senin",
        //     "room_id" => 2,
        // ]);
        // Schedule::create([
        //     "hari" => "Selasa",
        //     "room_id" => 2,
        // ]);
        // Schedule::create([
        //     "hari" => "Rabu",
        //     "room_id" => 2,
        // ]);
        // Schedule::create([
        //     "hari" => "Kamis",
        //     "room_id" => 2
        // ]);
        // Schedule::create([
        //     "hari" => "Jumat",
        //     "room_id" => 2,
        // ]);

        // // kelas 9
        // Schedule::create([
        //     "hari" => "Senin",
        //     "room_id" => 3,
        // ]);
        // Schedule::create([
        //     "hari" => "Selasa",
        //     "room_id" => 3,
        // ]);
        // Schedule::create([
        //     "hari" => "Rabu",
        //     "room_id" => 3,
        // ]);
        // Schedule::create([
        //     "hari" => "Kamis",
        //     "room_id" => 3,
        // ]);
        // Schedule::create([
        //     "hari" => "Jumat",
        //     "room_id" => 3,
        // ]);

        // create data courses
        Course::create([
            "mata_pelajaran" => "Bahasa Indonesia",
        ]);
        Course::create([
            "mata_pelajaran" => "Bahasa Inggris"
        ]);
        Course::create([
            "mata_pelajaran" => "Pendidikan Kewarganegaran"
        ]);
        Course::create([
            "mata_pelajaran" => "Pendidikan Agama Islam"
        ]);
        Course::create([
            "mata_pelajaran" => "IPA"
        ]);
        Course::create([
            "mata_pelajaran" => "IPS"
        ]);
        Course::create([
            "mata_pelajaran" => "Matematika"
        ]);
        Course::create([
            "mata_pelajaran" => "Tata Boga"
        ]);
        Course::create([
            "mata_pelajaran" => "TIK"
        ]);
        Course::create([
            "mata_pelajaran" => "Penjas"
        ]);

        ScheduleCourse::create([
            "schedule_id" => 1,
            "course_id" => 1,
            "room_id" => 1,
        ]);
        ScheduleCourse::create([
            "schedule_id" => 1,
            "course_id" => 2,
            "room_id" => 1,
        ]);
        ScheduleCourse::create([
            "schedule_id" => 1,
            "course_id" => 3,
            "room_id" => 2,
        ]);
        ScheduleCourse::create([
            "schedule_id" => 2,
            "course_id" => 4,
            "room_id" => 3,
        ]);
    }
}
