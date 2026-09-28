<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>قائمة السيارات</title>
    <style>
        table { width: 50%; border-collapse: collapse; margin: 20px auto; text-align: center; }
        th, td { border: 1px solid #000; padding: 10px; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2 style="text-align: center;">تفاصيل السيارات</h2>
    
    <table>
        <thead>
            <tr>
                <th>Key</th>
                <th>Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cars as $key => $car)
                <tr>
                    <td>{{ $key }}</td>
                    <td>{{ $car['name'] }}</td>
                    <td>{{ $car['price'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>