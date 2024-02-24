<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
    <style>
      table, th, td {
        border: 2px solid;
        text-align: center;
        font-size: 25px;
      }
      .center {
          margin-left: auto; 
          margin-right: auto;
          height: 0%;
          width: 50%;
      }
      h3{
          margin-left: 175px;
      }

      .invoice-box {
      max-width: 800px;
      margin: auto;
      padding: 30px;
      border: 1px solid #eee;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
      font-size: 16px;
      line-height: 24px;
      font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
      color: #555;
    }

    .invoice-box table {
      width: 100%;
      line-height: inherit;
      text-align: left;
    }

    .invoice-box table td {
      padding: 5px;
      vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
      text-align: right;
    }

    .invoice-box table tr.top table td {
      padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
      font-size: 45px;
      line-height: 45px;
      color: #333;
    }

    .invoice-box table tr.information table td {
      padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
      background: #eee;
      border-bottom: 1px solid #ddd;
      font-weight: bold;
    }

    .invoice-box table tr.details td {
      padding-bottom: 20px;
    }

    .invoice-box table tr.item td {
      border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
      border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
      border-top: 2px solid #eee;
      font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
      .invoice-box table tr.top table td {
        width: 100%;
        display: block;
        text-align: center;
      }

      .invoice-box table tr.information table td {
        width: 100%;
        display: block;
        text-align: center;
      }
    }

    /** RTL **/
    .invoice-box.rtl {
      direction: rtl;
      font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .invoice-box.rtl table {
      text-align: right;
    }

    .invoice-box.rtl table tr td:nth-child(2) {
      text-align: left;
    }  
      </style>
</head>
<body>
  <header>
    <div class="invoice-box">
          <table cellpadding="0" cellspacing="0">
            <tr class="top">
              <td colspan="2">
                <table>
                  <tr>
                    <td class="title">
                      <img src="" style="width: 100%; max-width: 300px" />
                    </td>
    
                    <td>
                      Invoice no:  A0000001<br />
                      Created-Date : 04/01/2023<br />
                      
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
    
            <tr class="information">
              <td colspan="2">
                <table>
                  <tr>
                    <td>
                      <h2>Gloria Food</h2><br />
                      Aesha Bhavsar<br />
              
                    </td>
    
                    
                  </tr>
                </table>
              </td>
            </tr>
    
            <tr class="heading">
              <td>Payment Method</td>
    
              <td>Cash </td>
            </tr>
    
            <tr class="details">
              <td>Check</td>
    
              <td>-</td>
            </tr>
    
            <tr class="heading">
              <td>Payable</td>
    
              <td>Price</td>
            </tr>
    
            <tr class="item">
              <td>Amount</td>
    
              <td>Rs. {{$total}}</td>
            </tr>
    
            <tr class="item">
              <td>Delivery Charges</td>
    
              <td>Rs. 10</td>
            </tr>
    
            <tr class="item last">
              <td>Taxes</td>
    
              <td>Rs. 20</td>
            </tr>
    
            <tr class="total">
              <td>Total Amount</td>
    
              <td>Rs. {{$total+30}}</td>
            </tr>
          </table>
        </div>
      
    </body>

</body>
</html>
