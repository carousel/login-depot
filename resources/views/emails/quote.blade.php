<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Quote</title>
        <link rel = "stylesheet" href= "">
    </head>
    <body>
        <ul>
            <p class"lead">YOUR QUOTE</p>
            <li><span>Name:</span>{!!$data["name"]!!}</li>
            <li><span>Phone</span>:{!!$data["phone"]!!}</li>
            <li><span>Secondary Phone:</span>{!!$data["secondary_phone"]!!}</li>
            <li><span>Email:</span>{!!$data["email"]!!}</li>
            <li><span>Secondary Email:</span>{!!$data["secondary_email"]!!}</li>
            <li><span>Pickup Date:</span>{!!$data["pickup_date"]!!}</li>
        </ul>
        To accept and complete your order, please follow this link:

        <a href="/logindepot/companies/{!!$data['company_name']!!}/order-form/{!!$data['quote_id']!!}">Order now</a>
        <script src="//code.jquery.com/jquery.js"></script>
    </body>
</html>
