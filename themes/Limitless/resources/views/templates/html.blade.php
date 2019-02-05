<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('title')</title>

	<!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{!! asset("themes/" . Theme::getCurrent() . '/global_assets/css/icons/icomoon/styles.css') !!} " rel="stylesheet" type="text/css">
	<link href="{!! asset("themes/" . Theme::getCurrent() . '/assets/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css">
	<link href="{!! asset("themes/" . Theme::getCurrent() . '/assets/css/bootstrap_limitless.min.css') !!}" rel="stylesheet" type="text/css">
	<link href="{!! asset("themes/" . Theme::getCurrent() . '/assets/css/layout.min.css') !!}" rel="stylesheet" type="text/css">
	<link href="{!! asset("themes/" . Theme::getCurrent() . '/assets/css/components.min.css') !!}" rel="stylesheet" type="text/css">
	<link href="{!! asset("themes/" . Theme::getCurrent() . '/assets/css/colors.min.css') !!}" rel="stylesheet" type="text/css">
	@yield('plugins_css')
	@yield('css')
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{!! asset("themes/" . Theme::getCurrent() . '/global_assets/js/main/jquery.min.js') !!}"></script>
	<script src="{!! asset("themes/" . Theme::getCurrent() . '/global_assets/js/main/bootstrap.bundle.min.js') !!}"></script>
	<script src="{!! asset("themes/" . Theme::getCurrent() . '/global_assets/js/plugins/loaders/blockui.min.js') !!}"></script>
	@yield('plugins_js')
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{!! asset("themes/" . Theme::getCurrent() . '/assets/js/app.js') !!}"></script>
	@yield('js')
	<!-- /theme JS files -->

</head>

<body class="@yield('body-class')">
  @yield('container')
</body>
</html>
