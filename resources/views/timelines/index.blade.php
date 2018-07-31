<html>

<section class="resume-section spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-7 offset-xl-2">
                <div class="section-title">
                    <h2>Work Experience</h2>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Date of Birth</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($general_infos as $general_info)
                        <tr>
                            <td>{{ $general_info->date_of_birth  }}</td>
                            <td>{{ $general_info->address }}</td>
                            <td>{{ $general_info->email }}</td>
                            <td>{{ $general_info->phone }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('general_info.edit', $general_info->id) }}"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

</html>
