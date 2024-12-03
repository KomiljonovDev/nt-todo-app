<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .edit-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .edit-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .btn-actions {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
<div class="edit-container">
    <h2 class="edit-header">Edit Task</h2>
    <form>
        <div class="form-group">
            <label for="taskName" class="form-label">Task Name</label>
            <input type="text" id="taskName" class="form-control" placeholder="Enter task name" value="Buy groceries">
        </div>
        <div class="form-group">
            <label for="taskStatus" class="form-label">Status</label>
            <select id="taskStatus" class="form-select">
                <option value="Pending" selected>Pending</option>
                <option value="Completed">Completed</option>
            </select>
        </div>
        <div class="form-group">
            <label for="taskDueDate" class="form-label">Due Date</label>
            <input type="date" id="taskDueDate" class="form-control" value="2024-12-12">
        </div>
        <div class="btn-actions">
            <button type="submit" class="btn btn-primary">Save Changes</button>
            <a href="index.html" class="btn btn-secondary">Back to Todo list</a>
        </div>
    </form>
</div>
</body>
</html>