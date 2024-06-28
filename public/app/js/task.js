async function postTask() {
    const url = 'http://localhost:8000/api/tasks'
    const taskDescription = document.getElementById('taskDescription').value;
    const taskData = {
        description:taskDescription
    }
    const response = await fetch(url, {
      method: "POST", 
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify(taskData), 
    });
    
    response.then(setTimeout(() => {
        location.reload()
      }, 500))
    .catch(error => console.log(error));
  }
async function updateTask(taskId) {
    const url = 'http://localhost:8000/api/tasks/'+taskId
    const taskDescription = document.getElementById('taskDescription'+taskId).value
    const response = await fetch(url, {
        method: "PATCH", 
        headers: {
          "Content-Type": "application/json"
        },
        body: JSON.stringify({description: taskDescription}), 
      });
    response.then(location.reload())
    .catch(error => console.log(error));
}

async function deleteTask(taskId){
    const url = 'http://localhost:8000/api/tasks/'+taskId
    fetch(url, {
        method: 'DELETE',
        })
        .then(res => {
        if (res.ok) {
        console.log('Resource deleted successfully');
        } else {
        console.error('Error deleting resource:', res.status);
        }
        })
        .then(setTimeout(() => {
            location.reload()
          }, 500))
        .catch(error => console.error('Error deleting resource:', error));
}

async function completeTask(taskId, taskIsCompleted){
    const url = 'http://localhost:8000/api/tasks/complete/'+taskId
    console.log(url)
    const response = await fetch(url, {
        method: "PATCH", 
        headers: {
          "Content-Type": "application/json"
        },
        body: JSON.stringify({is_complete: !taskIsCompleted}),
      })
      .then(setTimeout(() => {
        location.reload()
      }, 500))
      .catch(error => console.error('Error deleting resource:', error));
}