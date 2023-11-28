<?php

http_response_code(400);

$time = time();
echo "
<html>
	<head>
		<title>Oops!</title>
		<link rel=\"stylesheet\" href=\"skins/roundcube_zvisno_skin/styles/styles.min.css?s={$time}\">
		<style>
			:root {
				--main-color: #c11d20;
			}
			.wrapper h1 {
				text-align: center;
				font-size: xxx-large;
				color: var(--main-color);
			}
			.wrapper table {
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
			}
			.wrapper a {
				padding: .5rem 1rem;
				font-size: 1.25rem;
				line-height: 1.5;
				border-radius: .3rem;
				cursor: pointer !important;
				background-color: var(--main-color);
				color: #fff;
				display: inline-block;
				box-shadow: 3px 3px 5px grey;
			}
			.gelatine {
				animation: gelatine 1s infinite;
			}
			@keyframes gelatine {
				from, to { transform: scale(1, 1); }
				25% { transform: scale(0.95, 1.05); }
				50% { transform: scale(1.05, 0.95); }
				75% { transform: scale(0.98, 1.02); }
			}
		</style>
	</head>
	<body>
		<div class=\"wrapper\">
			<table>
				<tbody>
					<tr>
						<td>
							<h1 class=\"\">Oops!</h1>
						</td>
					</tr>
					<tr>
						<td>
							<a class=\"button btn-primary gelatine\" href=\"/\">TO THE HOMEPAGE</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</body>
</html>
";