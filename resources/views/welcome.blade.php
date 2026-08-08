<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Homepage</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background:#f4f4f4;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
            margin:0;
        }

        .card{
            width:650px;
            background:white;
            padding:35px;
            border-radius:12px;
            box-shadow:0 10px 25px rgba(0,0,0,.15);
        }

        h1{
            color:#d63333;
            text-align:center;
            margin-bottom:25px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        td{
            padding:10px;
            border-bottom:1px solid #ddd;
        }

        td:first-child{
            font-weight:bold;
            width:220px;
        }

        footer{
            margin-top:30px;
            text-align:center;
            color:#666;
            font-size:14px;
        }
    </style>

</head>
<body>

<div class="card">

<h1>Welcome to My Laravel Project</h1>

<table>
<tr>
    <td>Student Name</td>
    <td>Maricko Sheiy L. Villacorta</td>
</tr>

<tr>
    <td>Student Number</td>
    <td>0124-1151</td>
</tr>

<tr>
    <td>Course</td>
    <td>BS Information Technology</td>
</tr>

<tr>
    <td>Section</td>
    <td>BSIT 3A</td>
</tr>

<tr>
    <td>Subject</td>
    <td>Client-Server Technologies</td>
</tr>

<tr>
    <td>Date</td>
    <td>{{ date('F d, Y') }}</td>
</tr>
</table>

<footer>
Created using <strong>Laravel 12</strong>
</footer>

</div>

</body>
</html>