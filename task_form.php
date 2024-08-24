<!DOCTYPE html>
<html>
    <head>
        <title>Daily task</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <div class="header">
        <h1>Daily Task</h1>
    </div>
   <div class="content container">
    <div class="container mt-5">
        <h2>Add new task</h2>
        <form action="task_submit.php" method="POST">
            <div class="form-group">
                <label for="taskname">Task Name:</label>
                <input type="text" class="form-control" id="taskname" name="taskname" required>
            </div>
            <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
            <div class="form-group">
                <label for="dueDate">Due Date:</label>
                <input type="date" class="form-control" id="dueDate" name="dueDate" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Task</button>
        </div>
        </div>
        <div class="footer">
            <p>© 2024 Daily Task</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</body>
</html>                  