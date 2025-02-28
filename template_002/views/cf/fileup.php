<?php
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
    $uploadDir = "model/upload/"; // 📌 model 폴더 안의 upload 폴더로 변경
    $fileName = basename($_FILES["file"]["name"]);
    $filePath = $uploadDir . $fileName;
    $fileType = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));

    // 업로드 폴더가 없으면 생성
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // 허용할 파일 확장자 목록
    $allowedTypes = ["jpg", "jpeg", "png", "gif", "pdf", "txt"];

    // 파일이 정상적으로 업로드 되었는지 확인
    if ($_FILES["file"]["error"] !== UPLOAD_ERR_OK) {
        die("파일 업로드 중 오류 발생.");
    }

    // 확장자 확인
    if (!in_array($fileType, $allowedTypes)) {
        die("허용되지 않는 파일 형식입니다.");
    }

    // 같은 파일명이 존재하면 덮어쓰지 않고 숫자 붙이기
    $i = 1;
    while (file_exists($filePath)) {
        $filePath = $uploadDir . pathinfo($fileName, PATHINFO_FILENAME) . "($i)." . $fileType;
        $i++;
    }

    // 파일 이동
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $filePath)) {
        echo "파일 업로드 성공: <a href='$filePath'>$filePath</a>";
    } else {
        echo "파일 업로드 실패.";
    }
}
?>
