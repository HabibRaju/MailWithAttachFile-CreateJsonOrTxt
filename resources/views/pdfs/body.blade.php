{{-- Pdf Body --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <h1 style="text-align:center">Invoice</h1>
    <h1 style="text-align: center"><img src="https://logovtor.com/wp-content/uploads/2020/08/banglalink-logo-vector.png" alt="[Banglalink Logo]" width="400" height="200"></h1>
    {{-- https://logovtor.com/wp-content/uploads/2020/08/banglalink-logo-vector.png --}}
    {{-- {{asset('storage/bl.png')}} --}}
    <h3 style="text-align:center">Invoice ID : {{$attach_details['invoice_id']}}</h3>
    <div style="margin-left: 100px; margin-right:100px">
        <p style="font-size: 14px">
            <span>Banglalink</span><br>
            <span>Address:{{$attach_details['address']}}</span><br>
            <span>Date:{{$attach_details['date']}}</span><br>
        </p>
        <p style="font-size: 14px">
            <span>Customer Info:{{$attach_details['customer_info']}}</span><br>
            <span>Phone Number:{{$attach_details['phone_number']}}</span><br>
            <span>Email Address:{{$attach_details['email_address']}}</span><br>
        </p>
        <p style="font-size: 14px">
            <span>Invoice ID:{{$attach_details['invoice_id']}}</span><br>
            <span>Order ID:{{$attach_details['order_id']}}</span><br>
        </p>
       
        {{-- <div style=" display: inline-block; justify-content:space-between" >
            <h5 >SItems Ordered:</h5> 
            <h5 >Price</h5> 
        </div> --}}
        <h5 align="left">SItems Ordered:</h5> 
        <h5 align="right">Price</h5> 

        <h5 align="left">Mobile Recharge : </h5>
        <h5 align="right">{{$attach_details['mobile_recharge']}}</h5>
        <hr/>
        <h5 style="text-align:right">Sub Total : {{$attach_details['sub_total']}}</h5> 
        <h5 style="text-align:right">Discount : {{$attach_details['discount']}}</h5> 
        <h5 style="text-align:right">Total : {{$attach_details['total']}}</h5> 

        <p style="font-size: 12px">
            <b style="font-size: 14px">Payment Details:</b> <br>
            Transaction Type: Online Purchase <br>
            Card Type: bKash/Card <br>
            Bank TXN ID <br>
            Card Issuer Bank: <br>
            Issuer Bank Address: Bangladesh <br>
        </p>
    </div>
</body>
</html>