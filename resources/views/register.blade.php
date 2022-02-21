@extends('layouts.app')

@section('title')
    Register New Domain
@endsection

@section('content')
    <h1 class="text-center">.GH Domain Name Registration</h1>
    

    <div class="card card-default">
        <div class="card-header bg-secondary ">
            <h5 class="text-center text-white">Please Complete All Required Fields (*) And Submit Form
    </h3>
    </div>
    <div class="card-body">
        <div class="card-title">
            Domain Details            
        </div>
    </div>
    <div class="">
        <form action="#" method="post">
            
            <div class="form-floating m-3">
                <input type="text" class="form-control" name="domainname" id="domainname" placeholder="name@example.com">
                <label for="domainname">Domain Name<span class="text-danger">*</span></label>
            </div>
            <div class="row m-auto">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="domainname" id="domainname" placeholder="name@example.com">
                        <label for="ns1">Nameserver 1<span class="text-danger">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="server1" id="server1" placeholder="name@example.com">
                        <label for="server1">Server Netaddress 1</label>
                    </div>
                </div>
            </div>

            <div class="row m-auto">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="ns2" id="ns2" placeholder="name@example.com">
                        <label for="ns2">Nameserver 2<span class="text-danger">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="server2" id="server2" placeholder="name@example.com">
                        <label for="server2">Server Netaddress 2</label>
                    </div>
                </div>
            </div>

            <div class="row m-auto">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="ns3" id="ns3" placeholder="name@example.com">
                        <label for="ns3">Nameserver 3</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="server3" id="server3" placeholder="name@example.com">
                        <label for="server3">Server Netaddress 3</label>
                    </div>
                </div>
            </div>

            <div class="row m-auto">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="ns4" id="ns4" placeholder="name@example.com">
                        <label for="ns1">Nameserver 4</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="server4" id="server4" placeholder="name@example.com">
                        <label for="server4">Server Netaddress 4</label>
                    </div>
                </div>
            </div>

            <div class="row m-auto">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="ns5" id="ns5" placeholder="name@example.com">
                        <label for="ns5">Nameserver 5</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="server5" id="server5" placeholder="name@example.com">
                        <label for="server5">Server Netaddress 5</label>
                    </div>
                </div>
            </div>

            <div class="row m-auto">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="ns6" id="ns6" placeholder="name@example.com">
                        <label for="ns1">Nameserver 6</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="server6" id="server6" placeholder="name@example.com">
                        <label for="server6">Server Netaddress 6</label>
                    </div>
                </div>
            </div>

            <div class="row m-auto">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="ns7" id="ns7" placeholder="name@example.com">
                        <label for="ns7">Nameserver 7</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="server7" id="server7" placeholder="name@example.com">
                        <label for="server7">Server Netaddress 7</label>
                    </div>
                </div>
            </div>

            <div class="row m-auto">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="ns8" id="ns8" placeholder="name@example.com">
                        <label for="ns8">Nameserver 8</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="server8" id="server8" placeholder="name@example.com">
                        <label for="server8">Server Netaddress 8</label>
                    </div>
                </div>
            </div>

        </form>
    </div>
    </div>
@endsection