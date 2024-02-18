{{-- @dd($schedules) --}}
@extends('main.main')

@section('heading')
    <h3>Buat Jadwal Pelajaran Kelas : {{ $room[0]->kelas }}</h3>
@endsection

@section('content')
<div class="col-lg-5">
    <form action="/dashboard" method="post">
        @csrf
        <div class="mb-3">
          <label for="kelas" class="form-label">Kelas</label>
          <select class="form-select" name="schedule_id">
            @foreach ($schedules as $item)                
             <option value="{{ $item->id }}"> Hari {{ $item->hari }}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="mata_pelajaran" class="form-label">Mata Pelajaran</label>
          <select class="form-select" name="course_id">
            @foreach ($courses as $item)                
             <option value="{{ $item->id }}">{{ $item->mata_pelajaran }}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="room_id" class="form-label">Kelas</label>
          <select class="form-select" name="room_id">
            @foreach ($rooms as $room)                
             <option value="{{ $room->id }}">{{ $room->kelas }}</option>
            @endforeach
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection