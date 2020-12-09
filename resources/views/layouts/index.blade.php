@extends('layouts.app')
@section('content')
<div class="container">
    <div id="clock">
        <span id="date"></span>
        <span id="time"></span>
    </div>
    <div class="cta-container">
        <a href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal1" class="cta-btn">NEW APPLICANT</a>
        <div class="vertical-divider"></div>
        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2" class="cta-btn">APPLICATION CODE</a>
    </div>
</div>


    <!-- Modal 1-->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            

            <section class="card form-wizard" id="w1">
                <header class="card-header">
                    <h2 class="card-title">New Applicant</h2>
                </header>

                <div class="card-body card-body-nopadding">
                    <div class="wizard-tabs">
                        <ul class="nav wizard-steps">
                            <li class="nav-item active">
                                <a
                                    href="#w1-personal"
                                    data-toggle="tab"
                                    class="nav-link text-center"
                                >
                                    <span class="badge">1</span>
                                    Personal Information
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    href="#w1-family"
                                    data-toggle="tab"
                                    class="nav-link text-center"
                                >
                                    <span class="badge">2</span>
                                    Family Background
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    href="#w1-application"
                                    data-toggle="tab"
                                    class="nav-link text-center"
                                >
                                    <span class="badge">3</span>
                                    Application Information
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    href="#w1-contact"
                                    data-toggle="tab"
                                    class="nav-link text-center"
                                >
                                    <span class="badge">4</span>
                                    Contact Information
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a
                                    href="#w1-site"
                                    data-toggle="tab"
                                    class="nav-link text-center"
                                >
                                    <span class="badge">5</span>
                                    Site Location
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    href="#w1-date"
                                    data-toggle="tab"
                                    class="nav-link text-center"
                                >
                                    <span class="badge">6</span>
                                    Date and Time
                                </a>
                            </li> --}}
                        </ul>
                    </div>

                    <form action="{{ route('addNewApplicant') }}" method="POST" class="form-horizontal" novalidate="novalidate">
                        @csrf
                        <div class="tab-content">
                            <div id="w1-personal" class="tab-pane p-3 active" >
                                <div class="form-group row">
                                    <label
                                        class="col-sm-4 control-label text-sm-right pt-1"
                                        for="w1-username"
                                        >First Name</label
                                    >
                                    <div class="col-sm-8">
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="firstname"
                                            id="firstname"
                                            required
                                        />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-4 control-label text-sm-right pt-1"
                                        for="w1-password"
                                        >Middle Name</label
                                    >
                                    <div class="col-sm-8">
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="middlename"
                                            id="middlename"
                                            required
                                        />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-4 control-label text-sm-right pt-1"
                                        for="w1-password"
                                        >Last Name</label
                                    >
                                    <div class="col-sm-8">
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="lastname"
                                            id="lastname"
                                            required
                                        />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-4 control-label text-sm-right pt-1"
                                        for="w1-password"
                                        >Birth Date</label
                                    >
                                    <div class="col-sm-8">
                                        <input
                                            type="date"
                                            class="form-control"
                                            name="birth"
                                            id="birth"
                                            required
                                        />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-4 control-label text-sm-right pt-1"
                                        for="w1-password"
                                        >Birth Place</label
                                    >
                                    <div class="col-sm-8">
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="birthplace"
                                            id="birthplace"
                                            required
                                        />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-4 control-label text-sm-right pt-1"
                                        for="w1-password"
                                        >Gender</label
                                    >
                                    <div class="col-sm-8">
                                        <select name="gender" id="gender">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-4 control-label text-sm-right pt-1"
                                        for="w1-password"
                                        >Status</label
                                    >
                                    <div class="col-sm-8">
                                        <select name="status" id="status">
                                            <option value="single">Single</option>
                                            <option value="married">Married</option>
                                            <option value="widowed">Widowed</option>
                                            <option value="divorced">Divorced</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div id="w1-family" class="tab-pane p-3">
                                <h1>Father's Information</h1>
                                    <div class="form-group row">
                                        <label
                                            class="col-sm-4 control-label text-sm-right pt-1"
                                            for="w1-first-name"
                                            >First Name</label
                                        >
                                        <div class="col-sm-8">
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="f_name"
                                                id="f_name"
                                                required
                                            />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label
                                            class="col-sm-4 control-label text-sm-right pt-1"
                                            for="w1-last-name"
                                            >Middle Name</label
                                        >
                                        <div class="col-sm-8">
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="f_middle"
                                                id="f_middle"
                                                required
                                            />
                                        </div>
                                    </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-4 control-label text-sm-right pt-1"
                                        for="w1-last-name"
                                        >Last Name</label
                                    >
                                    <div class="col-sm-8">
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="f_last"
                                            id="f_last"
                                            required
                                        />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-4 control-label text-sm-right pt-1"
                                        for="w1-last-name"
                                        >Citizenship</label
                                    >
                                    <div class="col-sm-8">
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="f_citizenship"
                                            id="f_citizenship"
                                            required
                                        />
                                    </div>
                                </div>


                                <h1>Mother's Information</h1>
                                <div class="form-group row">
                                <label
                                    class="col-sm-4 control-label text-sm-right pt-1"
                                    for="w1-first-name"
                                    >First Name</label
                                >
                                <div class="col-sm-8">
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="m_name"
                                        id="m_name"
                                        required
                                    />
                                </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-4 control-label text-sm-right pt-1"
                                        for="w1-last-name"
                                        >Middle Name</label
                                    >
                                    <div class="col-sm-8">
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="m_middle"
                                            id="m_middle"
                                            required
                                        />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-4 control-label text-sm-right pt-1"
                                        for="w1-last-name"
                                        >Last Name</label
                                    >
                                    <div class="col-sm-8">
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="m_last"
                                            id="m_last"
                                            required
                                        />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-4 control-label text-sm-right pt-1"
                                        for="w1-last-name"
                                        >Citizenship</label
                                    >
                                    <div class="col-sm-8">
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="m_citizenship"
                                            id="m_citizenship"
                                            required
                                        />
                                    </div>
                                </div>

                            </div>
                            
                            <div id="w1-application" class="tab-pane p-3">
                                <div class="form-group row">
                                    <label
                                        class="col-sm-4 control-label text-sm-right pt-1"
                                        for="w1-first-name"
                                        >Emergency Contact Number</label
                                    >
                                    <div class="col-sm-8">
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="emergency_contact"
                                            id="emergency_contact"
                                            required
                                        />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-4 control-label text-sm-right pt-1"
                                        for="w1-email"
                                        >Application Type</label
                                    >
                                    <div class="col-sm-8">
                                        <select  class="form-control"
                                        name="application_type"
                                        id="application_type"
                                        required>
                                            <option value="new">New</option>
                                            <option value="renewal">Renewal</option>
                                        </select>
                                       
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-4 control-label text-sm-right pt-1"
                                        for="w1-email"
                                        >Basis of citizenship</label
                                    >
                                    <div class="col-sm-8">
                                        <select  class="form-control"
                                        name="citizenship"
                                        id="citizenship"
                                        required>
                                            <option value="birth">Birth</option>
                                            <option value="election">Election</option>
                                            <option value="marriage">Marriage</option>
                                            <option value="naturalization">Naturalization</option>
                                            <option value="ra9225">RA 9225</option>
                                            <option value="others">Others</option>
                                        </select>
                                       
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-10">
                                        
                                            <label
                                                for="w1-terms"
                                                >Foreign passport holder: </label
                                            >

                                            <label
                                                for="w1-terms"
                                                >Yes </label
                                            >

                                            <input
                                                type="radio"
                                                name="holder"
                                                id="w1-terms"
                                                value="yes"
                                                required
                                            />

                                            <label
                                            for="w1-terms"
                                            >No </label
                                        >

                                        <input
                                            type="radio"
                                            name="holder"
                                            id="w1-terms"
                                            value="no"
                                            required
                                        />
                                    </div>
                                </div>
                            </div>

                            
                            <div id="w1-contact" class="tab-pane p-3">
                                <div class="form-group row">
                                    <label
                                        class="col-sm-4 control-label text-sm-right pt-1"
                                        for="w1-first-name"
                                        >Complete Address</label
                                    >
                                    <div class="col-sm-8">
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="address"
                                            id="address"
                                            required
                                        />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-4 control-label text-sm-right pt-1"
                                        for="w1-first-name"
                                        >City</label
                                    >
                                    <div class="col-sm-8">
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="city"
                                            id="city"
                                            required
                                        />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-4 control-label text-sm-right pt-1"
                                        for="w1-first-name"
                                        >Province</label
                                    >
                                    <div class="col-sm-8">
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="province"
                                            id="province"
                                            required
                                        />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-4 control-label text-sm-right pt-1"
                                        for="w1-first-name"
                                        >Occupation</label
                                    >
                                    <div class="col-sm-8">
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="occupation"
                                            id="occupation"
                                            required
                                        />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-4 control-label text-sm-right pt-1"
                                        for="w1-first-name"
                                        >Office Number</label
                                    >
                                    <div class="col-sm-8">
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="office_number"
                                            id="office_number"
                                            required
                                        />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-4 control-label text-sm-right pt-1"
                                        for="w1-first-name"
                                        >Office Address</label
                                    >
                                    <div class="col-sm-8">
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="office_address"
                                            id="office_address"
                                            required
                                        />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-4 control-label text-sm-right pt-1"
                                        for="w1-first-name"
                                        >Email</label
                                    >
                                    <div class="col-sm-8">
                                        <input
                                            type="email"
                                            class="form-control"
                                            name="email"
                                            id="email"
                                            required
                                        />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-4 control-label text-sm-right pt-1"
                                        for="w1-first-name"
                                        >Phone</label
                                    >
                                    <div class="col-sm-8">
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="phone"
                                            id="phone"
                                            required
                                        />
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <ul class="pager">
                                <li class="previous disabled">
                                    <a
                                        ><i
                                            class="fas fa-angle-left"
                                        ></i>
                                        Previous</a
                                    >
                                </li>
                                <li class="finish hidden float-right">
                                    <button type="submit">Submit</button>
                                </li>
                                <li class="next">
                                    <a
                                        >Next
                                        <i
                                            class="fas fa-angle-right"
                                        ></i
                                    ></a>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </section>
        </div>
        </div>
    </div>

    <!-- Modal 2-->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            

            <section class="card" id="w1">
                <header class="card-header">
                    <h2 class="card-title">Search Applicant</h2>
                </header>

                <div class="card-body card-body-nopadding">
                    <form action="{{ route('showApplicantInfo') }}" method="GET" class="form-horizontal" novalidate="novalidate">
                        @csrf
                        <div class="form-group">
                            <label
                                class="col-sm-4 control-label text-sm-right pt-1"
                                for="w1-username"
                                >Applicant ID: </label
                            >
                            <div class="col-sm-8">
                                <input
                                    type="text"
                                    class="form-control"
                                    name="applicant_id"
                                    id="applicant_id"
                                    required
                                />
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
        </div>
    </div>
    <script type="text/python" id="script0" defer>
        from browser import document, console, window
        from javascript import Date

        def ticker():
            hours = Date.new().getHours() - 12;
            minutes = Date.new().getMinutes();
            seconds = Date.new().getSeconds();
            
            time = "%i:%i:%i" % (hours, minutes,seconds)
            document['time'].innerText = time

        
        window.setInterval(ticker, 1000)
        document['date'].innerText = Date.new().toDateString()
    </script>
@endsection