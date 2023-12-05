<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedules</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-color: royalblue;
            font-family: sans-serif;
        }
        .table-container{
            padding: 0 10%;
            margin: 40px auto 0;
        }
        .heading{
            font-size: 20px;
            text-align: center;
            color: black;
            margin-bottom: 40px; 
        }
        .table{
            width: 75;
            border: black;
        }
        .table thead{
            background-color: white;
            border-radius: 35px;
        }
        .table thead tr th{
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 0.35px;
            color: black;
            opacity: 1;
            padding: 12px;
            vertical-align: top;
            border: 1px solid #dee2e685;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;

        }
        .table tbody tr td{
            font-size: 14px;
            letter-spacing: 0.35px;
            font-weight: normal;
            color:black;
            background-color: white;
            padding: 8px;
            text-align: center;
            border: 1px solid #dee2e685;
        }
table tr:last-child td:first-child {
    border-bottom-left-radius: 20px;
}

table tr:last-child td:last-child {
    border-bottom-right-radius: 20px;
}

        }
        .table .text_open{
            font-size: 14px;
            font-weight: bold;
            letter-spacing: 0.35px;
        }
        .table tbody tr td .btn{
        text-transform: uppercase;
 text-decoration: none;
 color: rgb(27, 27, 27);
 padding: 10px 20px;
 border: 1px solid;
 border-radius: 1000px;
 display: inline-block;
 transition: all .2s;
 position: relative;
}
button {
 padding: 1.3em 3em;
 font-size: 12px;
 text-transform: uppercase;
 letter-spacing: 2.5px;
 font-weight: 500;
 color: #000;
 background-color: #fff;
 border: none;
 border-radius: 45px;
 box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
 transition: all 0.3s ease 0s;
 cursor: pointer;
 outline: none;
 position: fixed;
 bottom: 50px;
 left: 50%;
 margin-left: 200.5px;

}

button:hover {
 background-color: #2EE59D;
 box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
 color: #fff;
 transform: translateY(-7px);
}

button:active {
 transform: translateY(-1px);
}

    </style>
</head>
<body>
    <br>
    <br>
    <center>
    <div class="table container">
        <h1 class="heading">Schedules</h1>
        <table class="table">
            <thead>
                <tr>
                    
                    <th>First Dose</th>
                    <th>Second Dose</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="First Dose">January 20, 2022 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="text_open">[available]</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#" class="btn">Choose Schedule</td>
                    <td data-label="First Dose">January 20, 2022 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="text_open">[available]</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#" class="btn">Choose Schedule</td>
                </tr>
                 <tr>
                  <td data-label="First Dose">January 20, 2022 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="text_open">[available]</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#" class="btn">Choose Schedule</td>
                    <td data-label="First Dose">January 20, 2022 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="text_open">[available]</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#" class="btn">Choose Schedule</td>  
                    
                </tr>
                 <tr>
                   <td data-label="First Dose">January 20, 2022 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="text_open">[available]</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#" class="btn">Choose Schedule</td>
                    <td data-label="First Dose">January 20, 2022 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="text_open">[available]</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#" class="btn">Choose Schedule</td>
                </tr>
                 <tr>
                    <td data-label="First Dose">January 20, 2022 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="text_open">[available]</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#" class="btn">Choose Schedule</td>
                    <td data-label="First Dose">January 20, 2022 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="text_open">[available]</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#" class="btn">Choose Schedule</td>
                </tr>
                 <tr>
                    <td data-label="First Dose">January 20, 2022 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="text_open">[available]</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#" class="btn">Choose Schedule</td>
                    <td data-label="First Dose">January 20, 2022 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="text_open">[available]</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#" class="btn">Choose Schedule</td>
            
                </tr>
                
            </tbody>
</div>
</center>

                    <center>
                    <button>Confirm Schedule</button>
                    </center>
</body>
</html>