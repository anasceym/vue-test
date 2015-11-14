new Vue({
	el: '#task',
	
	data: {
		tasks: [],
		newTask: '',
		liked: true,
	},
	
	filters: {
		completed: function {
			return this.tasks.filter(function);
		}
	},
	
	methods: {
		addNewTask: function() {
			console.log('[App] Adding new task');
			
			var text = this.newTask.trim();
			
			if(text) {
				this.tasks.push({
					name : text,
					isDone : false
				});
				this.newTask = '';
			}
		},
		
		removeTask: function(index) {
			console.log('[App] Removing task '+index);
			
			this.tasks.splice(index, 1);
		}
	}
});