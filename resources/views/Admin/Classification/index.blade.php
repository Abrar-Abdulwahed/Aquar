@extends('Admin.layouts.master')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Data Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#add_class">
                    <i class="bi bi-plus-square-dotted"></i>
                </button>
                <div class="modal fade" id="add_class" tabindex="-1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Classification</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('classification.store') }}" method="POST">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Classification Name" aria-label="name"
                                            aria-describedby="basic-addon1">
                                        <input type="text" class="form-control" name="description"
                                            placeholder="Classification Desc">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-primary" value="save">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <select class="form-select" aria-label="Default select example">
                        <option selected="">Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col" class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($data) && $data->count() > 0)
                                        @forelse ($data as $item)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->description }}</td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <button type="button" class="btn btn-warning me-2">
                                                            <i class="bi bi-eye-fill"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-info me-2"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#edit_class-{{ $item->id }}">
                                                            <i class="bi bi-pen-fill"></i>
                                                        </button>
                                                        <div class="modal fade" id="edit_class-{{ $item->id }}"
                                                            tabindex="-1" style="display: none;" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">update Classification</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form
                                                                            action="{{ route('classification.update', $item->id) }}">
                                                                            @method('PATCH')
                                                                            @csrf
                                                                            <div class="input-group mb-3">
                                                                                <span class="input-group-text"
                                                                                    id="basic-addon1">@</span>
                                                                                <input type="text" class="form-control"
                                                                                    name="name"
                                                                                    value="{{ $item->name }}"
                                                                                    placeholder="Classification Name"
                                                                                    aria-label="name"
                                                                                    aria-describedby="basic-addon1">
                                                                                <input type="text" class="form-control"
                                                                                    name="description"
                                                                                    value="{{ $item->description }}"
                                                                                    placeholder="Classification Desc">
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="submit"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                                <input type="submit"
                                                                                    class="btn btn-primary"
                                                                                    value="save">
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn btn-danger me-2">
                                                            <i class="bi bi-archive-fill"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                        @endforelse
                                    @endif
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
