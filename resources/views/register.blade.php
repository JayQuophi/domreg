@extends('layouts.app')

@section('title')
    Register New Domain
@endsection

@section('content')
    <div class="main">


        <h1 class="text-center">.GH Domain Name Registration</h1>


        <div class="card card-default">
            <div class="card-header bg-secondary ">
                <h5 class="text-center text-white">Please Complete All Required Fields (*) And Submit Form
                    </h3>
            </div>
            <div class="card-body">
                <div class="card-title h3">
                    Domain Details
                    <hr>
                </div>
            </div>
            <div class="">
                <form action="{{ route('store') }}" method="POST">
                    @csrf




                    {{-- <div class="form-outline m-4">
                        
                        
                        <select class="select form-control">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                            <option value="5">Five</option>
                            <option value="6">Six</option>
                            <option value="7">Seven</option>
                            <option value="8">Eight</option>
                        </select>
                    </div> --}}

                    <div class="px-4 mb-4">
                        <div class="form-outline">

                            <input type="text" id="domainname" class="form-control form-control-lg" name="domainname"
                                value="{{ old('domainname') }}"  />
                            <label class="form-label" for="domainname">Domain Name <span class="text-danger">*</span>
                            </label>
    
                        </div>
                        @error('domainname')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                   



                    <h4 class="mx-4">Nameservers</h4>

                    <div class="row px-4">
                        <div class="col-md-6">
                            <div class="form-outline my-2 ">
                                <input type="text" id="ns1" name="ns1" class="form-control form-control-lg"
                                    value="{{ old('ns1') }}" />
                                <label class="form-label" for="ns1">Nameserver 1 <span class="text-danger">*</span>
                                </label>
                            </div>
                            @error('ns1')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-outline my-2 ">
                                <input type="text" id="srv1" name="srv1" class="form-control form-control-lg" />
                                <label class="form-label" for="domainname">Server Netaddress 1
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row px-4">
                        <div class="col-md-6">
                            <div class="form-outline  my-2">
                                <input type="text" id="ns2" name="ns2" class="form-control form-control-lg" />
                                <label class="form-label" for="ns1" required autofocus>Nameserver 2 <span
                                        class="text-danger">*</span>
                                </label>
                            </div>
                            @error('ns2')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-outline  my-2">
                                <input type="text" id="srv2" name="srv2" class="form-control form-control-lg" />
                                <label class="form-label" for="domainname">Server Netaddress 2
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row px-4">
                        <div class="col-md-6">
                            <div class="form-outline  my-2">
                                <input type="text" id="ns3" name="ns3" class="form-control form-control-lg" />
                                <label class="form-label" for="ns1" required autofocus>Nameserver 3
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-outline  my-2">
                                <input type="text" id="srv3" name="srv3" class="form-control form-control-lg" />
                                <label class="form-label" for="srv3">Server Netaddress 3
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row px-4">
                        <div class="col-md-6">
                            <div class="form-outline  my-2">
                                <input type="text" id="ns4" name="ns4" class="form-control form-control-lg" />
                                <label class="form-label" for="ns1" required autofocus>Nameserver 4
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-outline  my-2">
                                <input type="text" id="srv4" name="srv4" class="form-control form-control-lg" />
                                <label class="form-label" for="srv4">Server Netaddress 4
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row px-4">
                        <div class="col-md-6">
                            <div class="form-outline  my-2">
                                <input type="text" id="ns5" name="ns5" class="form-control form-control-lg" />
                                <label class="form-label" for="ns5" required autofocus>Nameserver 5
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-outline  my-2">
                                <input type="text" id="srv5" name="srv5" class="form-control form-control-lg" />
                                <label class="form-label" for="srv5">Server Netaddress 5
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row px-4">
                        <div class="col-md-6">
                            <div class="form-outline  my-2">
                                <input type="text" id="ns6" name="ns6" class="form-control form-control-lg" />
                                <label class="form-label" for="ns6" required autofocus>Nameserver 6
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-outline  my-2">
                                <input type="text" id="srv6" name="srv6" class="form-control form-control-lg" />
                                <label class="form-label" for="srv6">Server Netaddress 6
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row px-4">
                        <div class="col-md-6">
                            <div class="form-outline  my-2">
                                <input type="text" id="ns7" name="ns7" class="form-control form-control-lg" />
                                <label class="form-label" for="ns7" required autofocus>Nameserver 7
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-outline  my-2">
                                <input type="text" id="srv7" name="srv7" class="form-control form-control-lg" />
                                <label class="form-label" for="srv7">Server Netaddress 7
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row px-4">
                        <div class="col-md-6">
                            <div class="form-outline  my-2">
                                <input type="text" id="ns8" name="ns8" class="form-control form-control-lg" />
                                <label class="form-label" for="ns1" required autofocus>Nameserver 8
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-outline  my-2">
                                <input type="text" id="srv8" name="srv8" class="form-control form-control-lg" />
                                <label class="form-label" for="srv8">Server Netaddress 8
                                </label>
                            </div>
                        </div>
                    </div>
                    {{-- End of Domain Details --}}

                    {{-- Registrant Information Begins Here --}}
                    <h4 class="mx-4">Registrant Information</h4>
                    <hr>

                    <div class="row px-4">
                        <div class="col-md-6">
                            <div class="form-outline  my-2">
                                <input type="text" id="regname" name="regname" class="form-control form-control-lg" />
                                <label class="form-label" for="regname" required autofocus>Registrant Name
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-outline  my-2">
                                <input type="text" id="regemail" name="regemail" class="form-control form-control-lg" />
                                <label class="form-label" for="regemail">Registrant Email
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row px-4">
                        <div class="col-md-6">
                            <div class="form-outline  my-2">
                                <input type="text" id="regorg" name="regorg" class="form-control form-control-lg" />
                                <label class="form-label" for="regorg" required autofocus>Registrant Organization
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-outline  my-2">
                                <input type="text" id="regcountry" name="regcountry" class="form-control form-control-lg" />
                                <label class="form-label" for="regcountry">Registrant Country
                                </label>
                            </div>
                        </div>
                    </div>



                    <div class="row m-auto">
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
