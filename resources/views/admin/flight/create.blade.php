@extends('layouts.admin')
@section('title', 'Add Flight')
@section('content')
  <!-- Add Flight Start -->
<div class="container pt-4 px-4">
    <div class="bg-secondary rounded p-4 text-white">
        <h5 class="mb-4">Add Flight</h5>
        <form action="{{ url('admin/store-flight') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="d-flex justify-content-center mb-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="flight_type" id="onewayOption" value="one_way" checked>
                    <label class="form-check-label" for="onewayOption">
                        One-Way
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="flight_type" id="roundtripOption" value="round_trip">
                    <label class="form-check-label" for="roundtripOption">
                        Round-Trip
                    </label>
                </div>
            </div>

            <div class="form-floating mb-3">
                <select class="form-select" name="origin_id" required>
                        <option value="" disabled selected>Choose Origin</option>
                    @foreach ($airports as $airport)
                        <option value="{{ $airport->id }}">{{ $airport->location }}</option>
                    @endforeach
                </select>
                <label>Origin</label>
            </div>

            <div class="form-floating mb-3">
                <select class="form-select" name="destination_id" required>
                        <option value="" disabled selected>Choose Destination</option>
                    @foreach ($airports as $airport)
                        <option value="{{ $airport->id }}">{{ $airport->location }}</option>
                    @endforeach
                </select>
                <label>Destination</label>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <div class="form-floating">
                        <input type="date" class="form-control" name="departure_date" placeholder=" " required>
                        <label for="departure_date">Departure Date</label>   
                    </div>
                </div>

                <div class="col">
                    <div class="form-floating">
                        <input type="date" class="form-control" name="arrival_date" placeholder=" " required>
                        <label for="arrival_date">Arrival Date</label>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <div class="form-floating">
                        <input type="time" class="form-control" name="departure_time" placeholder=" " required>
                        <label for="departure_time">Departure Time</label>
                    </div>
                </div>

                <div class="col">
                    <div class="form-floating">
                        <input type="time" class="form-control" name="arrival_time" placeholder=" " required>
                        <label for="arrival_time">Arrival Time</label>
                    </div>
                </div>
            </div>

            <div class="form-floating mb-3">
                <input type="number" class="form-control" name="price" placeholder=" " required>
                <label for="price">Price</label>
            </div>

            <div class="form-floating mb-3">
                <select class="form-select" name="airline_id" required>
                        <option value="" disabled selected>Choose Airline</option>
                    @foreach ($airlines as $airline)
                        <option value="{{ $airline->id }}">{{ $airline->airline }}</option>
                    @endforeach
                </select>
            <label>Airline</label>
            </div>

            <div class="mt-4 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
<!-- Add Flight End -->
@endsection
