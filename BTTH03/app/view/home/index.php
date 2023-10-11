<!DOCTYPE html>
<html>
<head>
  <title>Library Management System</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Custom styles */

    /* Header */
    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
    }

    h1 {
      margin: 0;
    }

    /* Main content */
    .container {
      margin-top: 30px;
    }

    .jumbotron {
      padding: 30px;
      background-color: #f8f9fa;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }

    h2 {
      color: #333;
      font-weight: bold;
    }

    p {
      color: #555;
      font-size: 18px;
      margin-bottom: 20px;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      font-size: 18px;
      padding: 10px 20px;
    }

    .btn-primary:hover {
      background-color: #0069d9;
      border-color: #0062cc;
    }

    /* Footer */
    footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    /* Example additional styles */

    .library-image {
      width: 200px;
      height: auto;
      margin-bottom: 20px;
    }

    .feature-list {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    .feature-list li {
      margin-bottom: 10px;
    }

    .feature-list li:before {
      content: "\2022";
      color: #007bff;
      display: inline-block;
      width: 1em;
      margin-left: -1em;
    }

  </style>
</head>
<body>
  <header>
    <div class="container">
      <h1>Library Management System</h1>
    </div>
  </header>

  <div class="container">
    <div class = "d-flex justify-content-end">
        
        <a href="<?= DOMAIN .'index.php?c=book&a=add'?>" class="btn btn-success">Thêm sách</a>
    </div>
    <table class="table">
        <div class="header mt-5 d-flex align-items-center justify-content-between">
            <h3>Sách tại thư viện có</h3>
        </div>
            <thead>
                <tr>
                    <th scope="col">Mã sách</th>
                    <th scope="col">Tên sách</th>
                    <th scope="col">Năm xuất bản</th>
                    <th scope="col">Sửa/Xóa</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            <th scope="row">
            <?php foreach ($books as $book) {
                    ?>
                    <tr>

                        <th scope="row">
                            <?php echo $book -> getId() ?>
                        </th>
                        <td><?php echo $book -> getTenSach() ?></td>
                         <th scope="row">
                            <?php echo $book -> getNam() ?>
                        </th>
                        <th scope="row">
                            <a href="" class="btn btn-outline-warning">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a href="" class="btn btn-outline-warning">
                                <i class="bi bi-trash3"></i>
                            </a>


                        </td>
                    </tr>
                    <?php
                    }
                    ?>
            </tbody>
    </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>