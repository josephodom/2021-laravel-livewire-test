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
                <td>{!! $columnHighlight($customer->first_name) !!}</td>
                <td>{!! $columnHighlight($customer->last_name) !!}</td>
                <td>{!! $columnHighlight($customer->address) !!}</td>
                <td>{!! $columnHighlight($customer->phone_number) !!}</td>
                <td>{!! $columnHighlight($customer->company) !!}</td>
                <td>{!! $columnHighlight($customer->email) !!}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <input type="text" class="form-control" placeholder="Search" wire:model.debounce.200ms="searchStr">
</div>
