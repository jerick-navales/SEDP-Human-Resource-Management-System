<?php
include('../../../Database/db.php');

$action = $_POST['action'];

if ($action == 'add') {
    $name = $_POST['name'];
    $school = $_POST['school'];
    $contact_no = $_POST['contact_no'];
    $admission_date = $_POST['admission_date'];

    $stmt = $conn->prepare("SELECT id FROM recipient WHERE name = ? AND school = ? AND contact_no = ? AND admission_date = ?");
    $stmt->bind_param("ssss", $name, $school, $contact_no, $admission_date);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        echo json_encode(['status' => 'exists']); // Record exists
    } else {
        $stmt = $conn->prepare("INSERT INTO recipient (name, school, contact_no, admission_date) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $school, $contact_no, $admission_date);
        $stmt->execute();
        $stmt->close();
        echo json_encode(['status' => 'success']);
    }
} elseif ($action == 'fetch') {
    $result = $conn->query("SELECT * FROM recipient");
    $output = '';
    while ($row = $result->fetch_assoc()) {
        $output .= '
            <tr>
                <td>' . htmlspecialchars($row['id']) . '</td>
                <td>' . htmlspecialchars($row['name']) . '</td>
                <td>' . htmlspecialchars($row['school']) . '</td>
                <td>' . htmlspecialchars($row['contact_no']) . '</td>
                <td>' . htmlspecialchars($row['admission_date']) . '</td>
                <td>
                    <button class="btn btn-info edit" data-id="' . htmlspecialchars($row['id']) . '">Edit</button>
                    <button class="btn btn-danger delete" data-id="' . htmlspecialchars($row['id']) . '">Delete</button>
                </td>
            </tr>
        ';
    }
    echo $output;
} elseif ($action == 'edit') {
    $id = $_POST['id'];
    $stmt = $conn->prepare("SELECT * FROM recipient WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stmt->close();
    echo json_encode($row);
} elseif ($action == 'update') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $school = $_POST['school'];
    $contact_no = $_POST['contact_no'];
    $admission_date = $_POST['admission_date'];

    $stmt = $conn->prepare("UPDATE recipient SET name = ?, school = ?, contact_no = ?, admission_date = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $name, $school, $contact_no, $admission_date, $id);
    $stmt->execute();
    $stmt->close();
    echo json_encode(['status' => 'success']);
} elseif ($action == 'delete') {
    $id = $_POST['id'];
    $stmt = $conn->prepare("DELETE FROM recipient WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    echo json_encode(['status' => 'success']);
}


$conn->close();
