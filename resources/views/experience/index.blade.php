<html>
<body>
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Duration</th>
                        <th>Company Name</th>
                        <th>Postion</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($experiences as $experience)
                    <tr>
                        <td>{{ $experience->duration  }}</td>
                        <td>{{ $experience->company_name }}</td>
                        <td>{{ $experience->position }}</td>
                        <td>{{ $experience->message }}</td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
</body>
</html>
