<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Penilaian cafe</title>

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
    <h1>Data Penilaian cafe</h1>
    <table align="center">
        <thead >
            <th>
                ID Penilaian Cafe
                </th>
              <th>
               ID Cafe
              </th>
              <th>
               Id KriteriaCafe
              </th>
              <th>
                 Id Pembeli
               </th>
               <th>
                Nilai
              </th>
        </thead>
        <tbody>
            @foreach ($penilaiancafe as $data)
                <tr>
                    <td scope="data">
                        {{ $data->id_penilaiancafe }}
                    </td>
                    <td>
                        {{ $data->id_cafe }}
                    </td>
                    <td>
                      {{ $data->id_KriteriaCafe}}
                  </td>
                  <td>
                    {{ $data->id_cafe }}
                </td>
                <td>
                  {{ $data->nilai_penilaian }}
              </td>
            @endforeach
        </tbody>
      </table>
</body>
</html>