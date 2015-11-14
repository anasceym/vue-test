<html>
	<head>
		<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/custom.css"/>
	</head>
	<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<h1>Practice 1</h1>

				<h2>Task manager</h2>

				<div id="task">
					<div class="row">
						<div class="col-md-12">
							<form class="form-inline">
								<div class="form-group">
									<input type="text" class="form-control" v-model="newTask"
										   placeholder="I would like to do...">
								</div>
								<a class="btn btn-default" v-on:click="addNewTask()">Add new Task</a>
							</form>
						</div>
					</div>
					<div class="row" v-show="tasks.length">
						<div class="col-md-12">
							<h3>Task added : <small>Completed ( <span>{{ task.length | completed }}</span>)</small></h3>
							<table class="table">
								<thead>
								<tr>
									<th>#</th>
									<th>Task</th>
									<th>Action</th>
								</tr>
								</thead>
								<tbody>
								<tr v-for="task in tasks" v-bind:class="{success: task.isDone}">
									<td>{{ $index+1 }}</td>
									<td>{{ task.name }}</td>
									<td>
										<div class="checkbox">
											<input type="checkbox" v-model="task.isDone">
										</div>
										<a href="#" class="" v-on:click="removeTask($index)"><span
												class="glyphicon glyphicon-remove"></span></a>
									</td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		
		<script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="node_modules/vue/dist/vue.min.js"></script>
		<script type="text/javascript" src="js/task.js"></script>
	</body>
</html>