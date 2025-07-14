<!DOCTYPE html>
<html>
<head>
    <title>CRM System</title>
</head>
<body>
    <div>
        @if(session('success'))
            <p style="color:green">{{ session('success') }}</p>
        @endif
        @yield('content')
    </div>
</body>
</html>
