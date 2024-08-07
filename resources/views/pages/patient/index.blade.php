@extends('layout.app')
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="judul-title d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Data Patients</h4>
                            <a href="/patient/create">
                                <button type="button">+ Add Patient</button>
                            </a>
                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Measurement</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($patients as $patient)
                                    @php
                                        $i++;
                                    @endphp
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $patient->name }}</td>
                                        <td>{{ $patient->age }}</td>
                                        <td>{{ $patient->gender }}</td>
                                        <td>{{ $patient->measurement }}</td>
                                        <td>
                                            <a href="/patient/{{ $patient->id }}"><button>Detail</button></a>
                                            <a href="/patient/edit/{{ $patient->id }}"><button>Edit</button></a>
                                            <form action="/patient/{{ $patient->id }}" class="d-inline-block"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit">Hapus</button>
                                            </form>
                                        </td>
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
