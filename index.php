<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test bộ đếm bao nhiêu lần truy cập</title>
</head>
<body>
    <h1>Hello anh em nha </h1>
    <h2>
    <?php
          $CountFile = "index.log";  //Trước tiên ta khai báo cho PHP biết giá trị biến đếm được lưu ở đâu, hay có thể hiểu tên tệp lưu giá trị đếm là gì.
          $CF = fopen ($CountFile, "r"); //Mở tệp tin ở chế độ đọc (thuộc tính “r”) và gán con trỏ tệp tin cho $CF.
          $Views = fread ($CF, filesize ($CountFile)); //Đọc toàn bộ nội dung của tệp index.log, sau đó lấy kết quả lưu vào biến $Views 
          fclose ($CF); // đóng lại
          $Views++; //cộng số lần truy cập lên

          //mở tệp bộ đếm rồi ghi lại giá trị
          $CF = fopen ($CountFile, "w");
          fwrite ($CF, $Views); 
          fclose ($CF); 
          echo ($Views); 
    ?>
    </h2>
</body>
</html>