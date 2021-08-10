<div>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Company</th>
            <th>Email</th>
        </thead>
        
        <tbody>
            @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->first_name }}</td>
                <td>{{ $customer->last_name }}</td>
                <td>{{ $customer->address }}</td>
                <td>{{ $customer->phone_number }}</td>
                <td>{{ $customer->company }}</td>
                <td>{{ $customer->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <input type="text" class="form-control" placeholder="Search" wire:model.debounce.500ms="searchStr">
</div>
