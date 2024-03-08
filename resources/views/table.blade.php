<!DOCTYPE html>
<html>
<head>
    <title>Members List</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.2/xlsx.full.min.js"></script>
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
        <input type="text" id="name" name="contact" placeholder="Enter Contact#">

        <label for="barangay">Search by Barangay:</label>
        <input type="text" id="barangay" name="barangay" placeholder="Enter barangay">

        <label for="organization">Select Organization:</label>
            <select id="organization" name="organization">
                <option value="">Organization</option>
                <option value="erpat">ERPAT</option>
                <option value="kalipi">KALIPI</option>
                <option value="pwd">PWD</option>
                <option value="senior">SENIOR CITIZEN</option>
            </select>

        <button type="submit">Search</button>
        <button type="button" onclick="exportToExcel()">Export to Excel</button>
    </form>

    @if($members->isEmpty())
        <p>No matching records found.</p>
    @else
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
                    <th>Voted in 2023</th>
                    <th>Organization</th>
                    <th>Beneficiaries</th>
                    <th>Action</th>
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
                        <td>{{ $member->voted_on_2023 }}</td>
                        <td>{{ $member->organization }}</td>
                        <td>{{ $member->beneficiary }}</td>
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
    @endif

    <script>
        function exportToExcel() {
            var table = document.querySelector('table');
            var ws = XLSX.utils.table_to_sheet(table);
            var wb = XLSX.utils.book_new();
            XLSX.utils.book_append_sheet(wb, ws, 'Members List');
            var today = new Date();
            var fileName = 'Members_List_' + today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate() + '.xlsx';
            XLSX.writeFile(wb, fileName);
        }
    </script>
</body>
</html>
