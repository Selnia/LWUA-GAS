@extends('layouts.default')

@section('title', 'Dashboard')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/flipclock/flipclock.css') }}" media="screen,projection">
@endsection

@section('content-title', 'Dashboard')

@section('content')
<nav id="horizontal-nav" class="white hide-on-med-and-down">
	<div class="nav-wrapper">                  
		<ul id="ul-horizontal-nav" class="left hide-on-med-and-down">
			<li>
				<a class="dropdown-menu cyan-text" href="#!" data-activates="MSSRdropdown">
					<i class="material-icons">insert_chart</i>
					<span>Stock Status Report</span>
				</a>
			</li>
			<ul id="MSSRdropdown" class="dropdown-content dropdown-horizontal-list nested">
				@for($m=1; $m<=12; ++$m)
				<li><a class="dropdown-menu cyan-text" href="#!" data-activates="MSSRdropdown{{$m}}" data-beloworigin="false">{{ date('F', mktime(0, 0, 0, $m, 1)) }}<i class="material-icons dropdown-icon right">chevron_right</i></a></li>
				@endfor
			</ul>
			@for($m=1; $m<=12; ++$m)
			<ul id="MSSRdropdown{{$m}}" class="dropdown-content dropdown-horizontal-list">
				@for($n=1; $n<=5; ++$n)
				<li><a href="{{ url('msi/viewstockstatus/'.$m.'/'.$n) }}" target="Monthly Stock Status Report" class="cyan-text">{{ \Carbon\Carbon::now()->year-$n+1 }}</a></li>
				@endfor
			</ul>
			@endfor
			<li>
				<a class="dropdown-menu cyan-text" href="#!" data-activates="IRdropdown">
					<i class="material-icons">description</i>
					<span>Inventory Report</span>
				</a>
			</li>
			<ul id="IRdropdown" class="dropdown-content dropdown-horizontal-list nested">
				<li><a class="dropdown-menu cyan-text" href="#!" data-activates="MIRdropdown" data-beloworigin="false">Monthly<i class="material-icons dropdown-icon right">chevron_right</i></a></li>
				<li><a class="dropdown-menu cyan-text" href="#!" data-activates="QIRdropdown" data-beloworigin="false">Quarterly<i class="material-icons dropdown-icon right">chevron_right</i></a></li>
				<li><a class="dropdown-menu cyan-text" href="#!" data-activates="SAIRdropdown" data-beloworigin="false">Semiannually<i class="material-icons dropdown-icon right">chevron_right</i></a></li>
				<li><a class="dropdown-menu cyan-text" href="#!" data-activates="AIRdropdown" data-beloworigin="false">Annually<i class="material-icons dropdown-icon right">chevron_right</i></a></li>
			</ul>
			<ul id="MIRdropdown" class="dropdown-content dropdown-horizontal-list nested">
				@for($m=1; $m<=12; ++$m)
				<li><a class="dropdown-menu cyan-text" href="#!" data-activates="MIRdropdown{{$m}}" data-beloworigin="false">{{ date('F', mktime(0, 0, 0, $m, 1)) }}<i class="material-icons dropdown-icon right">chevron_right</i></a></li>
				@endfor
			</ul>
			@for($m=1; $m<=12; ++$m)
			<ul id="MIRdropdown{{$m}}" class="dropdown-content dropdown-horizontal-list">
				@for($n=1; $n<=5; ++$n)
				<li><a href="{{ url('msi/viewinventory/monthly/'.$m.'/'.$n) }}" target="Monthly Inventory Report" class="cyan-text">{{ \Carbon\Carbon::now()->year-$n+1 }}</a></li>
				@endfor
			</ul>
			@endfor
			<ul id="QIRdropdown" class="dropdown-content dropdown-horizontal-list nested">
				@for($m=1; $m<=4; ++$m)
				<li><a class="dropdown-menu cyan-text" href="#!" data-activates="QIRdropdown{{$m}}" data-beloworigin="false">Quarter {{ $m }}<i class="material-icons dropdown-icon right">chevron_right</i></a></li>
				@endfor
			</ul>
			@for($m=1; $m<=4; ++$m)
			<ul id="QIRdropdown{{$m}}" class="dropdown-content dropdown-horizontal-list">
				@for($n=1; $n<=5; ++$n)
				<li><a href="{{ url('msi/viewinventory/quarterly/'.$m.'/'.$n) }}" target="Quarterly Inventory Report" class="cyan-text">{{ \Carbon\Carbon::now()->year-$n+1 }}</a></li>
				@endfor
			</ul>
			@endfor
			<ul id="SAIRdropdown" class="dropdown-content dropdown-horizontal-list nested">
				<li><a class="dropdown-menu cyan-text" href="#!" data-activates="SAIRdropdown1" data-beloworigin="false">1st Half<i class="material-icons dropdown-icon right">chevron_right</i></a></li>
				<li><a class="dropdown-menu cyan-text" href="#!" data-activates="SAIRdropdown2" data-beloworigin="false">2nd Half<i class="material-icons dropdown-icon right">chevron_right</i></a></li>
			</ul>
			@for($m=1; $m<=2; ++$m)
			<ul id="SAIRdropdown{{$m}}" class="dropdown-content dropdown-horizontal-list">
				@for($n=1; $n<=5; ++$n)
				<li><a href="{{ url('msi/viewinventory/semiannually/'.$m.'/'.$n) }}" target="Semiannually Inventory Report" class="cyan-text">{{ \Carbon\Carbon::now()->year-$n+1 }}</a></li>
				@endfor
			</ul>
			@endfor
			<ul id="AIRdropdown" class="dropdown-content dropdown-horizontal-list">
				@for($n=1; $n<=5; ++$n)
				<li><a href="{{ url('msi/viewinventory/annually/'.$n) }}" target="Annually Inventory Report" class="cyan-text">{{ \Carbon\Carbon::now()->year-$n+1 }}</a></li>
				@endfor
			</ul>
		</ul>
	</div>
</nav>
<div class="card-panel clock-zoom right">
	<div class="clock"></div>
	<h5 class="center-align cyan-text">{{ \Carbon\Carbon::now()->format('F j, Y') }}</h5>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('vendor/flipclock/flipclock.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function() {
		var clock = $('.clock').FlipClock({
			clockFace: 'TwelveHourClock'
		});
	});
</script>
@endsection