
    <div class="container">
        <h2>Inquiries List</h2>
        
        @if (Session::has('success_message'))
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                <strong>Success:</strong> {{ Session::get('success_message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inquiries as $inquiry)
                    <tr>
                        <td>{{ $inquiry->name }}</td>
                        <td>{{ $inquiry->email }}</td>
                        <td>{{ $inquiry->phone }}</td>
                        <td>{{ $inquiry->message }}</td>
                        <td>
                            @if ($inquiry->status == 'pending')
                                <span class="badge bg-warning">Pending</span>
                            @elseif ($inquiry->status == 'resolved')
                                <span class="badge bg-success">Resolved</span>
                            @else
                                <span class="badge bg-danger">Closed</span>
                            @endif
                        </td>
                        <td>
                            <a href="" class="btn btn-warning btn-sm">Edit</a>

                            <form action="" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this inquiry?')">Delete</button>
                            </form>

                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
