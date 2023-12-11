<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Customer Mail</title>
		<style type="text/css">
			table{
				font-weight: bold;
				line-height: 25px;
				font-size: 16px;
			}
		</style>
	</head>
	<body>
		<table width="100%">
			<tr>
				<td>Congratulation! created a new order. <br>Order Tacking ID is : <code>{{$customerData->trackingid}}</code> <br><br> You can check Admin panel or click Order Check button.<br> <br>
				Thanks By.
				<br>
					Development Team
				</td>
			</tr>
			<tr>
				<td align="center">
					<h2></h2>
					<a href="{{url('/track-order?search=true&trackingid='.$customerData->trackingid)}}" style="width: 200px;border-radius: 4px;padding: 12px;text-align: center;font-weight: 600;background: #ff5353;color: #fff;text-decoration: none;margin-top: 20px;">Order Check</a>
				</td>
			</tr>

		</table>
	</body>
</html>