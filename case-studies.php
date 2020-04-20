<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<meta name="robots" content="noindex,nofollow">
	<title>Shinji Pons</title>
	<link rel="preload" href="data/fonts/webfont.woff2" as="font" crossorigin="anonymous">
	<style>
		@font-face {
			font-family: "NBAkademieLight";
			src: url("data/fonts/webfont.woff2") format("woff2"), url("data/fonts/webfont.woff") format("woff");
		}
		html, body {
			margin: 0;
			overflow: hidden;
		}
		.grid-container {
			display: grid;
			grid-column-gap: 0px;
			grid-template-columns: auto auto;
			background-color: #F2F2F2;
			padding: 0px;
		}
		.grid-item {
			background: red;
			height: 50vh;
			width: 50vw;
			text-align: center;

			/*to center the text horizontally and vertically*/
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.grid-item a {
			color: white;
			background: black;
			font-family: "NBAkademieLight";
			font-size: 30px;
			text-align: center;
			padding: 10px;
			font-weight: normal;
			text-decoration: none;
			max-width: 80%;
			line-height: 120%;
			
			opacity: 0;
			transition-duration: 0.12s;
			transition-timing-function: ease-out;
			transform: translateY(6px);
		}
		.grid-item:hover a {
			opacity: 1;
			transform: translateY(0px);
		}
		.ldd {
			background: url(data/img/case-studies/ldd.png) center center no-repeat;
			background-size: cover;
		}
		.subd {
			background: url(data/img/case-studies/subd.jpg) center center no-repeat;
			background-size: cover;
		}
		.dynamo {
			background: url(data/img/case-studies/dynamo.png) center center no-repeat;
			background-size: cover;
		}
		.website {
			background: url(data/img/case-studies/website.png) center center no-repeat;
			background-size: contain;
		}
		@media only screen and (max-width: 540px) {
			html {
				overflow-y: scroll;
			}
			.grid-container {
				grid-template-columns: 1fr;
			}
			.grid-item {
				width: 100vw;
			}
			.grid-item a {
				opacity: 1;
				transform: translateY(0px);
			}
		}
	</style>
</head>
<body>

	<div class="grid-container">

		<div class="grid-item ldd">
			<a href="https://shwca.se/774d107f8a4d833fa3de34c9dc78672996a4e1a9991b8cf92187e3b77806f59f" target="_blank">
			LEGO Digital Designer Pro Case Study</a>
		</div>

		<div class="grid-item subd">
			<a href="https://shwca.se/af85e35b09ed75b14961c88ee3bb900f64204e985725c71232a6019481a5aac2" target="_blank">
			Autodesk Alias Sub-D Case Study</a>
		</div>

		<div class="grid-item dynamo">
			<a href="https://shwca.se/3c1843d8b9c81ae5a00861b1792c4e61c26c6181840ef727cfc550491368cef1" target="_blank">
			Autodesk Dynamo for Alias Case Study</a>
		</div>

		<div class="grid-item website">
			<a href="index.php" target="_blank">Portfolio website</a>
		</div>

	</div>

</body>
</html>