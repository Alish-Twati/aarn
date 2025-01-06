<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Members</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
            display: flex;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #333;
            color: white;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 10px;
            text-decoration: none;
            margin: 10px 0;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #575757;
        }

        .main-content {
            margin-left: 270px;
            padding: 20px;
            width: 100%;
        }

        .header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            font-size: 24px;
        }

        .form-container {
            margin-top: 20px;
            background-color: white;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .form-container input, .form-container textarea {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form-container input[type="file"] {
            margin: 10px 0;
        }

        .form-container button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #45a049;
        }

        .table-container {
            margin-top: 20px;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <h2>Admin Panel</h2>
        <a href="admin-dashboard.php">Dashboard</a>
        <a href="members.php">Members</a>
        <a href="logout.php">Logout</a>
    </div>

    <div class="main-content">
        <div class="header">
            Manage Members
        </div>

        <!-- Add/Edit Member Form -->
        <div class="form-container">
            <h3><?php echo isset($member) ? "Edit Member" : "Add Member"; ?></h3>
            <form action="members.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo isset($member) ? $member['id'] : ''; ?>">
                <input type="hidden" name="existing_photo" value="<?php echo isset($member) ? $member['photo'] : ''; ?>">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="<?php echo isset($member) ? $member['name'] : ''; ?>" required>

                <label for="age">Age</label>
                <input type="number" name="age" id="age" value="<?php echo isset($member) ? $member['age'] : ''; ?>" required>

                <label for="address">Address</label>
                <textarea name="address" id="address" rows="4" required><?php echo isset($member) ? $member['address'] : ''; ?></textarea>

                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" value="<?php echo isset($member) ? $member['phone'] : ''; ?>" required>

                <label for="photo">Photo</label>
                <input type="file" name="photo" id="photo" <?php echo isset($member) ? '' : 'required'; ?>>
                <?php if (isset($member) && $member['photo']) { ?>
                    <img src="<?php echo $member['photo']; ?>" alt="Member Photo" width="100" height="100">
                <?php } ?>

                <button type="submit" name="<?php echo isset($member) ? 'update_member' : 'add_member'; ?>"><?php echo isset($member) ? 'Update Member' : 'Add Member'; ?></button>
            </form>
        </div>

        <!-- Members Table -->
        <div class="table-container">
            <h3>Existing Members</h3>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Photo</th>
                    <th>Actions</th>
                </tr>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["age"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["address"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["phone"]) . "</td>";
                        echo "<td><img src='" . $row["photo"] . "' alt='Photo' width='50'></td>";
                        echo "<td>
                            <a href='members.php?edit_id=" . $row["id"] . "' class='btn'>Edit</a>
                            <a href='members.php?delete_id=" . $row["id"] . "' class='btn' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                        </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No members found.</td></tr>";
                }
                ?>
            </table>
        </div>
    </div>

</body>

</html>
