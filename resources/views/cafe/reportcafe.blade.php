<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Cafe</title>

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
    <h1>Data Cafe</h1>
    <table align="center">
        <thead >
            <th>
            ID Cafe
            </th>
          <th>
           Nama Cafe
          </th>
          <th>
          Alamat Cafe
          </th>
          <th>
           No Tlp Cafe
          </th>
        </thead>
        <tbody>
            @foreach ($cafe as $data)
            <tr>
                <td scope="data">
                    {{ $data->id_cafe }}
                </td>
                <td>
                    {{ $data->nama_cafe }}
                </td>
                <td>
                  {{ $data->alamat_cafe }}
              </td>
              <td>
                {{ $data->nomor_telepon_cafe }}
            </td>
            </tr>
        @endforeach
        </tbody>
      </table>
</body>
</html>