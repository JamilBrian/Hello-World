<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Report</title>
    <style>
        body{
            background-color: #F6F6F6; 
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 100%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
           background-color: #DF2969;
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="brand-section">
            <div class="row">
                <div class="">
                    <h1 class="text-white">SALES REPORT</h1>
                </div>
                <div class="col-6">
                    <div class="company-details">
                    <!-- 
                        <p class="text-white">assdad asd  asda asdad a sd</p>
                        <p class="text-white">assdad asd asd</p>
                        <p class="text-white">+91 888555XXXX</p>
                    -->
                    </div>
                </div>
            </div>
        </div>

        <div class="body-section">
            <div class="">
                <div class="">
                    <h2 class="heading">KM 38, Center Point Trading</h2>
                    <p class="sub-heading">Street Address: Km 38 Pulong Buhangin
                            Sta Maria, Bulacan</p>
                    <p class="sub-heading">Municipality, Zip Code: Sta Maria, 3022</p>
                </div>
                <div class="">
                    <p class="sub-heading">Contact #: 09175166748</p>
                    
                <!--    <p class="sub-heading">
                        Year: <span id="curYear"></span></p> 
                    </p>    -->
                    
                </div>
            </div>
        </div>

        <div class="body-section">
            <h3 class="heading">Annual Sales</h3>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>

                        <th class="text-uppercase text-uppercase">YEAR</th>
                        <th class="text-uppercase text-uppercase">MONTH</th>
                        <th class="text-uppercase text-uppercase">REVENUE</th>
                        <th class="text-uppercase text-uppercase">ITEM NAME</th>
                        <th class="text-uppercase text-uppercase">TOTAL SALES</th>

                      </tr>
                </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <!--@foreach($orders as $order)-->
                                    
                                <tr>
                                    <?php $monthNum = $user->month;
                                    $dateObj = DateTime::createFromFormat('!m', $monthNum);
                                    $monthName = $dateObj->format('F');?>

                                    <td>{{ $user->year}}</td>
                                    <td>{{ $monthName }}</td>
                                    <td>{{ $user->total_amount }}</td>
                                    
                                <!--    <td class=" text-md product_align">
                                        <p class="text-xs font-weight-bold mb-0">{{$order->inventory->name}}</p></td>
                                        <td class=" text-md product_align">
                                        <p class="text-xs font-weight-bold mb-0">{{$order->total}}</p></td>
                                -->
                                </tr>
                                
                            @endforeach
                        @endforeach

                        <td colspan="3" class="">Total Annual:</td>
                        <td>P {{number_format($sum, 2, '.', ' ')}}</td>
                    <!--<tr>
                        <td colspan="4" class="text-right">Sub Total</td>
                        <td> 10.XX</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-right">Tax Total %1X</td>
                        <td> 2</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-right">Grand Total</td>
                        <td> 12.XX</td>
                    </tr>
                    -->
                    </tbody>
            </table>
            <br>
        </div>
            <div class="body-section">
                <h6 class="">BUSINESS OWNER: Edith Castañeda</h6>
            </div>   
    </div>
    <script>
        var date = new Date();
        var year = date.getFullYear();
        document.getElementById("curYear").innerHTML = year;
    </script>             

</body>
</html>