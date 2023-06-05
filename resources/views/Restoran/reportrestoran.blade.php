<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Restoran</title>

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
    <h1>Data Restoran</h1>
    <table align="center">
        <thead >
            <th>
            ID Restoran
            </th>
          <th>
           Nama Restoran
          </th>
          <th>
          Alamat
          </th>
          <th>
           No Tlp
          </th>
          <th>
            Deskripsi
        </th>
        </thead>
        <tbody>
          @foreach ($restoran as $data)
          <tr>
              <td scope="data">
                  {{ $data->id_restoran }}
              </td>
              <td>
                  {{ $data->nama_restoran }}
              </td>
              <td>
                {{ $data->alamat_restoran }}
            </td>
            <td>
              {{ $data->nomor_telepon }}
          </td>
          <td>
            {{ $data->deskripsi_restoran }}
        </td>
          </tr>
      @endforeach
        </tbody>
      </table>
</body>
</html>