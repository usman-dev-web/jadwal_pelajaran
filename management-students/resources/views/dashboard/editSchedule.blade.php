{{-- @dd($courses) --}}
{{-- @dd($schedule_courses) --}}
{{-- @dd($jadwalPelajaran) --}}
{{-- @dd($schedules) --}}
@extends('main.main')

@section('heading')
<h3>Edit Jadwal Pelajaran Kelas : {{ $room[0]->kelas }}</h3>
@endsection

@section('content')
<div class="col-lg-5">
  <form action="/dashboard/{{ $jadwalPelajaran[0]->id }}" method="post">
    @method("put")
    @csrf
    <div class="mb-3">
      <label for="kelas" class="form-label">Kelas</label>
      <select class="form-select" name="schedule_id">
        @foreach ($schedules as $item)
        <option value="{{ $item->id }}">Hari {{ $item->hari }}</option>
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="mata_pelajaran" class="form-label">Mata Pelajaran</label>
      <select class="form-select" name="course_id">
        @foreach ($courses as $item){
        <option value="{{ $item->id }}">{{ $item->mata_pelajaran }}</option>
        }
        @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection