    @extends('layouts.app')
    @section('title', 'Edit Profile')
    @section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        {{-- Breadcrumb dinamis --}}
        <x-breadcrumb :items="[
'Edit Profile' => ''
]" />
        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic with Icons -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('profile.update', auth()->user()->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                          <div class="row mb-3">

                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama</label>

                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                        <i class="bx bx-package"></i>
                                    </span>
                                    <input type="text" name="name" class="w-75 pr-10 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('nama') is-invalid @enderror" id="basic-icon-default-fullname" placeholder="Silahkan isi nama"
                                        aria-label="Silahkan isi nama"
                                        aria-describedby="basic-icon-default-fullname2"
                                        value="{{ old('name', auth()->user()->name) }}" />
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">

                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Email</label>

                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                        <i class="bx bx-package"></i>
                                    </span>
                                    <input type="email" name="email" class="w-75 pr-10 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 @error('email') is-invalid @enderror" id="basic-icon-default-fullname" placeholder="Silahkan isi email"
                                        aria-label="Silahkan isi email"
                                        aria-describedby="basic-icon-default-fullname2"
                                        value="{{ old('email', auth()->user()->email) }}" />
                                    @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection