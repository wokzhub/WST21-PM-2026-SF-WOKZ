# Personal Task Manager

## Project Information

| Information | Details |
|---|---|
| **Project Code** | WST21-PM-2026-SF |
| **Student Name** | LEE, SUAN |
| **Course & Year** | BSIT 2 - SECTION 9 |
| **Database Used** | MySQL |

---

## Project Overview

A simple **Personal Task Manager** built using **Laravel**. The system allows users to create, view, edit, delete, and update the status of their personal tasks.

The application provides a simple and user-friendly interface for managing daily tasks.

---

## Features

- ✅ Add Task
- 👁️ View Tasks
- ✏️ Edit Task
- 🗑️ Delete Task
- 🔄 Update Task Status

---

## Task Status

The system supports two task statuses:

- **Pending**
- **Completed**

---

## Technologies Used

- **Laravel**
- **PHP**
- **MySQL**
- **HTML**
- **CSS**
- **Bootstrap**

---

# Screenshots

## 1. Task List

The Task List page displays all created tasks, including the task name, description, due date, status, and available actions.

![Task List](screenshots/task-list.png)

---

## 2. Add Task

The Add Task page allows the user to create a new task by entering the task name, description, due date, and status.

![Add Task](screenshots/add-task.png)

---

## 3. Edit Task

The Edit Task page allows the user to modify an existing task's information, including its name, description, due date, and status.

![Edit Task](screenshots/edit-task.png)

---

## 4. Update Status

The Update Status feature allows the user to change a task between **Pending** and **Completed**.

![Update Status](screenshots/update-status.png)

---

# Project Structure

```text
Personal Task Manager
│
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── TaskController.php
│   │
│   └── Models/
│       └── Task.php
│
├── database/
│   └── migrations/
│       └── create_tasks_table.php
│
├── resources/
│   └── views/
│       └── tasks/
│           ├── index.blade.php
│           ├── create.blade.php
│           └── edit.blade.php
│
├── routes/
│   └── web.php
│
├── screenshots/
│   ├── task-list.png
│   ├── add-task.png
│   ├── edit-task.png
│   └── update-status.png
│
├── .env
├── composer.json
└── README.md
