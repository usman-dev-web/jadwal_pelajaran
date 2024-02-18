{{-- @dd($jadwal) --}}

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    @foreach ($jadwal as $item)
    @foreach ($item->course as $course)        
    <ul>
        <li>{{ $item->room->kelas }}</li>
        <li>{{ $item->course }}</li>
        <li> {{ $course->mata_pelajaran}} </li>
    </ul>
    @endforeach
    @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>

{{-- @dd($students, $courses, $schedules) --}}
{{-- @foreach ($students as $student)
<ul>
    <li>
        nama : {{ $student->nama }}
    </li>
    <li>
        kelas : {{ $student->room->kelas }}
    </li>
</ul>
@endforeach

@foreach ($courses as $course)
<ul>
    <li>
        Mata Pelajaran : {{ $course->mata_pelajaran }}
    </li>
</ul>
@endforeach

@foreach ($schedules as $schedule)
<ul>
    <li>
        Jadwal Kelas : {{ $schedule->room->kelas }}
    </li>
    <li>
        Hari : {{ $schedule->hari }}
    </li>
    <li>
        Mata Pelajaran : {{ $schedule->course->mata_pelajaran }}
    </li>
</ul>
@endforeach --}}