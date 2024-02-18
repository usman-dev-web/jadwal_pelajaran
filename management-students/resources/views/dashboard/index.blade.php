{{-- @dd($jadwalPelajaran) --}}
{{-- @dd($room) --}}
{{-- @dd($schedule) --}}

@extends('main.main')

@section('heading')
<h3>Hai... {{ auth()->user()->nama }} </h3>
@endsection

@section('content')
<h2>Jadwal Pelajaran</h2>
<h3>Kelas : {{ $room[0]->kelas }}</h3>
<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>Hari</th>
                <th>Mata Pelajaran 1</th>
                <th>Mata Pelajaran 2</th>
                {{-- <th class="text-center">ISTIRAHAT</th> --}}
                <th>Mata Pelajaran 3</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jadwalPelajaran as $jadwal)
            <tr>
                <th>{{ $jadwal->schedule[0]->hari }}</th>
                @foreach ($jadwal->schedule[0]->course as $item)
                <td>{{ $item->mata_pelajaran }} <a href="/dashboard/{{ $jadwal->id }}/edit"
                        class="badge bg-warning border-0"><span data-feather="edit-2"></span></a>
                    <form action="/dashboard/{{ $jadwal->id }}" method="post" class="d-inline">
                        @method("delete")
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('yakin mau dihapus?')"><span
                                data-feather="x-circle"></span></button>
                    </form>
                </td>
                @endforeach
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection