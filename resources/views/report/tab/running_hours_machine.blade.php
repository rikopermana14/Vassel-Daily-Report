<div class="card-body">
    <div class="table-responsive">
    <table id="exampler" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Date</th>
                <th>Machine</th>
                <th>Run Hours Towing</th> 
                <th>Run Hours Manouver</th>
                <th>Run Hours Slow</th>
                <th>Run Hours Economi</th>
                <th>Run Hours Full Speed</th>
                <th>Run Hours Stand By</th>
                <th>vessel</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Date</th>
                <th>Machine</th>
                <th>Run Hours Towing</th> 
                <th>Run Hours Manouver</th>
                <th>Run Hours Slow</th>
                <th>Run Hours Economi</th>
                <th>Run Hours Full Speed</th>
                <th>Run Hours Stand By</th>
                <th>vessel</th>
            </tr>
        </tfoot>
        <tbody> 
            @foreach ($running_hours as $booking)
            <tr>      
                <td>{{ $booking->date }}</td>
        <td>{{ $booking->machine }}</td>
        <td>{{ $booking->towing }}</td>
        <td>{{ $booking->manouver }}</td>
        <td>{{ $booking->slow }}</td>
        <td>{{ $booking->economi }}</td>
        <td>{{ $booking->full_speed }}</td>
        <td>{{ $booking->standby }}</td>
        <td>{{ $booking->userr }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div></div>
<!-- /.card-body -->
