<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<title>Sassy Grid</title>

	<link rel="stylesheet" href="grid.css">

	<style>
		*{
			color: #333;
			text-align: center;
			font-family: courier;
		}
		.clear{
			clear: both;
		}

		.row {
			margin-bottom: 40px;
		}
		h4{
			margin: 0;
			padding: 10px 0;
		}

	</style>

</head>

<body>

GRID

	<div class="container">

		<h4>CONTAINER</h4>

		<div class="row">
			
			<h4>ROW</h4>

			<div class="col lg-3 md-4 sm-6 xs-12 nest">
				<div class="panel">
					lg-3 md-4 sm-6 xs-12
				</div>
				<div class="lg-1 md-2 sm-3 xs-6 col"><div class="panel">lg-1 md-2 sm-3 xs-4</div></div>
				<div class="half col"><div class="panel">half</div></div>
			</div>

			<div class="clear" style="clear:both;margin:0 0 20px 0;"></div>

		</div>
		
		<div class="row">

			<div>ROW</div>
			
			<div class="twelve columns nest">
				<div class="panel">twelve</div>
				<div class="six columns"><div class="panel">nested six</div></div>
				<div class="half columns"><div class="panel">nested half</div></div>
			</div>

			<div class="eleven columns nest">
				<div class="panel">eleven</div>
				<div class="six columns"><div class="panel">nested six</div></div>
				<div class="half columns"><div class="panel">nested half</div></div>
				<div class="half columns"><div class="panel">nested half</div></div>
			</div>
			<div class="one columns"><div class="panel">one</div></div>

			<div class="ten columns"><div class="panel">ten</div></div>
			<div class="two columns"><div class="panel">two</div></div>

			<div class="nine columns"><div class="panel">nine</div></div>
			<div class="three columns"><div class="panel">three</div></div>

			<div class="eight columns"><div class="panel">eight</div></div>
			<div class="four columns"><div class="panel">four</div></div>

			<div class="seven columns"><div class="panel">seven</div></div>
			<div class="five columns"><div class="panel">five</div></div>

			<div class="six columns"><div class="panel">six</div></div>
			<div class="six columns"><div class="panel">six</div></div>

			<div class="clear" style="clear:both;margin:0 0 20px 0;"></div>

		</div>

		<div class="row">

			<div>ROW</div>
			
			<div class="all columns nest">
				<div class="panel">twelve</div>
				<div class="half columns"><div class="panel">nested half</div></div>
			</div>

			<div class="half columns nest">
				<div class="panel">half</div>
				<div class="six columns"><div class="panel">nested six</div></div>
				<div class="half columns"><div class="panel">nested half</div></div>
			</div>
			<div class="quarter columns"><div class="panel">quarter</div></div>
			<div class="quarter columns"><div class="panel">quarter</div></div>

			<div class="two-thirds columns"><div class="panel">two-thirds</div></div>
			<div class="third columns"><div class="panel">third</div></div>

			<div class="half columns"><div class="panel">half</div></div>
			<div class="half columns"><div class="panel">half</div></div>

			<div class="clear" style="clear:both;margin:0 0 20px 0;"></div>

		</div>

		<div class="row">

			<div>ROW</div>

			<div class="eleven columns nest left-1">
				<div class="panel">eleven</div>
				<div class="six columns"><div class="panel">nested six</div></div>
				<div class="half columns"><div class="panel">nested half</div></div>
				<div class="half columns"><div class="panel">nested half</div></div>
			</div>

			<div class="three columns right-1"><div class="panel">three</div></div>
			<div class="three columns right-2"><div class="panel">three</div></div>
			<div class="three columns"><div class="panel">three</div></div>

			<div class="clear" style="clear:both;margin:0 0 20px 0;"></div>

		</div>

		<div class="row">

			<div>ROW</div>

			<div class="three columns left-1"><div class="panel">three</div></div>
			<div class="three columns left-2"><div class="panel">three</div></div>
			<div class="three columns"><div class="panel">three</div></div>

			<div class="clear" style="clear:both;margin:0 0 20px 0;"></div>

		</div>

		<div class="row">

			<div>ROW</div>

			<div class="quarter columns right-1"><div class="panel">quarter</div></div>
			<div class="quarter columns right-2"><div class="panel">quarter</div></div>
			<div class="quarter columns"><div class="panel">quarter</div></div>

			<div class="clear" style="clear:both;margin:0 0 20px 0;"></div>

		</div>

		<div class="row">

			<div>ROW</div>

			<div class="quarter columns left-1"><div class="panel">quarter</div></div>
			<div class="quarter columns left-2"><div class="panel">quarter</div></div>
			<div class="quarter columns"><div class="panel">quarter</div></div>

			<div class="clear" style="clear:both;margin:0 0 20px 0;"></div>

		</div>

	</div>

</body>
</html>