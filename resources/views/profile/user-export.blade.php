<h1>User List</h1>
<table border='solid 1px'>
  <thead>
    <tr>
      <th>ID</th>
      <th>Full Name</th>
      <th>Email</th>
      <th>Phone Number</th>
      <th>Date of Birth</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->phone_no }}</td>
        <td>{{ $user->dob }}</td>
      </tr>
    @endforeach
  </tbody>
</table>