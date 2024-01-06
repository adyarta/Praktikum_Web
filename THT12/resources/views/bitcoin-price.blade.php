<!DOCTYPE html>
<html>
<head>
    <title>Bitcoin Price Index</title>
</head>
<body>
    <h1>Bitcoin Price Index</h1>
    <div>
        <p>USD: {{ $bpi['USD']['rate'] }}</p>
        <p>GBP: {{ $bpi['GBP']['rate'] }}</p>
        <p>EUR: {{ $bpi['EUR']['rate'] }}</p>
    </div>
</body>
</html>
