<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pesanan Restoran</title>

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
    <h1>Data Pesanan Restoran</h1>
    <table align="center">
        <thead >
            <th>
                ID Pemesanan Restoran
                </th>
              <th>
               ID Restoran
              </th>
              <th>
               Id Makanan
              </th>
              <th>
                 Id Pembeli
               </th>
               <th>
                Jumlah Makanan
              </th>
        </thead>
        <tbody>
            @foreach ($pesananrestoran as $data)
                      <tr>
                          <td scope="data">
                              {{ $data->id_pesananrestoran }}
                          </td>
                          <td>
                              {{ $data->id_restoran }}
                          </td>
                          <td>
                            {{ $data->id_makanan }}
                        </td>
                        <td>
                          {{ $data->id_pembeli }}
                      </td>
                      <td>
                        {{ $data->jumlah_makanan }}
                    </td>
                      </tr>
                  @endforeach
        </tbody>
      </table>
</body>
</html>