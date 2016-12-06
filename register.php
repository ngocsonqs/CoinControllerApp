<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>登録画面</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/casino.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
</head>
<body data-spy="scroll" data-target="#scrollSpy" id="top">
<header>
	<div id="scrollSpy">
		<div class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a href="#top" class="navbar-brand spyLink"><i class="fa fa-diamond" aria-hidden="true"></i></a>
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="navbar-collapse collapse" id="navbar-main">
					<ul class="nav navbar-nav">
						<li><a href="#ranking" class="spyLink"><i class="fa fa-trophy" aria-hidden="true"></i> ランキング</a></li>
						<li><a href="#tweet" class="spyLink"><i class="fa fa-bullhorn" aria-hidden="true"></i> みんなの声</a></li>
						<li><a href="#rule" class="spyLink"><i class="fa fa-book" aria-hidden="true"></i> ルール</a></li>
						<li><a href="#result" class="spyLink"><i class="fa fa-gavel" aria-hidden="true"></i> 結果登録</a></li>
						<li><a href="#history" class="spyLink"><i class="fa fa-history" aria-hidden="true"></i> 履歴</a></li>
					</ul>
					<div class="nav navbar-form navbar-right">
						<div class="form-group text-success">
							●●さん！！(10位)
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="jumbotron special">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 outline">
				<h1>Let's Whizz Casino <i class="fa fa-diamond" aria-hidden="true"></i></h1>
				<p>ポイントを貯めて、豪華景品をGETしよう！！</p>
			</div>
		</div>
		<div class="row register-form">
			<div class="col-lg-12">
				<div class="bs-component">
					<form class="form-horizontal" action="登録処理先URL" method="POST">
						<div class="form-group text-left">
							<label for="username" class="col-lg-2 control-label">ユーザ名</label>
							<div class="col-lg-10">
								<input id="username" type="text" name="username" class="form-control" required>
							</div>
						</div>
						<div class="form-group text-left">
							<label for="username" class="col-lg-2 control-label">パスワード</label>
							<div class="col-lg-10">
								<input type="password" name="password" class="form-control" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-10 col-lg-offset-2">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<footer class="small">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center copyright">
				designed by OTANI
			</div>
		</div>
	</div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/animatescroll.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>

<script type="text/javascript">
	$('body').animatescroll();
	$('.spyLink').click( function () {
		var hrefValue = jQuery(this).attr( 'href' );
		$(hrefValue).animatescroll();
	});

	$('.tweets').masonry({ //親要素のクラスを指定
		itemSelector: '.tweet', //整理される要素のclassを指定
		columnWidth: 285, //一列の幅サイズを指定
		isAnimated: true, //スムースアニメーション設定
		isFitWidth: true, //親要素の幅サイズがピッタリ
		isRTL: false,		 //整理される要素が左右逆になる（読み言語などに）※デフォルト値：false
		gutterWidth: 0,	 //整理される要素間の溝の幅を指定
		containerStyle: { position: 'relative' }, //親要素にスタイルを追加できる
		isResizable: true, //ウィンドウサイズが変更された時に並び替え※デフォルト値：true
	});

	$('.bs-component [data-toggle="popover"]').popover();
	$('.bs-component [data-toggle="tooltip"]').tooltip();
</script>

</body>
</html>