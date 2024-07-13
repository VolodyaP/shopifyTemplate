<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    <meta name="shopify-api-key" content="{{ env('SHOPIFY_API_KEY') }}" />

    <script src="https://cdn.shopify.com/shopifycloud/app-bridge.js"></script>

    @vitereactrefresh
    @vite('resources/js/index.jsx')
</head>
<body>
</body>
</html>
