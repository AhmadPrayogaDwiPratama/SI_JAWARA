<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pesanan Cafe</title>

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
    <h1>Data Pesanan Cafe</h1>
    <table align="center">
        <thead >
            <th>
                ID Pemesanan Cafe
                </th>
              <th>
               ID Cafe
              </th>
              <th>
               Id Minuman
              </th>
              <th>
                 Id Pembeli
               </th>
               <th>
                Jumlah Minuman
              </th>
        </thead>
        <tbody>
            @foreach ($pesanancafe as $data)
            <tr>
                <td scope="data">
                    {{ $data->id_pesanancafe }}
                </td>
                <td>
                    {{ $data->id_cafe }}
                </td>
                <td>
                  {{ $data->id_minuman }}
              </td>
              <td>
                {{ $data->id_pembeli }}
            </td>
            <td>
              {{ $data->jumlah_minuman }}
          </td>
            </tr>
        @endforeach
        </tbody>
      </table>
</body>
</html>