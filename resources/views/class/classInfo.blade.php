<style type="text/css">
	
.academic-detail {
	white-space: normal;
	width: 300px;
}	
table tbody > tr > td {
	vertical-align: : middle;
}
#table-class-info {
	width: 100%;
}
</style>

<table class="table-hover table-striped table-condensed table-bordered table-class-info" id="table-class-info">
	<thead>
	<th>Program</th>
	<th>Level</th>
	<th>Shift</th>
	<th>Time</th>
	<th>Academic Detail</th>
	<th>Action</th>
	</thead>
	<tbody>
		@foreach($classes as $key => $c)
<tr>
	<td>{{$c->program}}</td>
	<td>{{$c->level}}</td>
	<td>{{$c->shift}}</td>
	<td>{{$c->times}}</td>
	<td class="academic-detail">
		<a href="#" data-id="{{$c->class_id}}" id="class-edit">
Program: {{ $c->program }} / Level: {{$c->level}} / Shift: {{$c->shift}} /
Time: {{$c->times}} / Batch: {{$c->batch}} / Groups: {{$c->groups}} / StartDate: {{date("d-M-y",strtotime($c->start_date))}} /
EndDate: {{date("d-M-y",strtotime($c->end_date))}}
		</a>
	</td>
	<td style="vertical-align: middle; width: 50px">
	<button value="{{$c->class_id}}" class="btn btn-danger btn-sm del-class">Del</button>
	</td>
</tr>
		@endforeach
	</tbody>
</table>