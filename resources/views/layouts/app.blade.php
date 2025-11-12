<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>ToDo-App</title>
</head>
<body>

    @yield('content')

    <script>
        const alertElement = document.querySelector('.alert');

            if (alertElement) {
                setTimeout(() => {
                    alertElement.style.opacity = '0';
                    setTimeout(() => {
                    alertElement.style.display = 'none';
                    }, 500);
                }, 2000);
            }
    </script>
</body>
</html>