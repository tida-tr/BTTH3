<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Tasks List App</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #566787;
	background: #f5f5f5;
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
	padding-bottom: 15px;
	background: #435d7d;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr:first-child {
	width: 60px;
}
table.table tr:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.show {
	color:rgb(106, 255, 7);
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.delete {
	color: #F44336;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
	background: #03A9F4;
}
.pagination li.active a:hover {        
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}    
/* Custom checkbox */
.custom-checkbox {
	position: relative;
}
.custom-checkbox input[type="checkbox"] {    
	opacity: 0;
	position: absolute;
	margin: 5px 0 0 3px;
	z-index: 9;
}
.custom-checkbox label:before{
	width: 18px;
	height: 18px;
}
.custom-checkbox label:before {
	content: '';
	margin-right: 10px;
	display: inline-block;
	vertical-align: text-top;
	background: white;
	border: 1px solid #bbb;
	border-radius: 2px;
	box-sizing: border-box;
	z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	content: '';
	position: absolute;
	left: 6px;
	top: 3px;
	width: 6px;
	height: 11px;
	border: solid #000;
	border-width: 0 3px 3px 0;
	transform: inherit;
	z-index: 3;
	transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
	border-color: #03A9F4;
	background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
	color: #b8b8b8;
	cursor: auto;
	box-shadow: none;
	background: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
	max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px 30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background: #ecf0f1;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}	
.modal form label {
	font-weight: normal;
}	
</style>
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2><b>Tasks </b>List</h2>
					</div>
					<div class="col-sm-6">
						<a href="{{route('tasks.create')}}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Task</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>ID</th>
						<th>Title</th>
						<th>Description</th>
						<!-- <th>Long_Description</th> -->
						<th>Completed</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th width="15%">Actions</th>
					</tr>
				</thead>
				<tbody>
                    @foreach($tasks as $task)
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox{{$task->id}}" name="options[]" value="{{$task->id}}">
								<label for="checkbox{{$task->id}}"></label>
							</span>
						</td>
						<td>{{$task->id}}</td>
						<td>{{$task->title}}</td>
						<td>{{$task->description}}</td>
						<!-- <td><?php //echo $task->long_description?></td> -->
                        <td>
                            @if ($task->completed == 1)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
                                <label class="form-check-label text-success" for="flexCheckCheckedDisabled">
                                    Đã hoàn thành
                                </label>
                            </div>
                            @else
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled>
                                <label class="form-check-label text-danger" for="flexCheckDisabled">
                                    Chưa hoàn thành
                                </label>
                            </div>
                            @endif
                        </td>
                        <td>{{$task->created_at}}</td>
                        <td>{{$task->updated_at}}</td>
						<td>
                            <a href="{{route('tasks.show', ['task' => $task->id])}}" class="show"><i class="material-icons" title="Show">visibility</i></a>
							<a href="{{route('tasks.edit', ['task' => $task->id])}}" class="edit"><i class="material-icons" title="Edit">&#xE254;</i></a>
							<a href="{{route('tasks.destroy', ['task' => $task->id])}}" class="delete" data-toggle="modal" data-target="#deleteModal{{$task->id}}"><i class="material-icons" title="Delete">&#xE872;</i></a>		
						</td>
					</tr>    
					              
					<div id="deleteModal{{$task->id}}" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<form action="{{route('tasks.destroy', ['task' => $task->id])}}" method="POST">
									@csrf
									@method ('DELETE')
									<input type="hidden" name="id" id="id" value="{{$task->id}}">
									<div class="modal-header">						
										<h4 class="modal-title">Delete Task</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">					
										<p>Bạn có chắc chắn xóa bỏ nhiệm vụ:</p>
										<p>{{$task->id}}</p>
										<p class="text-warning"><small>Hành động không thể hoàn tác</small></p>
									</div>
									<div class="modal-footer">
										<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
										<input type="submit" class="btn btn-danger" value="Delete">
									</div>
								</form>
							</div>
						</div>
					</div>
					@endforeach
				</tbody>
			</table>
			<div class="clearfix">
    <div class="hint-text">Showing <b>{{ $tasks->count() }}</b> out of <b>{{ $tasks->total() }}</b> entries</div>

    <ul class="pagination">
        <!-- Liên kết "Previous" -->
        <li class="page-item {{ $tasks->onFirstPage() ? 'disabled' : '' }}">
            <a href="{{ $tasks->previousPageUrl() }}" class="page-link">Previous</a>
        </li>

        <!-- Hiển thị các trang xung quanh trang hiện tại -->
        @php
            $currentPage = $tasks->currentPage();
            $lastPage = $tasks->lastPage();
            $startPage = max(1, $currentPage - 1); // Bắt đầu từ trang hiện tại - 1 (tối thiểu là trang 1)
            $endPage = min($lastPage, $currentPage + 1); // Kết thúc tại trang hiện tại + 1 (tối đa là trang cuối cùng)
        @endphp

        <!-- Hiển thị trang 1 -->
        @if ($startPage > 1)
            <li class="page-item">
                <a href="{{ $tasks->url(1) }}" class="page-link">1</a>
            </li>
            @if ($startPage > 2) <li class="page-item disabled"><span class="page-link">...</span></li> @endif
        @endif

        <!-- Các trang xung quanh trang hiện tại -->
        @for ($i = $startPage; $i <= $endPage; $i++)
            <li class="page-item {{ $tasks->currentPage() == $i ? 'active' : '' }}">
                <a href="{{ $tasks->url($i) }}" class="page-link">{{ $i }}</a>
            </li>
        @endfor

        <!-- Hiển thị trang cuối -->
        @if ($endPage < $lastPage)
            @if ($endPage < $lastPage - 1) <li class="page-item disabled"><span class="page-link">...</span></li> @endif
            <li class="page-item">
                <a href="{{ $tasks->url($lastPage) }}" class="page-link">{{ $lastPage }}</a>
            </li>
        @endif

        <!-- Liên kết "Next" -->
        <li class="page-item {{ !$tasks->hasMorePages() ? 'disabled' : '' }}">
            <a href="{{ $tasks->nextPageUrl() }}" class="page-link">Next</a>
        </li>
    </ul>
</div>

		</div>
	</div>        
</div>
<!-- Delete Modal HTML -->

</body>
</html>