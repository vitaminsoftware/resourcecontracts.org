@extends('layout.app-full')
@section('css')
	<link rel="stylesheet" href="{{ asset('css/annotator.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/contract-view.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}"/>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
@stop
@section('content')
	<div id="content">
		<div id="content">
			<div class="loading"><img src="{{url('images/loading.gif')}}"/>@lang('annotation.loading')</div>
		</div>
	</div>
@stop
@section('script')
	<script>
		function nl2br(str, is_xhtml) {
			var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';
			return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');
		}

		var debug = function () {
			var DEBUG = false;
			if (DEBUG) {
				console.log("-----");
				for (var i = 0; i < arguments.length; i++) {
					console.log(arguments[i]);
				}
			}
		};

		var LANG = {!! json_encode(trans('annotation'))!!};
		var back_url = '{!!$back!!}';
		var app_url = '{{url()}}';
		var contractTitle = "{{$contract->title}}";
		var contractAppSetting = {
			contract_id: '{{$contract->id}}',
			total_pages: '{{$contract->pages->count()}}',
			allpage_url: "{{route('contract.allpage.get', ['id'=>$contract->id])}}",
			annotation_url: "{{route('contract.annotations', ['id'=>$contract->id])}}",
			search_url: "{{route('contract.page.search', ['id'=>$contract->id])}}",
			categories_codelist: {!! json_encode(trans("codelist/annotation.annotation_category")) !!},
			page_no: 1
		};
	</script>
	<script src="{{ asset('assets/js/app.js') }}"></script>
@stop
