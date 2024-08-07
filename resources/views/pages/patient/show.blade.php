@extends('layout.app')
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Detail Patient</h4>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $patient->name }}</td>
                                </tr>
                                <tr>
                                    <th>Age</th>
                                    <td>{{ $patient->age }}</td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <td>{{ $patient->gender }}</td>
                                </tr>
                                <tr>
                                    <th>Height</th>
                                    <td>{{ $patient->height }}</td>
                                </tr>
                                <tr>
                                    <th>Weight</th>
                                    <td>{{ $patient->weight }}</td>
                                </tr>
                                <tr>
                                    <th>Medical Check Up</th>
                                    <td>{{ $patient->MCU }}</td>
                                </tr>
                                <tr>
                                    <th>Measurement</th>
                                    <td>{{ $patient->measurement }}</td>
                                </tr>
                                <tr>
                                    <th>Timer</th>
                                    <td>{{ $patient->timer }}</td>
                                </tr>
                                <tr>
                                    <th>Speed</th>
                                    <td>{{ $patient->speed }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Emg Measurement</h4>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Emg 1</th>
                                    <th>Emg 2</th>
                                    <th>Emg 3</th>
                                    <th>Emg 4</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($emgs as $emg)
                                    @php
                                        $i++;
                                    @endphp
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $emg->emg1 }}</td>
                                        <td>{{ $emg->emg2 }}</td>
                                        <td>{{ $emg->emg3 }}</td>
                                        <td>{{ $emg->emg4 }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Angle Measurement</h4>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>leftHip</th>
                                    <th>rightHip</th>
                                    <th>leftKnee</th>
                                    <th>rightKnee</th>
                                    <th>leftAnkle</th>
                                    <th>rightAnkle</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($angles as $angle)
                                    @php
                                        $i++;
                                    @endphp
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $angle->leftHip }}</td>
                                        <td>{{ $angle->rightHip }}</td>
                                        <td>{{ $angle->leftKnee }}</td>
                                        <td>{{ $angle->rightKnee }}</td>
                                        <td>{{ $angle->leftAnkle }}</td>
                                        <td>{{ $angle->rightAnkle }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
