@extends('layouts.main')

@section('isinya')

@include('partials.g_slide')
<div class="col-md-6 mt-4">

    <h3 class="text-left">
        h3. Lorem ipsum dolor sit amet.
    </h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Product
                </th>
                <th>
                    Payment Taken
                </th>
                <th>
                    Status
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    1
                </td>
                <td>
                    TB - Monthly
                </td>
                <td>
                    01/04/2012
                </td>
                <td>
                    Default
                </td>
            </tr>
            <tr class="table-active">
                <td>
                    1
                </td>
                <td>
                    TB - Monthly
                </td>
                <td>
                    01/04/2012
                </td>
                <td>
                    Approved
                </td>
            </tr>
            <tr class="table-success">
                <td>
                    2
                </td>
                <td>
                    TB - Monthly
                </td>
                <td>
                    02/04/2012
                </td>
                <td>
                    Declined
                </td>
            </tr>
            <tr class="table-warning">
                <td>
                    3
                </td>
                <td>
                    TB - Monthly
                </td>
                <td>
                    03/04/2012
                </td>
                <td>
                    Pending
                </td>
            </tr>
            <tr class="table-danger">
                <td>
                    4
                </td>
                <td>
                    TB - Monthly
                </td>
                <td>
                    04/04/2012
                </td>
                <td>
                    Call in to confirm
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="col-md-6  mt-4">
    <h3 class="text-left">
        h3. Lorem ipsum dolor sit amet.
    </h3>
    <table class="table">
        <thead>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Product
                </th>
                <th>
                    Payment Taken
                </th>
                <th>
                    Status
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    1
                </td>
                <td>
                    TB - Monthly
                </td>
                <td>
                    01/04/2012
                </td>
                <td>
                    Default
                </td>
            </tr>
            <tr class="table-active">
                <td>
                    1
                </td>
                <td>
                    TB - Monthly
                </td>
                <td>
                    01/04/2012
                </td>
                <td>
                    Approved
                </td>
            </tr>
            <tr class="table-success">
                <td>
                    2
                </td>
                <td>
                    TB - Monthly
                </td>
                <td>
                    02/04/2012
                </td>
                <td>
                    Declined
                </td>
            </tr>
            <tr class="table-warning">
                <td>
                    3
                </td>
                <td>
                    TB - Monthly
                </td>
                <td>
                    03/04/2012
                </td>
                <td>
                    Pending
                </td>
            </tr>
            <tr class="table-danger">
                <td>
                    4
                </td>
                <td>
                    TB - Monthly
                </td>
                <td>
                    04/04/2012
                </td>
                <td>
                    Call in to confirm
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection