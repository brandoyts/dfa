@extends('layouts.app')
@section('content')
    <div class="container pt-5" >
        <a href="/" class="btn btn-primary">Back</a>
        @if (!$applicantInfo)
        <div class="card">
            <div class="card-body">
                <h1>Applicant not found!</h1>
                
            </div>
        </div>
        @else
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Applicant Information</h1>
                </div>
                <div class="card-body">
                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th scope="col">Applicant ID</th>
                            <th scope="col">Basis</th>
                            <th scope="col">Emergency Contact</th>
                            <th scope="col">Foreign Passport Holder</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ $applicantInfo[0]->PERSONAL_ID }}</td>
                            <td>{{ $applicantInfo[0]->BASIS }}</td>
                            <td>{{ $applicantInfo[0]->EMERGENCY_CONTACT }}</td>
                            <td>{{ $applicantInfo[0]->FOREIGN_PASSPORT }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Personal Information</h1>
                </div>
                <div class="card-body">
                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Middle Name</th>
                            <th scope="col">Birth Date</th>
                            <th scope="col">Birth Place</th>
                            <th scope="col">Status</th>
                            <th scope="col">Gender</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ $applicantInfo[0]->NAME }}</td>
                            <td>{{ $applicantInfo[0]->SURNAME }}</td>
                            <td>{{ $applicantInfo[0]->MIDDLE }}</td>
                            <td>{{ $applicantInfo[0]->BIRTH }}</td>
                            <td>{{ $applicantInfo[0]->BIRTHPLACE }}</td>
                            <td>{{ $applicantInfo[0]->STATUS }}</td>
                            <td>{{ $applicantInfo[0]->GENDER }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Personal Contact</h1>
                </div>
                <div class="card-body">
                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th scope="col">Address</th>
                            <th scope="col">City</th>
                            <th scope="col">Province</th>
                            <th scope="col">Occupation</th>
                            <th scope="col">Office No.</th>
                            <th scope="col">Office Address</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ $applicantInfo[0]->ADDRESS }}</td>
                            <td>{{ $applicantInfo[0]->CITY }}</td>
                            <td>{{ $applicantInfo[0]->PROVINCE }}</td>
                            <td>{{ $applicantInfo[0]->OCCUPATION }}</td>
                            <td>{{ $applicantInfo[0]->OFFICE_NO }}</td>
                            <td>{{ $applicantInfo[0]->OFFICE_ADDRESS }}</td>
                            <td>{{ $applicantInfo[0]->EMAIL }}</td>
                            <td>{{ $applicantInfo[0]->PHONE }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Family Background</h1>
                </div>
                <div class="card-body">
                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th scope="col">Father's First Name</th>
                            <th scope="col">Father's Middle Name</th>
                            <th scope="col">Father's Last Name</th>
                            <th scope="col">Father's Citizenship</th>
                            <th scope="col">Mother's First Name</th>
                            <th scope="col">Mother's Middle Name</th>
                            <th scope="col">Mother's Last Name</th>
                            <th scope="col">Mother's Citizenship</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ $applicantInfo[0]->M_NAME }}</td>
                            <td>{{ $applicantInfo[0]->M_MIDDLE }}</td>
                            <td>{{ $applicantInfo[0]->M_SURNAME }}</td>
                            <td>{{ $applicantInfo[0]->M_CITIZENSHIP }}</td>
                            <td>{{ $applicantInfo[0]->F_NAME }}</td>
                            <td>{{ $applicantInfo[0]->F_MIDDLE }}</td>
                            <td>{{ $applicantInfo[0]->F_SURNAME }}</td>
                            <td>{{ $applicantInfo[0]->F_CITIZENSHIP }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
@endsection