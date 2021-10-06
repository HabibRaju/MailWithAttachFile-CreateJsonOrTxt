{{-- Mail Body --}}

<!DOCTYPE html>
<html>
<head>
    <style>
        #mailBody {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        #mailBody td, #mailBody th {
            border: 1px solid #ddd;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h3>Dear , {{$details['name']}}</h3><br>
    <p>Your request for recharge/payment has been processed successfully. The details of your transaction request are as follows</p><br>
    <h4>ORDER DETAILS</h4><br>
    <table id="mailBody">
        <tr>
            <th>Product Type</th>
            <th>['topup']</th>
        </tr>
        <tr>
            <td>Customer MSISSDN</td>
            <td>{{$details['customer_msissdn']}}</td>
        </tr>
        <tr>
            <td>Paid Amount	</td>
            <td>{{$details['paid_amount']}}</td>
        </tr>
        <tr>
            <td>Discount Amount	</td>
            <td>{{$details['discount_amount']}}</td>
        </tr>
        <tr>
            <td>Recharge Amount	</td>
            <td>{{$details['recharge_amount']}}</td>
        </tr>
        <tr>
            <td>Transaction ID</td>
            <td>{{$details['transaction_id']}}</td>
        </tr>
        <tr>
            <td>Card Type</td>
            <td>{{$details['card_type']}}</td>
        </tr>
        <tr>
            <td>Card No</td>
            <td>{{$details['Card_no']}}</td>
        </tr>
    </table>
    <h3>Thank you, <br>MyBL Inventory Team</h3>
    <h4 style="text-decoration: underline">Terms & Conditions:</h4>
    <ul>
        <li>This invoice shall be treated as the Delivery Challan of the service described above.</li>
        <li>Please contact us if you have any kind of queries, complaints or claims regarding this service. You may contact us via direct mail or phone at:
            <p>E-mail: XXXXXXXXXXXXXXX</p>
            <p>Tel: XXXXXXXXXXX</p>
        </li>
        <li>We/MyBL inventory shall not accept any type of claims or complaints regarding the service, if the customer fails to contact us within 5 (Five) working days from the invoice date. In that case, it will be assumed that the customer has successfully received and enjoyed the service as per his/her satisfaction.</li>
    </ul>
</body>
</html>
