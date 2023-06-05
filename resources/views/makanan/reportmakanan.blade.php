<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Makanan</title>

    <style>
        body {
            box-sizing: border-box;
            font-size: 16px;
        }
        h1 {
            text-align: center;
        }
        table {
            box-sizing: border-box;
            border: 2px solid black;
            border-collapse: collapse;
            width: 100%;
        }
        thead {
            background-color: #9ea10d;
            color: white;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            text-align: left;
            padding: 10px;
        }
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Data Makanan</h1>
    <table align="center">
        <thead >
            <th>
            ID Makanan
            </th>
          <th>
           Nama Makanan
          </th>
          <th>
            Deskripsi Makanan
          </th>
          <th>
           Harga Makanan
          </th>
        </thead>
        <tbody>
            @foreach ($makanan as $data)
                        <tr>
                            <td scope="data">
                                {{ $data->id_makanan }}
                            </td>
                            <td>
                                {{ $data->nama_makanan }}
                            </td>
                            <td>
                              {{ $data->deskripsi_makanan }}
                          </td>
                            <td>
                              {{ $data->harga_makanan }}
                          </td>
                        </tr>
                    @endforeach
        </tbody>
      </table>
</body>
</html>