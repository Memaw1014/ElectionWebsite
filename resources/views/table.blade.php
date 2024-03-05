<!DOCTYPE html>
<html>
<head>
    <title>Members List</title>
</head>
<style>
        body {
            text-align: center;
        }

        form {
            margin-bottom: 20px;
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 80%; 
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
<body>
    <h1>Members List</h1>

    <form action="{{ route('members.search') }}" method="GET">
    <label for="name">Search by Contact#:</label>
        <input type="text" id="name" name="conTact" placeholder="Enter Contact#">

        <label for="barangay">Search by Barangay:</label>
        <input type="text" id="barangay" name="barangay" placeholder="Enter barangay">

        <button type="submit">Search</button>
    </form>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Barangay</th>
                <th>Sitio</th>
                <th>Precinct#</th>
                <th>Sitio Leader</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Middle Name</th>
                <th>Nickname</th>
                <th>Age</th>
                <th>FB account</th>
                <th>Occupation</th>
                <th>Contact</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach($members as $member)
                <tr>
                    <td>{{ $member->id }}</td>
                    <td>{{ $member->barangay }}</td>
                    <td>{{ $member->sitio }}</td>
                    <td>{{ $member->{'precint#'} }}</td>
                    <td>{{ $member->sitio_leader }}</td>
                    <td>{{ $member->firstname }}</td>
                    <td>{{ $member->lastname }}</td>
                    <td>{{ $member->middlename }}</td>
                    <td>{{ $member->nickname}}</td>
                    <td>{{ $member->age }}</td>
                    <td>{{ $member->fb_account }}</td>
                    <td>{{ $member->occupation }}</td>
                    <td>{{ $member->contact }}</td>
                    <td>{{ $member->address }}</td>
                    <td>
                        <form action="{{ route('members.delete', ['id' => $member->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
